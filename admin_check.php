<?php

include('include.php');

// echo md5($_POST['password']);
if (($_POST['adminname'] == 'qihao') && (md5($_POST['password']) == 'cfcd208495d565ef66e7dff9f98764da')) {
    echo "<meta http-equiv=\"refresh\" content=\"1;url=http://119.29.249.11/admin.php\">";
    //$url = "http://119.29.249.11/admin.php";
    //echo "<script type='text/javascript'> location.href=$url; </script>";
    //include "admin.php";
    //exit();
} else {
    admin_error();
}

?>
