<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>商品清单</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "goods_detail">
<h1>商品清单</h1>
<?php
$goods_id = $_GET['id'];
$sqlstr = "select * from goods where id = '".$goods_id."'";
$result = mysql_query($sqlstr,$link);
while($row = mysql_fetch_row($result))
{
		for($i = 1 ; $i < count($row);$i++)
		{
			if($i == 1)
			{
			echo "用户名："."$row[$i]";	
			}
			if($i == 2)
			{
			echo "商品名："."$row[$i]";	
			}
			if($i == 3)
			{
			echo "商品类型："."$row[$i]";	
			}
			if($i == 4)
			{
			echo "商品单价："."$row[$i]"."元";	
			}
			if($i == 5)
			{
			echo "商品数量："."$row[$i]"."个";	
			}
			if($i == 6)
			{
			echo "商品新旧："."$row[$i]"."成新";	
			}
			if($i == 7)
			{
			echo "商品有无："."$row[$i]";	
			}
			if($i == 8)
			{
			echo "商品描述："."$row[$i]";	
			}
			if($i == 9)
			{
			echo "联系电话："."$row[$i]";	
			}
			if($i == 10)
			{
				if($row[$i] == '')
					{
						echo "商品图片：";
						echo "暂无图片";
					}
				else
				{
					echo "商品图片："."<br>";
					echo "<img src=\"../goods_picture/$row[$i]\" align=\"center\" width=\"300px\" height=\"300px\" alt=\"商品图片加载中\">";
				}
			}
			echo "<br>";
		}
}
mysql_free_result($result);
mysql_close($link);
?>
</div>
</div>
</body>
</html>