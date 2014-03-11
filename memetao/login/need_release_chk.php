<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
if($_POST['goods_name'] == '' or $_POST['goods_number'] == '' or $_POST['telephone'] == '' or $_POST['need_des'] == '')
{
	my_msg("不能为空白","need_release.php");
}
if(isset($_COOKIE['cookie_id']))
{
$sqlstr="insert into need values ('','".$_COOKIE['cookie_id']."','".$_POST['goods_name']."','".$_POST['goods_number']."',
		'".$_POST['telephone']."','".$_POST['need_des']."')";
}
$result = mysql_query($sqlstr,$link);
my_msg("需求信息提交成功，回到会员功能专区","main.php");
mysql_free_result($result);
mysql_close($link);
?>
