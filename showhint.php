<?php
include('include.php');
$id=isset($_GET["id"]) ? ($_GET["id"]) : '';


echo"
	<table id='travel' style='color:#000000;weight:100%;'summary='Travel times to work by main mode (Autumn 2006) - Source: London Travel Report 2007 http://www.tfl.gov.uk/assets/downloads/corporate/London-Travel-Report-2007-final.pdf'>

    
    <thead>    
    	<tr>
            <th scope='col' >用户ID</th>
            <th scope='col' >下单时间</th>
			<th scope='col' >订购数目</th>
			<th scope='col' >支付方式</th>
			<th scope='col' >订单操作</th>
        </tr>       
    </thead>
";


if (!empty($id)&& $id!='*'&&$id!='#')
{
	$conn = connect();
	$sql = "select * from water where id like '%{$id}%' and confirm = 0 order by _time asc";
	$ret = query($conn, $sql);
	if ($ret->num_rows <= 0) {
		echo"
			<tr><td scope='col' colspan='5' style=\"text-align:center;\">无订单</td></tr>
		";
	}
	else{
		while($row = mysqli_fetch_array($ret)){
			$time = $row['_time'];
			$num = $row['num'];
			$paytype = $row['pay_type'];

			echo"
				<tbody>
				<tr>
					<th scope='row'>{$row['id']}</th>
					<td>{$time}</td>
					<td>{$num}</td>
					<td>{$paytype}</td>
					<td><form method=\"post\" action=\"./finish.php?id={$row['id']}&time={$time}\" ><input type='submit' name='submit' value='确认送达' style='color:#000000;background-color:#00ff99;'></form></td>
				</tr>
			";
		}
	}
	echo"</tbody></table>";
}

else if($id=='*'){

	$conn = connect();
	$sql = "select * from water where confirm = 0 order by _time asc";
	$ret = query($conn, $sql);
	if ($ret->num_rows <= 0) {
		echo"
			<tr><td scope='col' colspan='5' style=\"text-align:center;\">无订单</td></tr>
		";
	}
	else{
		while($row = mysqli_fetch_array($ret)){
			$id = $row['id'];
			$time = $row['_time'];
			$num = $row['num'];
			$paytype = $row['pay_type'];

			echo"
				<tbody>
				<tr>
					<th scope='row'>{$id}</th>
					<td>{$time}</td>
					<td>{$num}</td>
					<td>{$paytype}</td>
					<td><form method=\"post\" action=\"./finish.php?id={$row['id']}&time={$time}\" ><input type='submit' name='submit' value='确认送达' style='color:#000000;background-color:#00ff99;'></form></td>
				</tr>
			";
		}
	}
	echo"</tbody></table>";
}
else{
	$conn = connect();
	$sql = "select * from water order by _time asc";
	$ret = query($conn, $sql);
	if ($ret->num_rows <= 0) {
		echo"
			<tr><td scope='col' colspan='5' style=\"text-align:center;\">无订单</td></tr>
		";
	}
	else{
		while($row = mysqli_fetch_array($ret)){
			$id = $row['id'];
			$time = $row['_time'];
			$num = $row['num'];
			$paytype = $row['pay_type'];
			$butval='';
			$able='';
			$butcolor='';
			if($row['confirm']==1){
				$butval="订单已完成";
				$able="disabled";
				$butcolor="#f0f0f0";
			}
			else if($row['confirm']==0){
				$butval="确认送达";
				$butcolor="#00ff99";
			}
			echo"
				<tbody>
				<tr>
					<th scope='row'>{$id}</th>
					<td>{$time}</td>
					<td>{$num}</td>
					<td>{$paytype}</td>
		<td><form method=\"post\" action=\"./finish.php?id={$row['id']}&time={$time}\" ><input type='submit' name='submit' value='$butval' style='color:#000000;background-color:{$butcolor};' $able></form></td>
				</tr>
			";
		}
	}
	echo"</tbody></table>";
}
?>