<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
if($_POST['user_email'] == '' or $_POST['user_name'] == '' or $_POST['user_password'] == '' or $_POST['user_repassword'] == '')
{
my_msg("输入不能为空白","regist.php");
}
if($_POST['user_password'] != $_POST['user_repassword'])
{
my_msg("密码不一致","regist.php");
}
$sqlstr="select * from regist where user_name='".$_POST['user_name']."'";
$result=mysql_query($sqlstr,$link);
$row = mysql_fetch_array($result,MYSQL_BOTH);
if(mysql_num_rows($result) == 1)
{
my_msg("用户名已存在，请重新输入","regist.php");
}
$sqlstr="insert into regist values ('".$_POST['user_email']."','".$_POST['user_name']."','".$_POST['user_password']."',1)";
$result=mysql_query($sqlstr,$link);
my_msg("添加用户成功，请以此账户/密码重新登录","../login/login.php");
mysql_free_result($result);
mysql_close($link);
?>

