<?php
session_start(); 

if(empty($_SESSION[adminname]))
{	
	echo ("<script>location.href='login.php';</script>");
	exit;
}
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理后台</title>
</head>
<frameset rows='80 ,*' cols='*' frameborder='no' border='0' framespacing='0'>
  <frame src='head.php' name='topFrame' frameborder='no' scrolling='No' noresize='noresize' id='topFrame' />
  <frameset name='myFrame' cols='200,*' frameborder='no' border='0' framespacing='0'>
    <frame src='left.php' name='leftFrame' frameborder='no' scrolling='No' noresize='noresize' id='leftFrame' />
    <frame src='body.php' name='manFrame' frameborder='no' id='manFrame' />
</frameset>
</frameset>
<noframes></noframes>
<body>
</body>
</html>