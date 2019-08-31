<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 11-01-2019
 * Summary-
 * API Used-
 * Limitations-
 */
session_start();
if(isset($_POST['buynow'])){
    $item=$_POST['item'];
    setcookie('item',$item,time()+(86400));
    /**
     * item in cart is valid for one day
     * Check for user is logged in or not
     * if logged in value = true
     * if not value = false
     */

    if (!$_SESSION['loggedIn']){
        $guestID=$_COOKIE['guest'];
        $sql="SELECT * FROM cookie_table_name WHERE id='".$guestID."'";
        $result=mysqli_query($conn,$sql);
        $row=$result->fetch_row();
        $_SESSION['guest_data']=$row;
        header('Location: register.php?msg=3');
    }elseif ($_SESSION['loggedIn']){
        if (!$_SESSION['guest_data']==null){
            $guestID=$_SESSION['guest_data']['id'];
            $sql_check="SELECT * FROM cookie_table_name WHERE id='".$guestID."'";
            $check=mysqli_query($conn,$sql_check);
            if ($check){
                $sql_del="DELETE FROM cookie_table_name WHERE id='".$guestID."'";
                $res_del=mysqli_query($conn,$sql_del);
                if ($res_del)
                    echo "Deleted successfully ";
                else
                    echo "Problem";
            }


        }


    }

}