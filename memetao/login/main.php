<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<title>会员主功能表</title>
</head>
<body>
<?php
if(isset($_COOKIE['cookie_chk']))
{
	if($_COOKIE['cookie_chk'] != "logined")
	{
	my_msg("登录失败，请重新登录","login.php");
	}
}
else
{
	my_msg("登录失败，请重新登录","login.php");
}
?>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id="main">
<h1 align="center">欢迎 <?php echo $_COOKIE['cookie_id']; ?> 进入会员专区<br>
</p>会员主功能表</h1></p></p>
<h3 align="center"><a href="account_manage.php">账户管理</a></h3>
<h3 align="center"><a href="mod.php">更改密码</a></h3>
<h3 align="center"><a href="need_release.php">需求发布</a></h3>
<h3 align="center"><a href="need_mod.php">需求更改</a></h3>
<h3 align="center"><a href="need_delete.php">需求删除</a></h3>
<h3 align="center"><a href="goods_release.php">物品发布</a></h3>
<h3 align="center"><a href="goods_mod.php">物品更改</a></h3>
<h3 align="center"><a href="goods_delete.php">物品删除</a></h3>
<h3 align="center"><a href="login.php">重新登录</a></h3>
</div>
</div>
</body>
</html>
