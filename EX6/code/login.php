
<?php

         $username=$_POST['firstname'];
         $pwd=$_POST['password'];
 
       
       
        include 'conn.php';
       $statement=$db->prepare('select * from superadmin where username=:username');
        $statement->execute([':username'=>$username]);
        $user=$statement->fetch();
        if(empty($user)){
           echo "<script>alert('用户不存在！请重新登录'); history.go(-1);</script>";
        }
        
        else if($pwd != $user['password']){
            echo "<script>alert('密码不正确！请重新登录'); history.go(-1);</script>";
        }
        else{
            $_SESSION['user']=$username;
             setcookie("user", $username, time()+600);
             setcookie("pwd", $pwd, time()+600);
             setcookie("right", $user['right'], time()+600);
             if ($user['right']=="教师"||$user['right']=="老师")
             {
                  echo "<script>alert('登录成功!');window.location.href='teacher.php';</script>";

             }
             else if($user['right']=="学生")
             {
                echo "<script>alert('登录成功!');window.location.href='student.php';</script>";

             }
             
            //echo "<a href=\"admin.php\">点击进入选择业务主页</a>";
        }
        
        ?>