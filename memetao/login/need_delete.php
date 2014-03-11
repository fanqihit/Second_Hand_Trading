<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>个人需求信息删除</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "need_delete">
<h1>选择要删除的需求</h1>
<?php
	$sqlstr = "select * from need where user_name='".$_COOKIE['cookie_id']."'";
	$result = mysql_query($sqlstr,$link);
	while($row = mysql_fetch_array($result))
	{
			
			echo "<a href='need_delete_chk.php?id=".$row['id']."'>";
			echo "$row[1]\n";
			echo "$row[2]\n";
			echo "$row[3]\n";
			echo "$row[4]\n";
			echo "$row[5]\n";
			echo "</a>";
			echo "<br><br>";			
	}			
	mysql_free_result($result);
	mysql_close($link);
?>
</div>
</div>
</body>
</html>