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
	//require_once('connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$mail = $_POST['mail'];
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$insertsql = "insert into register(username,password,mail,name,sex) values ('$username','$password','$mail','$name','$sex')";
	if(mysql_query($insertsql)){
		echo "<script>alert('注册成功');window.location.href='information.php?username=$username&password=$password&mail=$mail&name=$name&sex=$sex';</script>";
	}else{
		echo "<script>alert('注册失败');return false;</script>";
	}
	?>









  