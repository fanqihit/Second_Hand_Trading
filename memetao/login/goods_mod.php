<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>个人物品信息更改</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "goods_mod">
<h1>选择要修改的物品</h1>
<?php
	$sqlstr = "select * from goods where user_name='".$_COOKIE['cookie_id']."'";
	$result = mysql_query($sqlstr,$link);
	while($row = mysql_fetch_array($result))
	{	
			echo "<a href='goods_mod_chk.php?id=".$row['id']."'>";
			echo "$row[2]\n";
			echo "$row[3]\n";
			echo "$row[4]\n"."元";
			echo "$row[5]"."个";
			echo "$row[6]"."成新";
			echo "<br><br>";
			echo "</a>";			
	}			
	mysql_free_result($result);
	mysql_close($link);
?>
</div>
</div>
</body>
</html>