<?
session_start();
?>
<html>
<head>
<title>头部</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body id="adminBg">
<div class="adminTop">
  <a href="index.php" target="_blank" class="adminLogo">管理后台</a>
  &nbsp;&nbsp;&nbsp;&nbsp;你好：
  <strong><? echo $_SESSION["adminname"];?>
  </strong>,欢迎登录！&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="../index.php" style="color:#fff" target="_top">
  [网站首页]</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="exit.php" target="_top" style="color:#fff">[注销登录]</a>
</div>
</body>
</html>