<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
if($_POST['name'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set name ='".$_POST['name']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['student_num'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set student_num ='".$_POST['student_num']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['age'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set age ='".$_POST['age']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['telephone'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set telephone ='".$_POST['telephone']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['email'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set email ='".$_POST['email']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['college'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set college ='".$_POST['college']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['apartment'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set apartment ='".$_POST['apartment']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['room'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update personal_information set room ='".$_POST['room']."' where user_name = '".$_COOKIE['cookie_id']."'";
		$result = mysql_query($sqlstr,$link);
	}
}
my_msg("个人信息修改成功，回到账户管理中心","account_manage.php");
mysql_free_result($result);
mysql_close($link);
?>