<?php
include_once("public/sql_connect.php");
include_once("public/my_msg.php");
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="login/all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>用户留言</title>
</head>
<body>
<div id="back">
<img src="picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo加载中"/>
<div id = "message">
<h1>用户留言</h1>
<form action="message_chk.php" method="post" name="myform">
	<textarea name="user_message" cols="50" rows="10">请留言</textarea>
	<input type="submit" name="提交"></input><input type="reset" name="重置"></input>
</form>
</div>
</div>
</body>
</html>