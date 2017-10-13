<?php

include('include.php');

// echo md5($_POST['password']);
if (($_POST['adminname'] == 'qihao') && (md5($_POST['password']) == 'cfcd208495d565ef66e7dff9f98764da')) {
    set_admin();
} else {
    admin_error();
}

?>
