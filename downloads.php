<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="title" content="OpenCelliD - Open Database of Cell Towers & Geolocation">
    <meta name="keywords" content="cell towers, cell id, wifi positioning, cell database, geolocation, location api, iot location">
    <meta name="description" content="OpenCelliD is the largest Open Database of Cell Towers & their locations. You can geolocate IoT & Mobile devices without GPS, explore Mobile Operator coverage and more!">
    <meta name="subject" content="Open Database of Cell Towers, Cell & WiFi geolocation">
    <meta name="language" content="en">
    <meta name="robots" content="index,follow">
    <title>Data Downloads - OpenCelliD - Largest Open Database of Cell Towers & Geolocation - by Unwired Labs</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    
    <link rel="stylesheet" href="/startup/flat-ui/bootstrap/css/bootstrap.css?v=1.1.6">
    <link rel="stylesheet" href="/startup/flat-ui/css/flat-ui.css?v=1.1.6">
    <link rel="stylesheet" href="/css/style.css?v=1.1.6">

    <script type="text/javascript" src="/startup/common-files/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/startup/flat-ui/js/bootstrap.min.js?v=1.1.6"></script>
    <script type="text/javascript" src="/startup/common-files/js/modernizr.custom.js?v=1.1.6"></script>
    <script type="text/javascript" src="/startup/common-files/js/page-transitions.js?v=1.1.6"></script>
    <script type="text/javascript" src="/startup/common-files/js/easing.min.js?v=1.1.6"></script>
    <script type="text/javascript" src="/startup/common-files/js/jquery.svg.js?v=1.1.6"></script>
    <script type="text/javascript" src="/startup/common-files/js/jquery.svganim.js?v=1.1.6"></script>
    <script type="text/javascript" src="/startup/common-files/js/startup-kit.js?v=1.1.6"></script>
    <!-- Add FAQ styles -->
    <style>
        .faq-section {
            padding: 40px 0;
            margin-top: 30px;
            background-color: #f8f9fa;
        }
        
        .accordion-item {
            margin-bottom: 10px;
            border: 1px solid #e5e5e5;
        }
        
        .accordion-header {
            margin: 0;
        }
        
        .accordion-button {
            width: 100%;
            padding: 15px;
            background-color: #fff;
            border: none;
            text-align: left;
            font-weight: 500;
        }
        
        .accordion-button:hover {
            background-color: #f8f9fa;
        }
        
        .accordion-button.collapsed:after {
            content: '+';
            float: right;
        }
        
        .accordion-button:not(.collapsed):after {
            content: '-';
            float: right;
        }
        
        .accordion-body {
            padding: 20px;
            color: #1f1f1f;
            border-top: 1px solid #e5e5e5;
            font-size: 14px;
            text-align: left;
        }
        .accordion-body p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <!-- header-6 -->
    <header class="header-6">
        <div class="container">
            <div class="row">
                <div class="navbar col-sm-offset-1 col-sm-10" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"></button>
                        <a class="brand" href="/"  style="z-index: 200;">
                            <img src="/images/opencellid_logo.png" alt="OpenCelliD">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav">
                            <!-- <li><a href="#register">GET STARTED</a></li> -->
                            <li><a href="/stats.php">STATS</a></li>
                            <li><a href="/downloads.php">DATA</li>
                            <li><a href="http://wiki.opencellid.org" target="_blank">DOCS</a></li>
                            <li><a href="https://unwiredlabs.com/locationapi?ref=opencellid" target="_blank">ENTERPRISE</a></li>
                            <li><a href="https://community.opencellid.org/" target="_blank">COMMUNITY</a></li>
                            <li><a href="https://my.opencellid.org/dashboard?ref=opencellid" target="_blank">LOGIN</a></li>
                            <li><a href="/register.php" target="_blank">SIGN UP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header><section class="header-6-sub">
    <div class="container">
        <div class="col-sm-12  maintext">
            <div class="row">
                <h3>Open Data</h3>
                <p>On this page, you can download computed Cell Tower data for specific countries. <br>To see the download links, please enter your API Access Token:</p>
            </div>
        </div>
        <div class="row" id="register">
            <div class="col-sm-offset-1 col-sm-10 downloads-form">
                <form id="show-files" action="/downloads.php" method="get">
                    <div class="clearfix">
                        <input id="token" name="token" type="text" class="form-control" placeholder="API Access Token" required value="" />
                        <button type="submit" class="btn btn-primary">
                            Show Files
                        </button>
                    </div>
                </form>
            </div>
            <div class="text-left col-sm-10 col-sm-offset-1" style="margin-top:20px">
                <h4>License & Attribution requirement</h4>
                <p>Products or services using data derived from OpenCelliD need to visibly credit "OpenCelliD" and reference "OpenCelliD" with a link to https://opencellid.org/ in the following format:</p>
                <div class="license">
                    <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/">
                        <img alt="Creative Commons License" style="border-width:0" src="/images/ccbysa_4.0_80x15.png" />
                    </a>
                    <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"><a xmlns:cc="https://creativecommons.org/ns#" href="https://opencellid.org" property="cc:attributionName" rel="cc:attributionURL">OpenCelliD Project</span>
                    </a> is licensed under a
                    <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/" target='_blank'>
                        Creative Commons Attribution-ShareAlike 4.0 International License
                    </a>
                </div>
                <p>Exceptions to OpenCelliD attribution requirement can be in a written form granted by Unwired Labs (<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d0ddd4d4d7f8d7c8ddd6dbddd4d4d1dc96d7cadf">[email&#160;protected]</a>). The project contributors grant Unwired Labs the license to give such exceptions on a commercial basis.
            </div>
        </div>
    </div>
    
    <!-- Add FAQ Section -->
    <div class="container">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
            <h3 style="margin-bottom:20px; margin-top:20px;">Frequently Asked Questions</h3>
            <div class="accordion" id="downloadsAccordion">
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            What fields are included in the CSV files?
                        </button>
                    </h4>
                    <div id="collapseOne" class="collapse in" data-bs-parent="#downloadsAccordion">
                        <div class="accordion-body">
                            <p>Refer to our <a href="https://wiki.opencellid.org/wiki/Database_format" target="_blank">Database Format Documentation</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            Why do exports only include data from the last 18 months?
                        </button>
                    </h4>
                    <div id="collapseTwo" class="collapse" data-bs-parent="#downloadsAccordion">
                        <div class="accordion-body">
                            <p>We limit the data to the last 18 months for several reasons:</p>
                            <ul>
                                <li>To avoid overwhelming our servers and bandwidth limits</li>
                                <li>To keep file sizes manageable for downloads</li>
                                <li>Cell tower configurations change over time, and older data may no longer be accurate</li>
                            </ul>
                            <p>We plan to extend this limit in the future but have no timeline for this yet.</p>
                            <p>The <a href="https://wiki.opencellid.org/wiki/API#Getting_cell_position" target="_blank">OpenCelliD API</a> does not have this limitation and has access to all available data.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Why does my country stats show it has data but I don't see any files?
                        </button>
                    </h4>
                    <div id="collapseThree" class="collapse" data-bs-parent="#downloadsAccordion">
                        <div class="accordion-body">
                            <p>This is because of the 18 month limit on the data we provide. We have no recent data for this country. You can use the <a href="https://wiki.opencellid.org/wiki/API#Getting_cell_position" target="_blank">OpenCelliD API</a> to access all available data.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                            I can locate cell towers with the OpenCelliD API but not with the CSV files, why?
                        </button>
                    </h4>
                    <div id="collapseFour" class="collapse" data-bs-parent="#downloadsAccordion">
                        <div class="accordion-body">
                            <p>This is because the CSV files only contain cells observed in the last 18 months while the API responds with older data as well.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    $(document).ready(function() {
        // Initialize accordion functionality
        $('.accordion-button').click(function(e) {
            e.preventDefault();
            var $this = $(this);
            var $target = $($this.attr('data-bs-target'));

            // Toggle current panel
            $target.collapse('toggle');

            // Toggle button state
            $this.toggleClass('collapsed');

            // Update aria-expanded attribute
            var isExpanded = !$this.hasClass('collapsed');
            $this.attr('aria-expanded', isExpanded);
        });
    });
</script>
</section>


    <!-- footer-3 -->
    <footer id="contact" class="footer-3">
        <div class="container">
            <div class="row v-center">
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <a class="brand" href="#">OpenCelliD</a>
                </div>
                <div class="col-sm-5">&nbsp;</div>
                <div class="col-sm-3">
                    <h6>Maintained by <strong><a href="https://unwiredlabs.com/?ref=opencellid" target="_blank" class="white">Unwired Labs</a></strong></h6>
                    <div class="address">
                        <a target="_blank" class="white" href="https://community.opencellid.org/">Need help? Ask the community.</a><br />
                    </div>
                    <h7>© 2025 OpenCelliD, © Unwired Labs</h7>
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
    </footer>

    <!-- footer-2 -->
    <footer class="footer-2 bg-midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="additional-links">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer-12 -->
    <footer class="footer-12">
        <div class="container">
        </div>
    </footer>

</div>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VHY7WTBNSB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VHY7WTBNSB');
</script>

<script type="text/javascript" src="/js/raven-3.16.0.min.js"></script>
<script type="text/javascript">
    Raven.config('https://988c46c430fb46d4ab6fb73689804134@sentry.io/176846').install();
</script>
</body>
</html>