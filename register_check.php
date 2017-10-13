<?php

include('include.php');

$conn = connect();

$id_type = "email";
$user = $_POST['user'];
$passwd = $_POST['passwd'];
$addr = $_POST['addr'];
$sql = "insert into info values('$id_type', '$user', '$passwd', '$addr')";
$ret = query($conn, $sql);
mysqli_close($conn);

SetCookie("id",$user);
set_user();

?>






