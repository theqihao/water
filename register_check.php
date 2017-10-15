<?php

include('include.php');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';

$conn = connect();

$id_type = "email";
$user = $_POST['user'];
$passwd = $_POST['passwd'];
$area = $_POST['area'];
$build = $_POST['build'];
$dorm = $_POST['dorm'];

// echo $id_type;
// echo $user;
// echo $passwd;
// echo $area;
// echo $build;
// echo $dorm;

$sql = "insert into info values('$id_type', '$user', '$passwd', '$area', '$build', '$dorm')";
$ret = query($conn, $sql);
mysqli_close($conn);

//echo "sucess";
SetCookie("id",$user);
set_user();

?>






