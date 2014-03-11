<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
$need_id = $_COOKIE['need_id'];
if($_POST['goods_name'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update need set goods_name ='".$_POST['goods_name']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_number'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update need set goods_number ='".$_POST['goods_number']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['telephone'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update need set telephone ='".$_POST['telephone']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['need_des'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update need set need_des ='".$_POST['need_des']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
my_msg("需求信息修改成功，回到会员功能专区","main.php");
mysql_free_result($result);
mysql_close($link);
?>