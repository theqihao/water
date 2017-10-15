<?php

include('include.php');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';

$conn = connect();

$id_type = "email";
$user = "a323sa2312";
$passwd = "passsss";
$area = "七號";
$build = "哈哈哈哈";
$dorm = 123;
echo $id_type;
echo $user;
echo $passwd;
echo $area;
echo $build;
echo $dorm;



$sql = "insert into info values('$id_type', '$user', '$passwd', '$area', '$build', $dorm)";

// echo $sql;
$ret = query($conn, $sql);
mysqli_close($conn);

SetCookie("id",$user);
//set_user();

?>






