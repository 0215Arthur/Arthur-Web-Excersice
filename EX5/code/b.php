<html> 
<head> 
<title> 
聊天室 
</title> 
<script type="text/javascript">
function myrefresh(){ 
window.location.reload(); 
} 
setTimeout('myrefresh()',2000); //指定1秒刷新一次 
</script> 
</script>
</head> 

<body bgcolor="#EFEFEF"> 
<?php 
$handle=fopen("msg.txt","r"); 
//$oldmsg = array(); 
while ($content = fgets($handle)){ 
//$oldmsg[] = $content; 
//++$tot; 
echo $content; 
} 
?> 
</body> 
</html> 