<?php
	header("Content-type: text/html; charset=utf-8");
	define('HOST', '127.0.0.1');
	define('USERNAME', 'root');
	define('PASSWORD', '123');
	//require_once('config.php');
	//连库
	if(!(@mysql_connect(HOST, USERNAME, PASSWORD))){
		 echo mysql_error();
	
	}
	//选库
	if(!mysql_select_db('zhuce')){
		echo mysql_error();
		
	}
	//字符集
	if(!mysql_query('set names utf8')){
		echo mysql_error();		
	}
	$username=$_GET['username'];
	$sql=mysql_query("select * from register where username='$username'");
	$info=mysql_fetch_array($sql);
	if ($username=="") {
		echo "";
	}else if($info){
		echo "用户名已被注册!";return false;
	}else{
		echo "用户名可用";
	}
	?>