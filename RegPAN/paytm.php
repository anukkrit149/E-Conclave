<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 11-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */

if(isset($_POST['code'])){
    $user_id=$_POST['code'];
    $query="SELECT * FROM registrations WHERE personID='$user_id'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
        echo json_encode(mysqli_fetch_row($result));
    else
        echo "failed";
    exit;
}
///////////////////////////////
 if (isset($_POST['paid'])){
    $UserId=$_POST['userID'];
    $amtdue=$_POST['amtDue'];
    $pay=$_POST['pay'];
    $query="UPDATE registrations SET payMode={$pay} WHERE personId={$user_id}";


 }
?>

<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Paytm Verification | E-Conaclave 4.0 Registeration | E-CEll MUJ</title>

    <!-- Required - Icon Font -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />

    <!-- Required - Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Required - Custom Select -->
    <link rel="stylesheet" href="css/selectric.css" />

    <!-- Required - Form Style -->
    <link rel="stylesheet" href="css/flat-form.css" />

    <!-- NOT required - Page Style -->
    <link rel="stylesheet" href="css/page-style.css" />
</head>

<body>
<div class="container">
    <header class="header">
        <h1>E-Conclave 4.0 <span> Registerations</span></h1>
    </header>

    <section class="content">
        <div class="row">
            <nav class="col-md-4 col-lg-3 sidebar">
                <ul class="navigation">
                    <li><a href="intern.html">Intern</a></li>
                    <li><a href="offline%20full%20acess.html">All Access</a></li>
                    <li ><a href="1%20event.html">Single Event</a></li>
                    <li class="active"><a href="paytm.html">Paytm Verification</a></li>
                    <li><a href="cash.html">Cash/Online Verification</a></li>
                    <li><a href="newpar.html">Add Participant</a><li>
                    <li><a href="view.html">View Details</a></li>
                </ul>
            </nav>

            <article class="col-md-8 col-lg-9">
                <h2>Paytm Verification</h2>


                <div class="form-row form-group">
                    <div class="col-md-5 col-lg-3">
                        <label for="verification code" class="control-label">Unique Verification Code<span class="required-field">*</span></label>
                    </div>

                    <div class="col-md-7 col-lg-6">
                        <input type="verification code" class="form-control" id="verification code" required />
                    </div>
                </div>

                <!-- Purple -->
                <button type="button" class="btn mb-1 btn-info" name="code"><big>VERIFY</big></button>

                <hr>
                <fieldset>
                    <legend>Participant Details</legend>

                    <form method="post">



                        <!-- Nmae input with required star -->
                        <div class="form-row form-group">
                            <div class="col-md-5 col-lg-3">
                                <label for="name" class="control-label">Name  <span class="required-field">*</span></label>
                            </div>

                            <div class="col-md-7 col-lg-6">
                                <input type="text" class="form-control" id="name" required />

                            </div>
                        </div>

                        <!-- registeration number input with required star -->
                        <div class="form-row form-group">
                            <div class="col-md-5 col-lg-3">
                                <label for="registeration number" class="control-label">Registeration Number <span class="required-field">*</span></label>
                            </div>

                            <div class="col-md-7 col-lg-6">
                                <input type="text" class="form-control" id="regNo" required />
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-md-5 col-lg-3">
                                <label for="amountdue" class="control-label">Amount Due<span class="required-field">*</span></label>
                            </div>

                            <div class="col-md-7 col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="amtdue" name="amountdue" />
                                </div>
                            </div>
                        </div>

                        <!--paytm transaction id-->
                        <div class="form-row form-group">
                            <div class="col-md-5 col-lg-3">
                                <label for="paytm idr" class="control-label">Paytm Transacttion Id<span class="required-field">*</span></label>
                            </div>
                            <div class="col-md-7 col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="paytm" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Purple -->
                        <button type="button" class="btn mb-1 btn-info" name="paid">PAID</button>
                        <!-- Purple -->
                        <button type="button" class="btn mb-1 btn-info">RESET</button>

                    </form>
                </fieldset>


                <!-- Required - jQuery -->
                <script src="js/jquery-3.3.1.min.js"></script>

                <!-- Required - Popper for Bootstrap -->
                <script src="js/popper.min.js"></script>

                <!-- Required - Bootstrap JS -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Required - Custom Select -->
                <script src="js/jquery.selectric.min.js"></script>

                <!-- Required - Form JS -->
                <script src="js/flat-form.js"></script>
</body>


<script>

    var data = <?php echo json_encode($rows); ?>
    $("#name").val(data.name);
    $("#regNo").val(data[]);
    $("#amtdue").val(data);
    $("#paytm").val(data);

    $(document).on('click','#',function(e) {
        var code_value=$('#verificationcode').val();
        $.ajax({
            data: {code: code_value},
            type: "post",
            url: "paytm.php",
            success: function(data){
                $('#').val();
            }
        });
    });
</script>
</html>
