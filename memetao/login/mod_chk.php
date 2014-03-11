<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
if($_POST['user_password'] == '' or $_POST['user_repassword'] == '')
{
	my_msg("输入不能空白","mod.php");
}
if($_POST['user_password'] != $_POST['user_repassword'])
{
	my_msg("密码不一致，请重新输入","mod.php");
}
if(isset($_COOKIE['cookie_id']))
{
$sqlstr="update regist set user_password = '".$_POST['user_password']."' where user_name = '".$_COOKIE['cookie_id']."'";
}
else
{
	my_msg("登录异常，无法获得用户名，请重新登录","login.php");
}
$result = mysql_query($sqlstr,$link);
my_msg("更改密码成功，回到主菜单","main.php");
mysql_free_result($result);
mysql_close($link);
?>