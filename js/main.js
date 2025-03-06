$(document).ready(function () {
    var name = $('#name')
        , email = $('#email')
        , usecase = $('#usecase')
        , csrf = $('#csrf')
        , form = $('#form')
        , thankYou = $('#thank-you')
        , downloads = $('#downloads')
        , response
        , key;

    form.on('submit', function (event) {
        event.preventDefault();

        if (csrf.val() === '') {
            return false;
        }

        $.ajax('/', {
            method: 'POST',
            data: {
                name: name.val(),
                email: email.val(),
                usecase: usecase.val(),
                csrf: csrf.val(),
                g_recaptcha_response: grecaptcha.getResponse()
            },
            beforeSend: function () {
                csrf.val('');
            },
            success: function (data, status, jqXHR) {
                //Reset the captcha
                grecaptcha.reset();
                //If successful redirect to signUpSuccessful page along with the email
                //Calling the redirectWithPost method to redirect with post params
                var params = [];                            
                params["email"] = email.val();                    
                redirectWithPost('/signUpSuccessful.php', params);
            },
            error: function (jqXHR, status, error) {
                response = jQuery.parseJSON(jqXHR.responseText);

                if (response.message !== undefined) {
                    if (response.message  == "This email address already exists in our system.") {
                        thankYou.addClass('alert-warning');
                        thankYou.text("It looks like you already have an account with us. ");
                        var aTag = document.createElement('a');
                        aTag.setAttribute('href',"https://my.opencellid.org/dashboard/login?ref=opencellid");
                        aTag.target = "_blank";
                        aTag.innerHTML = "Click here to request a link to login.";
                        thankYou.append(aTag);
                        thankYou.append(".");
                        //Reset the captcha
                        grecaptcha.reset();
                        //Unhide the thankYou message label
                        thankYou.css('visibility', 'visible');
                    } else {
                        thankYou.addClass('alert-warning');
                        thankYou.text(response.message);
                        //Reset the captcha
                        grecaptcha.reset();
                        //Unhide the thankYou message label
                        thankYou.css('visibility', 'visible');
                    }
                } else {
                    thankYou.addClass('alert-warning');
                    thankYou.text('Ouch, something went wrong! Please refresh your the webpage and try again!');
                    //Reset the captcha
                    grecaptcha.reset();
                    //Unhide the thankYou message label
                    thankYou.css('visibility', 'visible');
                }

                if (response.csrf !== undefined) {
                    csrf.val(response.csrf);
                }
            },
            complete: function () {
                thankYou.removeClass('hidden');
            }
        });
    });

    usecase.change(function () {
        if ($(this).val() === "") {
            $(this).addClass("empty");
        } else {
            $(this).removeClass("empty");
        }
    });

    //In case of Account already exists error due to already registered email, 
    // hide the error message label if it's not hidden, as soon as email is being edited. 
    email.keydown(function() {
        let thankYou = document.getElementById('thank-you');
        //If thankYou text label is not hidden then hide it
        if (!thankYou.classList.contains('hidden')) {
            thankYou.style.visibility = "hidden";
        }
    });
});

//Redirect with post parameters
var redirectWithPost = function (url, params) {
    var formElement = document.createElement("form");
    formElement.setAttribute("method", "post");
    formElement.setAttribute("action", url);
    formElement.setAttribute("target", "_parent");

    for (param in params) {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("name", param);
        hiddenField.setAttribute("value", params[param]);
        formElement.appendChild(hiddenField);
    }

    document.body.appendChild(formElement);
    formElement.submit();
}