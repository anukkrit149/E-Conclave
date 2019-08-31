<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 09-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */

$server="localhost:3306";
$conn= new mysqli($server,"root","1234","acc");
if($conn->connect_error)
{  die("Connection-failed:".$conn->connect_error);
    echo "Connection problem";
}

function sanitize($input) {
//    if (is_array($input)) {
//        foreach($input as $var=>$val) {
//            $output[$var] = sanitize($val);
//        }
//    }
//    else {
//        if (get_magic_quotes_gpc()) {
//            $input = stripslashes($input);
//        }
//        $input  = cleanInput($input);
        $output = mysqli_real_escape_string($conn,$input);
//    }
    return $output;
}
