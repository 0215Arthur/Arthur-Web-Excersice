
<?php

          $username=$_POST['firstname'];
         $name=$_POST['lastname'];
         $right=$_POST['identity'];
  
         $pwd=$_POST['password'];
 
        
       
        include 'conn.php';
        $str=$db->query("select * from superadmin");
        $result = $str->fetchAll(PDO::FETCH_ASSOC);
        $flag=false;
        if (count($result)==0)
        {
          $flag=true;
        }
        foreach($result as $value){
            if($value['username'] == $username){
         echo "<script>alert('该用户名已存在!请重新输入'); history.go(-1);</script>";
                }
            else
               $flag=true;
           
        }
        if($flag){

            $statement = $db->prepare('insert into superadmin(`username`,`name`,`right`,`password`) values (:usr,:name,:rgt,:pwd)');
            $result = $statement->execute([':usr'=>$username,':name'=>$name,':rgt'=>$right,':pwd'=>$pwd]);
            echo $result;
            if ($result) {
        
        echo "<script> alert('注册成功'); window.location.href='index.html';</script>";
                exit;

            }
            else{
       echo "<script>alert('输入格式不对，请重新输入'); history.go(-1);</script>";
       exit;
           
            }
        }
        ?>