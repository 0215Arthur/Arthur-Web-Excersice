<?php

  $username=$_POST['firstname'];
  $name=$_POST['lastname'];
  $birth=$_POST['birth'];
  $pwd=$_POST['password'];
  $pic=$_POST['picture'];
  setcookie("user", $username, time()+3600);
  setcookie("pwd", $pwd, time()+3600);
  setcookie("times", 0, time()+3600);
  echo "用户名：".$username."<br>";
  
  echo "出生日期".$birth.'<br>';
  
  echo "姓名".$name.'<br>';
  
  echo "密码".($pwd).'<br>';
  
  echo "头像文件:".($pic).'<br>';
  echo "注册成功！进入考试系统！";
  echo " <script>window.location.href = 'ex5_index.php'</script> ";  
?>
