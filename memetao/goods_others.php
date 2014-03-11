<?php
include_once("public/sql_connect.php");
include_once("public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="login/all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>其他商品搜索</title>
</head>
<body>
<div id="back">
<img src="picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "goods_daily">
<h1>其他商品列表</h1>
<?php
	$sqlstr = "select * from goods";
	$result = mysql_query($sqlstr,$link);
	if(mysql_num_rows($result) == 0)
	{
		echo "没有找到其他商品信息";
	}
	else
	{
	while($row = mysql_fetch_array($result))
	{
			
			if(($row[3] != '书籍') && ($row[3] != '衣服') && ($row[3] != '饰品') && ($row[3] != '娱乐') && ($row[3] != '电子') && ($row[3] != '虚拟')
				&& ($row[3] != '日用'))
				{
					echo "<a href='login/goods_detail.php?id=".$row['id']."'>";
					echo "$row[2]\n";
					echo "$row[3]\n";
					echo "$row[4]\n"."元\n";
					echo "$row[5]"."个\n";
					echo "$row[6]"."成新\n";
					echo "<br><br>";
					echo "</a>";	
				}
	}	
	}
	mysql_free_result($result);
	mysql_close($link);
?>
</div>
</div>
</body>
</html>