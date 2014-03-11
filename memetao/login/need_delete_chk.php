<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
$need_id = $_GET['id'];
$sqlstr="delete from need where id = '".$need_id."'";
$result = mysql_query($sqlstr,$link);
my_msg("需求信息删除成功，回到会员功能专区","main.php");
mysql_free_result($result);
mysql_close($link);
?>