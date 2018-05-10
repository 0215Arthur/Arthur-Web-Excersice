
<?php 

  $R7=array(1,4,5,6);
  $answer = array( 1,2,2,3,2);
  $num_a=0;
  $wrong=array( );
  $R1=$_POST['R1'];
  $R2=$_POST['R2'];
  $R3=$_POST['R3'];
  $R4=$_POST['R4'];
  $R5=$_POST['R5'];

  $test=array($R1,$R2,$R3,$R4,$R5);

  for($i=0;$i<count($test);$i++)
  {
  	if($test[$i]==null)
  		continue;
  	if($test[$i]==$answer[$i])
  	{
  		$num_a=$num_a+10;
  	}
  	else{
  		array_push($wrong, $i+1);

  	}
  }

  $key=$_POST['checkbox'];
  if(count($key)!=count($R7))
  {
  	array_push($wrong, 6);
  	
    echo "本次测试得分为".$num_a."!!!<br>";
  	echo "错误题目为";
  	for($i=0;$i<count($wrong);$i++)
  		echo $wrong[$i].",";
  	echo "请再接再厉！";
  header("refresh:3;url='ex5_index.php'"); 
  }  
  else
  {
  	for($i=0;$i<count($key);$i++){   
        if($key[$i]!=$R7[$i])
            {
            	array_push($wrong, 6);
  	echo "本次测试得分为".$num_a."!!!<br>";
  	echo "错误题目为";
  	for($i=0;$i<count($wrong);$i++)
  		echo $wrong[$i].",";
  	echo "请再接再厉！";
  	 header("refresh:3;url='ex5_index.php'"); 
            }
    }  
    $num_a=$num_a+50;
    echo "本次测试得分为".$num_a."!!!<br>";
    if (count($wrong)==0)
    	 echo " <script>window.location.href = 'ex5_index.php'</script> ";  
  	echo "错误题目为";
  	for($i=0;$i<count($wrong);$i++)
  		echo $wrong[$i].",";
  	echo "请再接再厉！";
  	 header("refresh:3;url='ex5_index.php'"); 

  }
  
?>