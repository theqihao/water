<?php
include('include.php');

$conn = connect();
$id = $_COOKIE['id'];
$cnt = $_POST['cnt'];
$paytype = $_POST['paytype'];

echo $id." ".$cnt;
if($paytype == 0){
	$sql = "insert into water values('$id',now(),'$cnt',\"alipay\",0,0)";
	$ret = query($conn, $sql);
	SetCookie("cnt", $cnt);
    echo "<script language=\"JavaScript\"> 
		self.location='alipay.php'; 
		</script> ";
}
else if($paytype == 1){
	$sql = "insert into water values('$id',now(),'$cnt',\"cash\",0,0)";
	$ret = query($conn, $sql);
	echo "<script language=\"javascript\">alert(\"等待配送\");</script>";
	echo "<script language=\"JavaScript\"> 
		self.location='user.php'; 
		</script> ";
}
?>