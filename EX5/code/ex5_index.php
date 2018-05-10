
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<Title> 
web菜鸟考试
</title>
<style type="text/css">
	h2,p,h3{
		text-align: center;
	}
    li{
    	margin-left: 30%;
    }
	body{
		align-self: center;
		
		align-content: center;
		margin-left: 200px;
		margin-top: 50px;
		width: 70%;
	}
	
	</style>
</head>

<body > 
	<?php
if (isset($_COOKIE["user"]))
	{$user=$_COOKIE["user"];
    $times=$_COOKIE["times"]+1;
    setcookie("times",$times,time()+3600);
   }
else
  echo "<script>alert('未注册！进入注册页面！');window.location.href='ex5_register.html';</script>";

?>
	<header>
		<h2><strong>web菜鸟在线测试</strong></h2>
<p>欢迎<?php echo $user ?>登陆</p>

<p>您是第<?php echo $times ?>次访问本站</p>
<hr>
	</header>
<div class="content" >
	<br>
     <li>请遵守考试纪律，作答过程中不能使用手机等通讯设备</li>
     <li>考试xx分钟，点击提交按钮即可交卷</li>
     <li>题型包括若干单选题和多选题</li>
     <li>请认真作答，祝你好运</li>
     <br>
     
     <h3><a href="exam.html">进入考试</a><h3>
     	<br>
</div>
<div class="chat" align="center">
	<p>考前交流区</p>
<iframe name="top" src="b.php" width=60% scrolling="yes" frameborder="0" noresize> 
</iframe>

<iframe name="bottom" src="a.php" width=60% scrolling="no" frameborder="0" noresize> 
</iframe>
</div>
</body> 
</html> 