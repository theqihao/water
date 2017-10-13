<?php

include('include.php');

$conn = connect();
$id = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "select pass from info where id='$id'";
$ret = query($conn, $sql);

$row = mysqli_fetch_array($ret);
$db_pass = $row['pass'];
$db_pass = md5($db_pass); 

if ($pass == $db_pass) {
    set_user();
} else {
    _user_error();
}

mysqli_close($conn);

?>
