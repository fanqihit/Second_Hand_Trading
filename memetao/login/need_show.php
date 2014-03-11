<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>个人需求发布查看</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo载入中"/>
<div id="need_show">
<?php
$temp;
$temp = $_COOKIE['cookie_id'];
$sqlstr = "select * from need where user_name = '".$temp."'";
$result = mysql_query($sqlstr,$link);
$ary = array("用户名..........:","商品名..........:","需求数量..........:","联系电话..........:","需求描述..........:");
for($i = 0; $i < 5 ; $i++)
{
	echo "$ary[$i]";
}
echo "<br><br><br>";
while($row = mysql_fetch_row($result))
{
	for($i = 1 ;$i < count($row) ;$i++)
	{	
		echo "$row[$i]";
		
		if($i == 3)
		{
			echo "个";
		}
		echo ".......";
	}
	echo "<br><br>";
}
mysql_free_result($result);
mysql_close($link);
?>
</div>
</div>
</body>
</html>