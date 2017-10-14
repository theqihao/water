<?php
include('include.php');
$id=isset($_GET["id"]) ? ($_GET["id"]) : '';
$time=isset($_GET["time"]) ? ($_GET["time"]) : '';

echo $id." ".$time;
$conn = connect();
$sql = "update water set confirm = 1 where id = '$id' and _time = '$time'";
$ret = query($conn, $sql);

echo "<script language=\"javascript\">alert(\"订单完成\");</script>";
echo "<script language=\"JavaScript\"> 
		self.location='admin.php'; 
		</script> ";
?>