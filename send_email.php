<?php  

require_once('class.phpmailer.php');   //引入必须文件class.phpmailer.php
$mail = new PHPMailer();    //new一个PHPMailer对象，以便操作
$mail->isSMTP();    //设置SMTP发送
$mail->CharSet='UTF-8';     //设置字符集
$mail->Host="smtp.163.com";    //这是服务器邮箱，即上面1中所提到的邮箱地址
$mail->SMTPAuth = true;      //设置验证邮箱
$mail->Username = "theqihao@163.com";     //这是你自己的1中所登陆的163邮箱地址
$mail->Password = "qihao001";    //这是你的163邮箱的密码
$mail->From = "theqihao@163.com";      //这是你自己的1中所登陆的163邮箱地址
$mail->FromName = "瑜伽山泉";     //这是发送时你的名字，可随意修改
$mail->AddAddress("2390631000@qq.com", "成员");       //这是你要发给谁，那个人的邮箱地址和他的名字
$mail->Subject = "瑜伽山泉";        //这是发送的邮件的主题
$mail->Body = "hahahahhahahh";       //这是发送的邮件的内容

if(!$mail->Send()) {
    die("发送失败！");
} else {
    echo "发送成功！";
} 

?>