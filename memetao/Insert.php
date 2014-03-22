<?php
$link = mysql_connect("localhost","root","") or die("could not connect: " . mysql_error());
mysql_select_db("memetao") or die("could not select database");
mysql_query('SET NAMES utf8');
if($_POST['user_password'] != $_POST['user_repassword'])
 echo " ss" ;
$sqlstr="insert into regist values ('".$_POST['user_email']."','".$_POST['user_name']."','".$_POST['user_password']."')";
if(mysql_query($sqlstr,$link))
	{
	echo "注册成功" ;
	}
else
	{
	echo "注册失败";
	}
mysql_close($link);	
?>
