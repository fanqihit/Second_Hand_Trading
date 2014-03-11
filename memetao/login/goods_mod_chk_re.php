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
		$sqlstr="update goods_name set goods_name ='".$_POST['goods_name']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_type'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set goods_type ='".$_POST['goods_type']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_price'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set goods_price ='".$_POST['goods_price']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_num'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set goods_num ='".$_POST['goods_num']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_judge'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set goods_judge ='".$_POST['goods_judge']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_flag'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set goods_flag ='".$_POST['goods_flag']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['goods_des'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set goods_des ='".$_POST['goods_des']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_POST['telephone'] != '')
{
	if(isset($_COOKIE['cookie_id']))
	{
		$sqlstr="update goods set telephone ='".$_POST['telephone']."' where id = '".$need_id."'";
		$result = mysql_query($sqlstr,$link);
	}
}
if($_REQUEST["update"])
{
	if($_FILES["myfile"]["error"] == UPLOAD_ERR_OK)
	{
		if(!is_dir("../goods_picture"))
		{
			mkdir("../goods_picture");
		}
		$picture_name = $_FILES["myfile"]["name"];
		$username = $_COOKIE['cookie_id'];
		$newfilename = "../goods_picture/".$_FILES["myfile"]["name"]; 
		if($picture_name != '')
		{
		if(move_uploaded_file($_FILES["myfile"]["tmp_name"],iconv("UTF-8","gb2312",$newfilename)))
		{
			$sqlstr="update goods set goods_picture = '".$picture_name."' where user_name = '".$username."' and id = '".$need_id."'";
			$result = mysql_query($sqlstr,$link);
		}
		}
		else
		{
			echo "无法移动文件！";
		}
	}
}
my_msg("需求信息修改成功，回到会员功能专区","main.php");
mysql_free_result($result);
mysql_close($link);
?>