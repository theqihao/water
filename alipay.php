<?php

$cnt = $_COOKIE['cnt']*9;
echo"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'><head>
<title>喻家山订水系统</title> 
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<script type='text/javascript' src='js/jquery-1.9.0.min.js'></script>
<script type='text/javascript' src='js/login.js'></script>
<link href='css/login2.css' rel='stylesheet' type='text/css' />
</head>
<body>
<h1>瑜伽山泉登录系统<sup>V2017</sup></h1>

<div class='login' style='margin-top:50px;'>";

echo"
<div class='login_form'>
			<div class='uinArea' id='uinArea' style='align:center;font-size:25px;' >
                <label class='input-tips' for='u' style='align:center;margin-left:30%;'>应付：{$cnt} 元</label>
			</div>
</div>
<img src='./images/alipay.jpg' name='Insert_logo' width='100%' height='450' id='Insert_logo' style='background-color: #C6D580; display:block; center no-repeat;' />
";

echo "				
				</div>
			</div>
        </div>   
	</div>
";
    
	
	
echo"   
</div>
<div class='jianyi'>*推荐使用ie8或以上版本ie浏览器或Chrome内核浏览器访问本站</div>
</body></html>
";
?>