<?phpinclude_once("../public/sql_connect.php");include_once("../public/my_msg.php");?><html><head><link type="text/css" rel="stylesheet" href="all.css"><meta http-equiv="Content-Type" content="text/html" charset="utf-8"/><title>个人信息设置</title><style>	a.show:link {position:relative;left:600px;top:100px;}</style></head><body><div id="back"><img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/><div id="p_i_show">	<a class="show" href="###" target=_balnk><?php$temp;$temp = $_COOKIE['cookie_id'];$sqlstr = "select * from personal_information where user_name = '$temp'";$result = mysql_query($sqlstr,$link);$temp = array("姓名: ","学号：","年龄：","电话：","邮箱：","学院：","公寓：","宿舍：");if(mysql_num_rows($result) == 0){	for($i = 1 ;$i < 8 ;$i++)	{		$x = $i - 1;		echo "$temp[$x]";		echo "<br>"."<br>";	}}else{	while($row = mysql_fetch_row($result))	{	for($i = 1 ;$i < count($row) ;$i++)	{		$x = $i - 1;		echo "$temp[$x]"."$row[$i]";		echo "<br><br>";	}	}}mysql_free_result($result);mysql_close($link);?></a></div><div id="personal_information"><h1 align="center">设置（所有均为必填）</h1><form name="form1" action="personal_information_chk.php" method="post">	<p align="center">姓名<input type="text" name="name" size="20"></p>	<p align="center">学号<input type="text" name="student_num" size="20"></p>	<p align="center">年龄<input type="text" name="age" size="20"></p>	<p align="center">电话<input type="text" name="telephone" size="20"></p>	<p align="center">邮箱<input type="text" name="email" size="20"></p>	<p align="center">学院<input type="text" name="college" size="20"></p>	<p align="center">公寓<input type="text" name="apartment" size="20"></p>	<p align="center">宿舍<input type="text" name="room" size="20"></p>	<p align="center"><input type="submit" name="提交"></input><input type="reset" name="重置"></input></p></form></div><div id="mod_personal">	<a href="mod_personal.php" target=_blank>修改个人信息</a></div></div></body></html>