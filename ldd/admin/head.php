<?
session_start();
?>
<html>
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body id="adminBg">
<div class="adminTop">
  <a href="index.php" target="_blank" class="adminLogo">�����̨</a>
  &nbsp;&nbsp;&nbsp;&nbsp;��ã�
  <strong><? echo $_SESSION["adminname"];?>
  </strong>,��ӭ��¼��&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="../index.php" style="color:#fff" target="_top">
  [��վ��ҳ]</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="exit.php" target="_top" style="color:#fff">[ע����¼]</a>
</div>
</body>
</html>