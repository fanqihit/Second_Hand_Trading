<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
if($_POST['del_id'] == '')
{
	my_msg("不能为空白","del.php");
}
$temp;
$temp = $_POST["del_id"];
$sqlstr = "delete from regist where user_name = '".$temp."'";
$result = mysql_query($sqlstr,$link);
my_msg("删除用户成功，回到主菜单","adm.php");
mysql_free_result($result);
mysql_close($link);
?>