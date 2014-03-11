<?php
$link = mysql_connect("localhost","root","") or die("could not connect: " . mysql_error());
mysql_select_db("memetao") or die("could not select database");
mysql_query('SET NAMES utf8');
?>