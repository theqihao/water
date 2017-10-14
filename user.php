<?php
include('include.php');

$conn = connect();
$id = $_COOKIE['id'];
$sql = "select addr from info where id = '$id'";
$ret = query($conn, $sql);
$row = mysqli_fetch_array($ret);
$addr = $row['addr'];

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

<div class='header'>
        <div class='switch' id='switch'><a class='switch_btn_focus' id='switch_qlogin' href='javascript:void(0);' tabindex='7'>快速订水</a>
			<a class='switch_btn' id='switch_login' href='javascript:void(0);' tabindex='8'>地址修改</a>
			<div class='switch_bottom' id='switch_bottom' style='position: absolute; width: 64px; left: 0px;'></div>
        </div>
    </div> 
	
<div class='web_qr_login' id='web_qr_login' style='display: block; height: 235px;'>    

            <!--快速订水-->
            <div class='web_login' id='web_login'>
               
               
               <div class='login-box'>
    
            
			<div class='login_form'>
				<form action='order.php' name='orderform' accept-charset='utf-8' id='order_form' class='loginForm' method='post'><input type='hidden' name='did' value='0'/>
               <input type='hidden' name='to' value='log'/>
                <div class='uinArea' id='uinArea'>
                <label class='input-tips' for='u'>桶数：</label>
                <div class='inputOuter' id='uArea'>
                    <input type='number' id='cnt' name='cnt' class='inputstyle' required='required' min='1' max='10'/>
                </div>
                </div>
				
                <div class='pwdArea' id='pwdArea'>
               <label class='input-tips' for='p'>支付：</label> 
               <div class='inputOuter' id='pArea'>
                    <input type='radio' name='paytype' value='0' style='margin-top:6%;'>支付宝
					<input type='radio' name='paytype' value='1' checked>现金
                </div>
                </div>
               
                <div style='padding-left:50px;margin-top:20px;'><input type='submit' value='下 单' style='width:150px;' class='button_blue'/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--快速订水end-->
  </div>
";

echo"
	<!--修改地址-->
	<div class='qlogin' id='qlogin' style='display: none; height: 170px;'>
	<div class='web_login' id='web_login' >
	<div class='login-box'>
    <div class='web_login'>
        <div class='login_form'>
				<form action='saveaddr.php' name='addrform' accept-charset='utf-8' id='addr_form' class='loginForm' method='post'><input type='hidden' name='did' value='0'/>
               <input type='hidden' name='to' value='log'/>
                <div class='uinArea' id='uinArea'>
                <label class='input-tips' for='u'>地址：</label>
                <div class='inputOuter' id='uArea' style='margin-bottom:5%;'>             
                    <input type='text' id='addr' name='addr' class='inputstyle' value=\"$addr\" required='required'/>
                </div>
                </div>
				
               
                <div style='padding-left:50px;margin-top:20px;'><input type='submit' value='保存地址' style='width:150px;' class='button_blue'/></div>
              </form>
        </div>
	</div>  
    </div>       
    </div>
    </div>
    <!--修改地址end-->
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
