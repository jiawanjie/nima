<?
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('���ȵ�¼�ٽ��в�����'); window.location.href='index.php';</script>";
  exit;
}
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>��������</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<!--����ad-->
<div class="main">
<div class="news_left">
     
	    <div  class="news_title">
	      <h4>��������</h4>
	    </div>
         <ul class="listmenu">
           <li><a href="edit_hy.php">�޸�����</a></li>
		   <li><a href="exit.php">�˳�</a></li>
		   <li><a href="index.php">������ҳ</a><li>
		  </ul> 
         
   </div>
  <!--/*����news_left*/-->
   <div class="wrap_right">
	  <div  class="news_title" style="width:720px;"><h4>��������</h4></div>
	  
    <div class="dk_box cp_list p_person">
        hello,<?=$_SESSION["userid"]?>
	</div><!--����dk_box-->
	
	</div><!--����wrap_right-->
	
 </div>
</div><!--����_main-->
</body>
</html>
