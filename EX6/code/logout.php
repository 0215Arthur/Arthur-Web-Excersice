<?php
  header("Content-Type:text/html;charset=utf-8"); 
 if(isset($_COOKIE["user"]))
 {
setcookie("user",NULL);
setcookie("pwd",NULL);
setcookie("right",NULL);	 
 }
 
 
 echo "<script>alert('注销成功！返回首页！');window.location.href='index.html';</script>";

?>
