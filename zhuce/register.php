
<html>
<head>
<meta charset="UTF-8">
	<title>用户注册</title>
	<style type="text/css">
	   body{margin:0;padding:0:;background-color:#e8edf0;}
	   div{height:500px;margin: 100px auto 0 auto;width: 45%;min-width:340px;background-color:#fff;border-radius: 10px;padding:30px; }
	   img{position: absolute;top: 5%;left:43%;}
	   legend{font-size: 26px;color:#53b481;font-weight:bold;border-bottom: 3px solid #53b481;padding-bottom: 10px;}
	   hr{border-top:1px solid #f2f2f2;margin-top:-1px;}
	   .label{font-size:5px; color: #8c8c8c;}
	   .input{width:300px;font-size: 14px;padding: 6px 12px;margin-top: 7px;color: #8c8c8c;border-radius: 5px;border:1px solid #8c8c8c;}
	   .submit{background-color:#53b481;padding: 6px 12px;width:328px;font-size: 20px;font-weight:bold;color: #fff;border-radius: 5px;border:1px solid #53b481;}
	   .gender{color: #8c8c8c;}
	   span{color: #8c8c8c;}
	</style>

</head>
<body>
<img src="logo.png"></img>
  <div>
  
  <legend>用户注册</legend><hr/>
 <form name="myform" method="post" action="submit.php" onsubmit="return check()" >
<p>
<label for="username" class="label">用户名</label></br>
<input id="username" name="username" type="text" class="input" placeholder="请输入用户名" onchange="judge()" /><b id="tiq"></b>
<p/>
<p>
<label for="password" class="label">密码</label></br>
<input id="password" name="password" type="password" class="input" placeholder="请输入密码"onchange="confirm()"/>
<p/>
<p>
<label for="password1" class="label">密码确认</label></br>
<input id="password1" name="password1" type="password" class="input" placeholder="请输入确认密码" onchange="confirm()" /><b id="tip"></b>
<p/>
<p>
<label for="mail" class="label">邮箱</label></br>
<input id="mail" name="mail" type="text" class="input"placeholder="请输入邮箱" />
<p/>
<p>
<label for="name" class="label">姓名</label></br>
<input id="name" name="name" type="text" class="input" placeholder="请输入姓名"/>
<p/>
<p>
<label  class="gender">性别:</label>
<input name="sex"  type="radio" value="男" checked/><span>男</span>
<input name="sex"  type="radio" value="女" /><span>女</span>
<p/>
<p>
<input type="submit" name="submit" value="立即注册" class="submit" />
</p>
</form>
  </div>
  	  <script type="text/javascript">
      var http_request=false;
    function createRequest(url) {
  //初始化对象并发出XMLHttpRequest请求
  http_request = false;
  if (window.XMLHttpRequest) {                    //Mozilla等其他浏览器
    http_request = new XMLHttpRequest();
    if (http_request.overrideMimeType) {
      http_request.overrideMimeType("text/xml");
    }
  } else if (window.ActiveXObject) {                //IE浏览器
    try {
      http_request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        http_request = new ActiveXObject("Microsoft.XMLHTTP");
       } catch (e) {}
    }
  }
  if (!http_request) {
    alert("不能创建XMLHTTP实例!");
    return false;
  }
  http_request.onreadystatechange = alertContents;             //指定响应方法
  
  http_request.open("GET", url, true);                 //发出HTTP请求
  http_request.send(null);
}
function alertContents() {                         //处理服务器返回的信息
  if (http_request.readyState == 4) {
    if (http_request.status == 200) {
       document.getElementById('tiq').innerHTML=http_request.responseText;
    } else {
      alert('您请求的页面发现错误');
    }
  }
}
      function judge(){
        var username=myform.username.value;
        //
        createRequest('userconfirm.php?username='+username);
//alert(username);
      }

       
  function check(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var password1 = document.getElementById('password1').value;
	var mail = document.getElementById('mail').value;
	var name = document.getElementById('name').value;
  var panduan=document.getElementById('tiq').innerHTML;
    if(username!=""&&password!=""&&password1!=""&&mail!=""&&name!=""&&panduan=="用户名可用"){
      return true;}else{
        if (panduan=="用户名已被注册!") {alert('请重新填写用户名');myform.username.focus();return false;}
        if (username=="") {alert('请完善信息');myform.username.focus();return false;}
          if (password=="") {alert('请完善信息');myform.password.focus();return false;}
            if (password1=="") {alert('请完善信息');myform.password1.focus();return false;}
              if (mail=="") {alert('请完善信息');myform.mail.focus();return false;}
                if (name=="") {alert('请完善信息');myform.name.focus();return false;}
       return false;}
    
}
 
 function confirm(){
  	var password = document.getElementById('password').value;
    var password1 = document.getElementById('password1').value;
    if(password1==""&&password==""){document.getElementById('tip').innerHTML="";}
    	else if(password1==""&&password!=""){document.getElementById('tip').innerHTML="";}
    		else if(password1!=""&&password==""){document.getElementById('tip').innerHTML="请输入密码";}
    			else if(password1!=""&&password!=""){
    				if(password==password1){document.getElementById('tip').innerHTML="√";}
    					else{document.getElementById('tip').innerHTML="输入错误，请重新输入";
    				return  document.getElementById('password1').focus();
    			}
    			}
  
}


 


</script>

</body>
</html>