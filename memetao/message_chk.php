<?php
include_once("public/sql_connect.php");
include_once("public/my_msg.php");
?>
<?php
if($_POST['user_message'] == '')
{
my_msg("输入不能为空","message.php");
}
if($_POST['user_message'] != '')
$sqlstr="insert into message values ('','".$_POST['user_message']."')";
$result=mysql_query($sqlstr,$link);
my_msg("用户留言成功，返回首页","index.php");
mysql_free_result($result);
mysql_close($link);
?>
