<?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html><?php
include_once("../public/sql_connect.php");
include_once("../public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>需求清单</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "goods_detail">
<h1>需求清单</h1>
<?php
$goods_id = $_GET['id'];
$sqlstr = "select * from need where id = '".$goods_id."'";
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
			echo "需求数量："."$row[$i]";	
			}
			if($i == 4)
			{
			echo "联系电话："."$row[$i]"."元";	
			}
			if($i == 5)
			{
			echo "需求描述："."$row[$i]"."个";	
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
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>�嵥</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo������"/>
<div id = "goods_detail">
<h1>��Ʒ�嵥</h1>
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
			echo "�û�����"."$row[$i]";	
			}
			if($i == 2)
			{
			echo "��Ʒ����"."$row[$i]";	
			}
			if($i == 3)
			{
			echo "��Ʒ���ͣ�"."$row[$i]";	
			}
			if($i == 4)
			{
			echo "��Ʒ���ۣ�"."$row[$i]"."Ԫ";	
			}
			if($i == 5)
			{
			echo "��Ʒ������"."$row[$i]"."��";	
			}
			if($i == 6)
			{
			echo "��Ʒ�¾ɣ�"."$row[$i]"."����";	
			}
			if($i == 7)
			{
			echo "��Ʒ���ޣ�"."$row[$i]";	
			}
			if($i == 8)
			{
			echo "��Ʒ������"."$row[$i]";	
			}
			if($i == 9)
			{
			echo "��ϵ�绰��"."$row[$i]";	
			}
			if($i == 10)
			{
				if($row[$i] == '')
					{
						echo "��ƷͼƬ��";
						echo "����ͼƬ";
					}
				else
				{
					echo "��ƷͼƬ��"."<br>";
					echo "<img src=\"../goods_picture/$row[$i]\" align=\"center\" width=\"300px\" height=\"300px\" alt=\"��ƷͼƬ������\">";
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