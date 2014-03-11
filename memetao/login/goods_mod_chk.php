<html>
<head>
<link type="text/css" rel="stylesheet" href="all.css">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<title>个人物品信息更改</title>
</head>
<body>
<?php
$need_id = $_GET['id'];
setcookie("need_id",$need_id);
?>
<div id="back">
<img src="../picture/background.jpg" align="center" width="1000px" height="1000px" alt="logo载入中"/>
<div id="goods_mod_chk">
<h1 align="center">输入要修改的内容</h1>
<form name="form1" action="goods_mod_chk_re.php" method="post" enctype="multipart/form-data">
	<p align="center">商品名称<input type="text" name="goods_name" size="20"></p>
	<p align="center">商品类型<input type="text" name="goods_type" size="20"></p>
	<p align="center">商品价格<input type="text" name="goods_price" size="20"></p>
	<p align="center">商品数量<input type="text" name="goods_num" size="20"></p>
	<p align="center">商品新旧<input type="text" name="goods_judge" size="20"></p>
	<p align="center">商品有无<input type="text" name="goods_flag" size="20"></p>
	<p align="center">商品描述<input type="text" name="goods_des" size="20"></p>
	<p align="center">联系电话<input type="text" name="telephone" size="20"></p>
	<p align="center"><input type="hidden" name="MAX_FILE_SIZE" value="2000000" align = "center">商品图片</input></p>
    <p align="center"><input name="myfile" type="file" value="浏览" ></input></p> 
	<p align="center"><input  type="submit" name="update"  value="提交"></input><input type="reset" name="重置"></input></p>
</form>
<h3 align="center"><a href="main.php">会员主模块</a></h3>
</div>
</div>
</body>
</html>