<html> 
<title> 
聊天室 
</title> 
<body TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 > 
<?php 
$person = $_COOKIE["user"];
$msg = @$_POST[message]; 
if ($person!="" && $msg!=""){ 
$handle = fopen("msg.txt","r"); 
$tot = 0; 
$oldmsg = array(); 
while ($content = fgets($handle)){ 
$oldmsg[] = $content; 
++$tot; 
} 
fclose($handle); 
unlink("msg.txt"); 
$fp = fopen("msg.txt","a+"); 
date_default_timezone_set("Asia/Shanghai");
$time = date("Y-m-d h:i:sa"); 
fwrite($fp,"<font color='blue'>".$person."</font> : <font color='red'>"."<".$time.">"."</font>  :  <b>".$msg."</b><br>"); 
for ($i =0;$i<$tot;++$i){ 
if ($i>50) break; 
fwrite($fp,$oldmsg[$i]); 
} 
} 
?> 

<TABLE width="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr align="left" bgcolor="#666666"> 
<td height="20"> 
</td></tr> 
<tr bgcolor="#FFCC66"> 
<td width="1" height="4" ></td> 
</tr> 
</TABLE> 

<table width="100%" border=0 cellspacing=0 cellpadding=0 bgcolor="#EFEFEF"> 

<table width="100%" height="500" boder=0 cellspacing=0 cellpadding=0 bgcolor="#EFEFEF"> 


<form action="a.php" method = "post"> 

<textarea type="textarea" name="message" rows="5" cols="50" size = 100></textarea> 
<input type="submit" value="发言"> 
</td> 
</form> 
</tr> 
</table> 
</font> 
</td> 
</tr> 
</tr> 
</table> 
</td> 
</tr> 
</table> 
</body> 
</html> 