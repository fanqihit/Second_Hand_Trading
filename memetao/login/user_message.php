<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<title>查询用户留言</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "adm_message">
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
$sqlstr = "select user_message from message" ;
$result = mysql_query($sqlstr,$link);
?>
<h1 align="center">用户留言如下:</h1>
<p align="center">
<?php
$count = 1;
while($row = mysql_fetch_array($result))
		{
			echo "留言"."$count".":"."$row[0]\n";
			echo "<br>";
			$count++;
		}	
?>	
</p>	
<h3 align="center"><a href="adm.php">回到主菜单</a></h3>
<h3 align="center"><a href="login.php">重新登录</a></h3>
</div>
</div>
</body>
</html>
