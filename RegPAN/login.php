<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 12-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */

require '';
if (isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $pass=md5($_REQUEST['password']);


    $sql="SELECT * FROM ocReg WHERE name={$name}";

    $res=mysqli_query($conn,$sql);
    $data=mysqli_fetch_row($res);


    if ($data['pass']==$pass){
        $_SESSION['LoggedIn']=0;
        $_SESSION['userID']=$data['userID'];
        header('Location:dashboard.php');
    }

    else
        header('Location:SignIn.php?msg=3');
}

if (isset($_REQUEST['msg']))
{
    if (msg==1)
        echo "<div>Email or Password Invalid</div>";
    elseif (msg==2)
        echo "<div>Logged Out Successfully</div>";
    elseif (msg==3)
        echo "<div>Invalid credentials</div>";
//    else
//        echo "<div>Unknown Error </div>";

}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>E-conclave|Registrations</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="page">
  <div class="container">
    <div class="left">
      <div class="login">OC Login</div>
      <div class="eula">Para </div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <form method="post">
          <label >OC ID</label>
          <input type="text" name="ocID" id="ocID">
          <label for="password">Password</label>
          <input type="password" name="pass" id="password">
          <input type="submit" name="submit" id="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
