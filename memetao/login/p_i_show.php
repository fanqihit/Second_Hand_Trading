<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<?php
$temp;
$temp = $_COOKIE['cookie_id'];
$sqlstr = "select * from personal_information where user_name = '".$temp."'";
$result = mysql_query($sqlstr,$link);
while($row = mysql_fetch_row($result))
{
echo "<tr>\n";
for($i = 1 ;$i < count($row) ;$i++)
	{
		echo "$row[$i]";
		echo "<br>";
	}
}
mysql_free_result($result);
mysql_close($link);
?>