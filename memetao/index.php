<!doctype html>
<<<<<<< HEAD
<?php
include_once("public/sql_connect.php");
include_once("public/my_msg.php");
?>
=======
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html charset=utf-8" />
<title>么么淘--http://memetao.hit.edu.cn</title>
<link type="text/css" rel="stylesheet" href="frame.css">
<style>
	a.Contect:link {color: #0000ff;text-decoration:none;}    
	a.Contect:visited {color: #ff0000;}  
	a.Contect:hover {color: #ffcc00;}    
	a.Contect:active {color: #008000;} 	
	a.Contect:link {position:absolute;margin-left:60px;margin-top:15px;}
</style>
<style>
	a.Message:link {color: #0000ff;text-decoration:none;}     
	a.Message:visited {color: #ff0000;}  
	a.Message:hover {color: #ffcc00;}    
	a.Message:active {color: #008000;} 	
	a.Message:link {position:absolute;margin-left:10px;margin-top:15px;}
</style>
<style>
	a.Help:link {color: #0000ff;text-decoration:none;}
	a.Help:visited {color: #ff0000;}  
	a.Help:hover {color: #ffcc00;}    
	a.Help:active {color: #008000;} 	
	a.Help:link {position:absolute;margin-left:140px;margin-top:15px;}
</style>
<style>
	a.Regist:link {color: #0000ff;text-decoration:none;}
	a.Regist:visited {color: #ff0000;}  
	a.Regist:hover {color: #ffcc00;}    
	a.Regist:active {color: #008000;} 	
	a.Regist:link {position:absolute;margin-left:150px;margin-top:15px;}
</style>
<style>
	a.Login:link {color: #0000ff;text-decoration:none;}
	a.Login:visited {color: #ff0000;}  
	a.Login:hover {color: #ffcc00;}    
	a.Login:active {color: #008000;} 	
	a.Login:link {position:absolute;margin-left:200px;margin-top:15px;}
</style>
<style>
	a.Book:link {color: #0000ff;text-decoration:none;}
	a.Book:visited {color: #ff0000;}  
	a.Book:hover {color: #ffcc00;}    
	a.Book:active {color: #008000;} 	
	a.Book:link {position:absolute;margin-left:45px;margin-top:25px;}
	a.Book:link {font-size:40px;}
</style>
<style>
	a.Clothes:link {color: #0000ff;text-decoration:none;}
	a.Clothes:visited {color: #ff0000;}  
	a.Clothes:hover {color: #ffcc00;}    
	a.Clothes:active {color: #008000;} 	
	a.Clothes:link {position:absolute;margin-left:135px;margin-top:25px;}
	a.Clothes:link {font-size:40px;}
</style>
<style>
	a.Decoration:link {color: #0000ff;text-decoration:none;}
	a.Decoration:visited {color: #ff0000;}  
	a.Decoration:hover {color: #ffcc00;}    
	a.Decoration:active {color: #008000;} 	
	a.Decoration:link {position:absolute;margin-left:225px;margin-top:25px;}
	a.Decoration:link {font-size:40px;}
</style>
<style>
	a.Entertainment:link {color: #0000ff;text-decoration:none;}
	a.Entertainment:visited {color: #ff0000;}  
	a.Entertainment:hover {color: #ffcc00;}    
	a.Entertainment:active {color: #008000;} 	
	a.Entertainment:link {position:absolute;margin-left:315px;margin-top:25px;}
	a.Entertainment:link {font-size:40px;}
</style>
<style>
	a.Electron:link {color: #0000ff;text-decoration:none;}
	a.Electron:visited {color: #ff0000;}  
	a.Electron:hover {color: #ffcc00;}    
	a.Electron:active {color: #008000;} 	
	a.Electron:link {position:absolute;margin-left:405px;margin-top:25px;}
	a.Electron:link {font-size:40px;}
</style>
<style>
	a.Fiction:link {color: #0000ff;text-decoration:none;}
	a.Fiction:visited {color: #ff0000;}  
	a.Fiction:hover {color: #ffcc00;}    
	a.Fiction:active {color: #008000;} 	
	a.Fiction:link {position:absolute;margin-left:495px;margin-top:25px;}
	a.Fiction:link {font-size:40px;}
</style>
<style>
	a.Daily:link {color: #0000ff;text-decoration:none;}
	a.Daily:visited {color: #ff0000;}  
	a.Daily:hover {color: #ffcc00;}    
	a.Daily:active {color: #008000;} 	
	a.Daily:link {position:absolute;margin-left:585px;margin-top:25px;}
	a.Daily:link {font-size:40px;}
</style>
<style>
	a.Others:link {color: #0000ff;text-decoration:none;}
	a.Others:visited {color: #ff0000;}  
	a.Others:hover {color: #ffcc00;}    
	a.Others:active {color: #008000;} 	
	a.Others:link {position:absolute;margin-left:675px;margin-top:25px;}
	a.Others:link {font-size:40px;}
</style>
<style>
a.GoodsRelease:link,a.GoodsRelease:visited
{
position:absolute;
display:block;
font-weight:bold; <!-- 设置字体粗细-->
font-size:20px;   <!-- 设置字体大小-->
font-family:Verdana, Arial, Helvetica, sans-serif;
color:#0000ff;
background-color:#98bf21;
width:80px;
text-align:center;
padding:23px;
text-decoration:none;
margin-left:24px;
margin-top:18px;
}
a.GoodsRelease:hover,a.GoodsRelease:active
{
background-color:red;
}
a.NeedRelease:link,a.NeedRelease:visited
{
position:absolute;
display:block;
font-weight:bold; <!-- 设置字体粗细-->
font-size:20px;   <!-- 设置字体大小-->
font-family:Verdana, Arial, Helvetica, sans-serif;
color:#0000ff;
background-color:#98bf21;
width:80px;
text-align:center;
padding:24px;
text-decoration:none;
margin-left:170px;
margin-top:18px;
}
a.NeedRelease:hover,a.NeedRelease:active
{
background-color:red;
}
</style>
<<<<<<< HEAD
<style>
a.moregoods:link {position:absolute;margin-left:80px;margin-top:0px;}
</style>
=======
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
</head>
<body>
<div id="modular1">   
	<div id="ShouldKnow">
		<a  class="Contect" href="contect.php" target=_blank  title="点击获取我们的联系方式" align="center">联系方式</a>
		<a  class="Message" href="message.php" target=_self  title="点击获得帮助" align="center">留言</a>
		<a  class="Help" href="help.php"  target=_blank title="点击获得帮助" align="center">帮助</a>
	</div>
	<div id="login">
<<<<<<< HEAD
		<a  class="Regist" href="regist/regist.php" target=_blank  title="点击注册账户，注册账户才能使用哦！！" align="center">注册</a>
		<a  class="Login" href="login/login.php" target=_blank  title="亲，还在等什么，快快登录哦！" align="center">登录</a>
=======
		<a  class="Regist" href="regist.php" target=_blank  title="点击注册账户，注册账户才能使用哦！！" align="center">注册</a>
		<a  class="Login" href="###" target=_blank  title="亲，还在等什么，快快登录哦！" align="center">登录</a>
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
	</div>	
</div>
<div id="modular2">
	<div id="memetao">
<<<<<<< HEAD
		<img src="picture/memetao.jpg" align="center" width="200px" height="100px" alt="logo加载中"/>
	</div>
	<div id="search" style="background-image:url('picture/search.jpg');">
		<form name="form1" action="goods_search.php" method="post">
		<div id="goods_search_a">
			 <input type="text" name="search" size="50" maxlength="5" style="height:45px">
		</div>
		<div id="goods_search_b">
		<input type="image" name="提交"  src="picture/search_button.jpg" style="margin-left:0px;margin-top=-0px">
		</div>
		</form>
	</div>
	<div id="release">
		<a class="GoodsRelease" href="login/login.php" target=_blank title="物品信息发布模块">物品发布</a>
		<a class="NeedRelease" href="login/login.php" target=_blank title="需求信息发布模块">需求发布</a>
=======
		<img src="memetao.jpg" align="center" width="200px" height="100px" alt="logo加载中"/>
	</div>
	<div id="search">
		<img src="search.jpg" align="center" width="500px" height="100px" alt="搜索输入框加载中"/>
	</div>
	<div id="release">
		<a class="GoodsRelease" href="goodsrelease.php" target=_blank title="物品信息发布模块">物品发布</a>
		<a class="NeedRelease" href="needrelease.php" target=_blank title="需求信息发布模块">需求发布</a>
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
	</div>
</div>
<div id="modular3">
	<div id="goodsnews">
<<<<<<< HEAD
		<img src="picture/Goods.jpg" align="center" width="200px" height="100px" alt="商品服务列表加载中">
	</div>
	<div id="tag">
		<a class="Book" href="goods_book.php" target=_blank title="书籍列表模块">书籍</a>
		<a class="Clothes" href="goods_clothes.php" target=_blank title="书籍列表模块">衣服</a>
		<a class="Decoration" href="goods_decoration.php" target=_blank title="书籍列表模块">饰品</a>
		<a class="Entertainment" href="goods_entertainment.php" target=_blank title="书籍列表模块">娱乐</a>
		<a class="Electron" href="goods_electron.php" target=_blank title="书籍列表模块">电子</a>
		<a class="Fiction" href="goods_fiction.php" target=_blank title="书籍列表模块">虚拟</a>
		<a class="Daily" href="goods_daily.php" target=_blank title="书籍列表模块">日用</a>
		<a class="Others" href="goods_others.php" target=_blank title="其他商品列表模块">其他</a>
=======
		<img src="Goods.jpg" align="center" width="200px" height="100px" alt="商品服务列表加载中">
	</div>
	<div id="tag">
		<a class="Book" href="###" target=_blank title="书籍列表模块">书籍</a>
		<a class="Clothes" href="###" target=_blank title="书籍列表模块">衣服</a>
		<a class="Decoration" href="###" target=_blank title="书籍列表模块">饰品</a>
		<a class="Entertainment" href="###" target=_blank title="书籍列表模块">娱乐</a>
		<a class="Electron" href="###" target=_blank title="书籍列表模块">电子</a>
		<a class="Fiction" href="###" target=_blank title="书籍列表模块">虚拟</a>
		<a class="Daily" href="###" target=_blank title="书籍列表模块">日用</a>
		<a class="Others" href="###" target=_blank title="其他商品列表模块">其他</a>
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
	</div>
</div>
<div id="modular4">
	<div id="newgoods">
		<p align="center">今日新品</p>
<<<<<<< HEAD
		<?php
		$sqlstr = "select * from goods";
		$result = mysql_query($sqlstr,$link);
		$i = 0;
		while($row = mysql_fetch_array($result))
		{
			
			if($i < 10)
			{
			echo "<a href='login/goods_detail.php?id=".$row['id']."'>";
			echo "$row[2]\n";
			echo "$row[3]\n";
			echo "$row[4]\n"."元";
			echo "$row[5]"."个";
			echo "$row[6]"."成新";
			echo "<br><br>";
			echo "</a>";
			}
			$i++;
		}			
		?>
		<a class="moregoods" href="login/goods_more.php" target=_blank  title="点击查看更多商品">更多商品</a>
=======
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
	</div>
	<div id="discount">
		<p align="center">聚划算</p>
	</div>
	<div id="shopping">
		<p align="center">特色购物</p>
	</div>
	<div id="myneed">
		<p align="center">需求空间</p>
<<<<<<< HEAD
		<?php
		$sqlstr = "select * from need";
		$result = mysql_query($sqlstr,$link);
		$i = 0;
		while($row = mysql_fetch_array($result))
		{		
			if($i < 10)
			{
				echo "<a href='login/need_detail.php?id=".$row['id']."'>";
					for($x = 1 ;$x < 6 ;$x++)
					{
						echo "$row[$x]\n";
					}
				echo "<br><br>";
				echo "</a>";
			}
			$i++;
		}			
		mysql_free_result($result);
		mysql_close($link);
		?>
		<a class="moregoods" href="login/need_more.php" target=_blank  title="点击查看更多商品">更多需求</a>
=======
>>>>>>> 50111b4870ada1a3fb25f682a2de8e7b00b1bfba
	</div>
</div>
<div id="modular5">
    <div id="useless">
			 <p>copyright 2013(C) 哈尔滨工业大学么么淘网  网络文化经营许可证：文网文[2013]041号</p>
	</div>
	<div id="link">

		<select style="FONT-SIZE: 9pt; color:666666; WIDTH:165px; position:absolute; margin-left:100px; margin-top:16px" onChange="window.open(this.options[this.selectedIndex].value,'_Blank')" size=1 name=select1>
                    <option value = "#" selected>友情链接</option>        
                    <option value = "http://xgc.hit.edu.cn/" target=_blank style="color:#999999"> 学生工作处</a></option> 
                    <option value = "http://zsb.hit.edu.cn/" target=_blank style="color:#999999"> 招生就业处</a></option> 
                    <option value = "http://hituc.hit.edu.cn" target=_blank style="color:#999999"> 本科生院</a></option>
					<option value = "http://hitgs.hit.edu.cn/" target=_blank style="color:#999999"> 研究生院</a></option>
                    <option value = "http://student.hit.edu.cn/" target=_blank style="color:#999999"> 团委</a></option>
					<option value = "http://cms.hit.edu.cn" target=_blank style="color:#999999"> 乐学网</a></option>
					<option value = "http://jwc.hit.edu.cn" target=_blank style="color:#999999"> 教务处</a></option> 
					
        </select>
	</div>
</div>
</body>
</html>