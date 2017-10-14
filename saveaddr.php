<?php
include('include.php');
echo $id;
$conn = connect();
$id = $_COOKIE['id'];
$addr = $_POST['addr'];

$sql = "update info set addr = '$addr' where id='$id'";
$ret = query($conn, $sql);

echo "<script language=\"javascript\">alert(\"地址保存成功\");</script>";
echo "<script language=\"JavaScript\"> 
	self.location='user.php'; 
	</script> ";
?>