<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
if($_POST['mod_id'] == '')
{
	my_msg("不能为空白","mod_password.php");
}
if($_POST['user_password'] != $_POST['user_repassword'])
{
	my_msg("密码不一致，请重新输入","mod_password.php");
}
$temp;
$temp = $_POST["mod_id"];
$sqlstr = "update regist set user_password = '".$_POST['user_password']."' where user_name = '".$temp."'";
$result = mysql_query($sqlstr,$link);
my_msg("更改密码成功，回到主菜单","adm.php");
mysql_free_result($result);
mysql_close($link);
?>