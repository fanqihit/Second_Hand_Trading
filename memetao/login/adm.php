<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<title>管理员主功能表</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "adm">
<?php
if(isset($_COOKIE['cookie_chk']))
{
	if($_COOKIE['cookie_chk'] != "adm_logined")
	{
	my_msg("登录失败，请重新登录","login.php");
	}
}
else
{
	my_msg("登录失败，请重新登录","login.php");
}
?>
<h1 align="center">欢迎 <?php echo $_COOKIE['cookie_id']; ?> 进入管理员专区<br>
</p>管理员主功能表</h1></p></p>
<h3 align="center"><a href="del.php">删除会员</a></h3>
<h3 align="center"><a href="mod_password.php">更改会员密码</a></h3>
<h3 align="center"><a href="user_message.php">查询用户留言</a></h3>
<h3 align="center"><a href="login.php">重新登录</a></h3>
</div>
</div>
</body>
</html>
