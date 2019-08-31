<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 08-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */

require 'connection.php';

if(isset($_REQUEST['submit'])){

    //input data here
    if($_REQUEST['radione']=="yes"){
        $amt=100;
    }
    else{
        $amt=150;
    }

    if($_REQUEST['events']==8){
        $amt+=50;
    }

    $regby="anukkrit";

    $name=sanitize($_REQUEST['nameone']);
    $regno=sanitize($_REQUEST['regone']);
    $branch=sanitize($_REQUEST['branchone']);
    $email=sanitize($_REQUEST['emailone']);
    $phone=sanitize($_REQUEST['phoneone']);
    $whatsapp=sanitize($_REQUEST['whatsappnone']);
    $ecellmem=sanitize($_REQUEST['radione']);
    $ecellid=sanitize($_REQUEST['ecellidone']);
    $event=sanitize($_REQUEST['events']);
    $paym=0;

    $sql="INSERT INTO registrations(Name,amt,regBY,payMode,phno,whatsappNo,Branch,RegNo,ecellMem,EventID,TeamID,EcellID) VALUES ({$name},{$amt},{$regby},{$paym},{$whatsapp},{$branch},{$regno},{$ecellmem},{$event},{$ecellid})";

    $res=mysqli_query($conn,$sql);

    $res=mysqli_fetch();

    if($res)
        echo "Registration Done";
    else
        echo "error";
}
?>