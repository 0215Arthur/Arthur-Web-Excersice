<?php
if (isset($_COOKIE["user"]))
{
    if($_COOKIE["right"]!="教师")
    {
       echo "<script>alert('未登录!'); history.go(-1);</script>";
    }
}
else
{
echo "<script>alert('未登录!'); history.go(-1);</script>";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
   
</head>
<body>
<div id="all">
    <div class="method">
       
        <?php
        include 'conn.php';
        $str=$db->query("select * from books ");
        $result = $str->fetchAll(PDO::FETCH_ASSOC);
        $flag=false;
        foreach($result as $value){
            if($value['id'] == $_POST['id']){
                //echo "图书编号已存在!请重新输入："."<br>";
				  echo "<script>alert('图书编号已存在!请重新输入!'); history.go(-1);</script>";
 
            }
            else {
                $flag = true;
            }
        }
        if($flag){
            $statement = $db->prepare('insert into books(id,kind,name,author,price,press,address,status,isDelete) values (:id,:kind,:name,:author,:price,:press,:address,:status,0)');
            $result = $statement->execute([':id' => $_POST['id'], ':kind'=>$_POST['kind'],':name' => $_POST['name'], ':author' => $_POST['author'], ':price' => $_POST['price'],':press'=>$_POST['press'],':address'=>$_POST['address'], ':status' => '1']);
            if ($result) {
                //echo "添书成功";
                //echo "书的编号：".$_POST['id']."书名：".$_POST['name']."<br>";
                //echo "<a href=\"index.php\">返回主页面</a>";
				echo "<script> alert('添书成功！书的编号为".$_POST['id']."书名：".$_POST['name']."'); window.location.href='admin.php';</script>";

            } else {
                //echo "输入格式信息不对，添书失败"."<br>";
				echo "<script>alert('输入格式信息不对，添书失败'); history.go(-1);</script>";

               // echo "<a href=\"add_book.php\">返回添书界面</a>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
