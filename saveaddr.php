<?php
include('include.php');

$conn = connect();
$id = $_COOKIE['id'];
$build = $_POST['build'];
$area = $_POST['area'];
$dorm = $_POST['dorm'];
echo $id." ".$area." ".$build." ".$dorm;

$sql = "update info set build = '$build', area = '$area', dorm = '$dorm' where id='$id'";
$ret = query($conn, $sql);

echo '<script language=\'javascript\'>alert(\'地址保存成功\');</script>';
echo "<script language=\"JavaScript\"> 
	self.location=\"user.php\"; 
	</script> ";
?>