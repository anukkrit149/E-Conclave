<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 09-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */

require 'connection.php';

if(isset($_REQUEST['create_team'])) {

    $userID = sanitize($_REQUEST['userID']);
    $name=sanitize($_REQUEST['name']);
    $sql_insert = "INSERT INTO team(LeaderName,Leader) VALUES ({$name},{$userID})";
    $res = mysqli_query($conn,$sql_insert);
    $res=$res->fetch_assoc();
    $sql_view="SELECT teamID FROM registrations WHERE leader={$userID}";
    $res_team=mysqli_query($conn,$sql_view);
    $res_team=$res_team->fetch_field();
    $sql_update="UPDATE registrations SET TeamID={$res_team}";
    $res_update=mysqli_query($conn,$sql_update);
    $res_update=$res_update->fetch_assoc();
    if ($res_update)
        echo "Team created successfully.Team ID-{$res_team}";
    else
        echo "error";
}
elseif (isset($_REQUEST['enter_team_id'])){

    $userID=$_REQUEST['userID'];
    $teamID=$_REQUEST['teamID'];
    $sql_up_mem="UPDATE Team SET members=members + 1 WHERE teamID={$teamID}";
    $res=mysqli_query($conn,$sql_up_mem);
    $res=$res->fetch_assoc();
    $sql_reg="UPDATE registrations SET TeamID={$teamID} WHERE personID={$userID}";

    if ($res)
        echo "done";

}

?>

<!--<html>-->
<!--<head></head>-->
<!--<body>-->
<!---->
<!--<form id="form">-->
<!--    <input type="text" class="name">-->
<!--    <input type="number"class="phnumber" maxlength="10" minlength="10">-->
<!--    <input type="checkbox" class="meow">-->
<!--</form>-->
<!---->
<!---->
<!--</body>-->
<!---->
<!---->
<!--<script>-->
<!---->
<!---->
<!--    $(document).on('click','#submit',function(e) {-->
<!--        var data = $("#form").serialize();-->
<!--        $.ajax({-->
<!--            data: data,-->
<!--            type: "post",-->
<!--            url: "team.php",-->
<!--            success: function(data){-->
<!--                alert("Data Save: " + data);-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!---->
<!--</html>-->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        E-Conclave 4.0 Registeration Portal
    </title>




    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/blk-design-system.mine209.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
</head>

<body class="register-page">
<!-- Extra details for Live View on GitHub Pages -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                <span>E-Conclave 4.0 •</span> Registeration Portal
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a>
                            E-Conclave Registeration Portal
                        </a>
                    </div>
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
    <div class="page-header">
        <div class="page-header-image"></div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 offset-lg-0 offset-md-3">
                        <div id="square7" class="square square-7"></div>
                        <div id="square8" class="square square-8"></div>
                        <div class="card card-register">
                            <div class="card-header">
                                <img class="card-img" src="assets/img/square1.png" alt="Card image">
                                <h4 class="card-title">register</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" method="post" action="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-badge"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Event ID">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-book-bookmark

"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Team ID">
                                    </div>




                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info btn-round btn-lg">Create</button>
                                <button type="submit" class="btn btn-info btn-round btn-lg">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register-bg"></div>
                <div id="square1" class="square square-1"></div>
                <div id="square2" class="square square-2"></div>
                <div id="square3" class="square square-3"></div>
                <div id="square4" class="square square-4"></div>
                <div id="square5" class="square square-5"></div>
                <div id="square6" class="square square-6"></div>
            </div>
        </div>
    </div>

</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Plugin r the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/blk-design-system.mine209.js?v=1.0.0" type="text/javascript"></script>
<script src="assets/js/plugins/jquery.sharrre.min.js" type="text/javascript"></script>
<!-- Sharrre libray -->
<script src="assets/demo/jquery.sharrre.js"></script>

</body>


</html>