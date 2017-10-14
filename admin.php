<?php
echo "
<!doctype html>
<html lang='zh'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> 
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>管理员登录</title>
<link rel='stylesheet' type='text/css' href='css/styles.css'>
<link rel='stylesheet' type='text/css' media='screen' href='css/css-table.css' />
<script type='text/javascript' src='js/jquery-1.2.6.min.js'></script>
<script type='text/javascript' src='js/style-table.js'></script>
<script>
function showHint(str)
{
    if (str.length==0)
    { 
        document.getElementById('txtHint').innerHTML='';
        return;
    }
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {    
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById('txtHint').innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open('GET','showhint.php?id='+str,true);
    xmlhttp.send();
}
</script>

</head>
<body>

	<div class='wrapper' style='height:100%;top:200px;overflow-y:auto;'>
		<div class='container'>
			<h1>Welcome</h1><br>
				<form> 
				<span style='font-size:20px;'>请输入用户ID:</span><input type='text' style='margin-top:5%;' onkeyup='showHint(this.value)' onBlur='showHint('')' >
				</form>
				<p><div id='txtHint' style='margin-top:5%;front-color:#000000;'></div></p>
				<p>提示：输入 * 查询所有未完成订单，输入 # 查询所有订单</p>
		</div>
		
		<ul class='bg-bubbles'>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
";


	
echo"


<script src='js/jquery-2.1.1.min.js' type='text/javascript'></script>
<script>
$('#login-button').click(function (event) {
	event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
});
</script>


<div style='text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#000000'>
<h1>瑜伽山泉订水管理系统</h1>
</div>

</body>
</html>



";
?>
