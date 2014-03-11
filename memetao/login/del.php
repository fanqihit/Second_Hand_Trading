<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<title>管理员删除会员</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "del">
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
$sqlstr = "select user_name from regist where user_rank = 1";
$result = mysql_query($sqlstr,$link);
?>
<h1 align="center">选择要删除的会员</h1><p align="center">
<form name="form1" action="del_chk.php" method=post align = "center">
	<SELECT name="del_id" size="1" >
	<?php
		while($row = mysql_fetch_array($result,MYSQL_ASSOC))
		{
			echo "<OPTION>".$row["user_name"];
		}
	?>
	</SELECT>
<input type="submit" name="提交"></input><input type="reset" name="重置"></input>
</form>
<h3 align="center"><a href="adm.php">回到主菜单</a></h3>
<h3 align="center"><a href="login.php">重新登录</a></h3>
</div>
</div>
</body>
</html>
