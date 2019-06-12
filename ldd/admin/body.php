<?
session_start();
?>
<html>
<head>
<title>欢迎登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body id="bodyBg">
<div class="welcome">
<table width='100%' class='table' border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td style=" padding:50px;font-size:30px;color:#fff;">您好：<?php echo $_SESSION["adminname"];?></a> 欢迎您进入网站管理页面</td>
  </tr>
</table>

</div>
</body>
</html>