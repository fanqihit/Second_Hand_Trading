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
<title>И°─Ф╠┌Ф╦┘Е█∙</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logoЕ┼═Х╫╫Д╦╜"/>
<div id = "goods_detail">
<h1>И°─Ф╠┌Ф╦┘Е█∙</h1>
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
			echo "Г■╗Ф┬╥Е░█О╪ "."$row[$i]";	
			}
			if($i == 2)
			{
			echo "Е∙├Е⌠│Е░█О╪ "."$row[$i]";	
			}
			if($i == 3)
			{
			echo "И°─Ф╠┌Ф∙╟И┤▐О╪ "."$row[$i]";	
			}
			if($i == 4)
			{
			echo "Х│■ГЁ╩Г■╣Х╞²О╪ "."$row[$i]"."Е┘┐";	
			}
			if($i == 5)
			{
			echo "И°─Ф╠┌Ф▐▐Х©╟О╪ "."$row[$i]"."Д╦╙";	
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
<title>гЕ╣╔</title>
</head>
<body>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo╪стьжп"/>
<div id = "goods_detail">
<h1>илф╥гЕ╣╔</h1>
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
			echo "сц╩╖цШё╨"."$row[$i]";	
			}
			if($i == 2)
			{
			echo "илф╥цШё╨"."$row[$i]";	
			}
			if($i == 3)
			{
			echo "илф╥юЮпмё╨"."$row[$i]";	
			}
			if($i == 4)
			{
			echo "илф╥╣╔╪шё╨"."$row[$i]"."т╙";	
			}
			if($i == 5)
			{
			echo "илф╥йЩа©ё╨"."$row[$i]"."╦Ж";	
			}
			if($i == 6)
			{
			echo "илф╥пб╬иё╨"."$row[$i]"."Ёипб";	
			}
			if($i == 7)
			{
			echo "илф╥спнчё╨"."$row[$i]";	
			}
			if($i == 8)
			{
			echo "илф╥цХйЖё╨"."$row[$i]";	
			}
			if($i == 9)
			{
			echo "а╙о╣╣Г╩╟ё╨"."$row[$i]";	
			}
			if($i == 10)
			{
				if($row[$i] == '')
					{
						echo "илф╥м╪ф╛ё╨";
						echo "тщнчм╪ф╛";
					}
				else
				{
					echo "илф╥м╪ф╛ё╨"."<br>";
					echo "<img src=\"../goods_picture/$row[$i]\" align=\"center\" width=\"300px\" height=\"300px\" alt=\"илф╥м╪ф╛╪стьжп\">";
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