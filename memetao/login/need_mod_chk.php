<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>个人需求信息更改</title>
</head>
<body>
<?php
$need_id = $_GET['id'];
setcookie("need_id",$need_id);
?>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo载入中"/>
<div id="need_mod_chk">
<h1 align="center">输入要修改的内容</h1>
<form name="form1" action="need_mod_chk_re.php" method="post" enctype="multipart/form-data">
	<p align="center">商品名称<input type="text" name="goods_name" size="20"></p>
	<p align="center">需求数量<input type="text" name="goods_number" size="20"></p>
	<p align="center">联系电话<input type="text" name="telephone" size="20"></p>
	<p align="center">需求描述<input type="text" name="need_des" size="20"></p>
	<p align="center"><input  type="submit" name="update"  value="提交"></input><input type="reset" name="重置"></input></p>
</form>
<h3 align="center"><a href="main.php">会员主模块</a></h3>
</div>
</div>
</body>
</html>