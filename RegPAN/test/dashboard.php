<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 12-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */

session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
       E-conclave|Registrations
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page">
<!-- Navbar -->
<!--<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">-->
<!--    <div class="container">-->
<!--        <div class="navbar-translate">-->
<!--            <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">-->
<!--                <span>BLK•</span> Design System-->
<!--            </a>-->
<!--            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-bar bar1"></span>-->
<!--                <span class="navbar-toggler-bar bar2"></span>-->
<!--                <span class="navbar-toggler-bar bar3"></span>-->
<!--            </button>-->
<!--        </div>-->
<!--        <div class="collapse navbar-collapse justify-content-end" id="navigation">-->
<!--            <div class="navbar-collapse-header">-->
<!--                <div class="row">-->
<!--                    <div class="col-6 collapse-brand">-->
<!--                        <a>-->
<!--                            BLK•-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="col-6 collapse-close text-right">-->
<!--                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                            <i class="tim-icons icon-simple-remove"></i>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item p-0">-->
<!--                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">-->
<!--                        <i class="fab fa-twitter"></i>-->
<!--                        <p class="d-lg-none d-xl-none">Twitter</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item p-0">-->
<!--                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">-->
<!--                        <i class="fab fa-facebook-square"></i>-->
<!--                        <p class="d-lg-none d-xl-none">Facebook</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item p-0">-->
<!--                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">-->
<!--                        <i class="fab fa-instagram"></i>-->
<!--                        <p class="d-lg-none d-xl-none">Instagram</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="dropdown nav-item">-->
<!--                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">-->
<!--                        <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-with-icons">-->
<!--                        <a href="https://demos.creative-tim.com/blk-design-system/docs/1.0/getting-started/overview.html" class="dropdown-item">-->
<!--                            <i class="tim-icons icon-paper"></i> Documentation-->
<!--                        </a>-->
<!--                        <a href="examples/register-page.html" class="dropdown-item">-->
<!--                            <i class="tim-icons icon-bullet-list-67"></i>Register Page-->
<!--                        </a>-->
<!--                        <a href="examples/landing-page.html" class="dropdown-item">-->
<!--                            <i class="tim-icons icon-image-02"></i>Landing Page-->
<!--                        </a>-->
<!--                        <a href="examples/profile-page.html" class="dropdown-item">-->
<!--                            <i class="tim-icons icon-single-02"></i>Profile Page-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()">-->
<!--                        <i class="tim-icons icon-cloud-download-93"></i> Download-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<!-- End Navbar -->
<div class="wrapper">
    <div class="page-header header-filter">
        <div class="squares square1"></div>
        <div class="squares square2"></div>
        <div class="squares square3"></div>
        <div class="squares square4"></div>
        <div class="squares square5"></div>
        <div class="squares square6"></div>
        <div class="squares square7"></div>
        <div class="container">
            <div class="content-center brand">
                <h1 class="h1-seo">Welcome to Ecell Registrations</h1>
                <h3>OC Registrations Portal</h3>
                <div id="navigation">
                    <h3 class="mb-5">Select One </h3>
                    <ul class="nav nav-pills nav-pills-primary nav-pills-icons" style="align-content: center;">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="register.php">
                                <i class="tim-icons icon-atom"></i>Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="payment.php">
                                <i class="tim-icons icon-chat-33"></i>Finance
                            </a>
                        </li>
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" data-toggle="tab" href="#link9">-->
<!--                                <i class="tim-icons icon-settings-gear-63"></i> Settings-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                </div>
            </div>

        </div>
    </div>

<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="./assets/js/plugins/chartjs.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/moment.min.js"></script>
<script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/demo/demo.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        blackKit.initDatePicker();
        blackKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
</body>

</html>
