
<html>
<head>

<meta charset="encodeURI">
	<title>用户注册信息</title>
	<style type="text/css">
	   body{margin:0;padding:0:;background-color:#e8edf0;}
	   div{height:300px;margin: 100px auto 0 auto;width: 45%;min-width:340px;background-color:#fff;border-radius: 10px;padding:30px; }
	   img{position: absolute;top: 5%;left:43%;}
	   legend{font-size: 26px;color:#53b481;font-weight:bold;border-bottom: 3px solid #53b481;padding-bottom: 10px;}
	   hr{border-top:1px solid #f2f2f2;margin-top:-1px;}
	 
	   .submit{background-color:#53b481;padding: 6px 12px;width:328px;font-size: 20px;font-weight:bold;color: #fff;border-radius: 5px;border:1px solid #53b481;}
     .ww{text-align:center;}
	</style>
<script type="text/javascript">
function GetQueryString(name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                var r = window.location.search.substr(1).match(reg);
                if (r != null) return decodeURI(r[2]); return null;
            }
function we(){
	document.location.href="register.php";
}

</script>
</head>
<body>

<img src="logo.png"></img>
  <div>
  <legend>用户注册信息</legend><hr/>
<p>
用户名:<span id="q"></span><script type="text/javascript">document.getElementById('q').innerHTML=GetQueryString("username")</script>  
 </br>
<p/>
<p>
密码:<span id="w"></span><script type="text/javascript">document.getElementById('w').innerHTML=GetQueryString("password")</script> </br>
<p/>
<p>
邮箱:<span id="e"></span><script type="text/javascript">document.getElementById('e').innerHTML=GetQueryString("mail")</script> </br>
<p/>
<p>
姓名:<span id="r"></span><script type="text/javascript">document.getElementById('r').innerHTML=GetQueryString("name")</script> </br>
<p/>
<p>
性别:<span id="t"></span><script type="text/javascript">document.getElementById('t').innerHTML=GetQueryString("sex")</script> 
<p/>
<p class="ww">
<input type="button" name="submit" value="返回" class="submit" onclick="we()" />
</p>
  </div>