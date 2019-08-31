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
$sql="SELECT * FROM registrations";
$res=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_row($res)){
    echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5];

}

$sql_count="SELECT COUNT(usersID) FROM registrtions";
$sql_amt="SELECT SUM(FEE) FROM registrations";

$res_ct=mysqli_query($conn,$sql_count);
$res_sum=mysqli_query($conn,$sql_amt);



