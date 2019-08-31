<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 16-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */
$ques=array();
$handle = fopen("olca.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if ($line[0]=='#')
            array_push($ques,explode("#",$line));
    }

    fclose($handle);
} else {
    // error opening the file.
}
echo json_encode($ques,JSON_FORCE_OBJECT);
//print_r($ques);

//foreach ($val)