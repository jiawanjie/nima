<?
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('请先登录再进行操作！'); window.location.href='index.php';</script>";
  exit;
}
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>个人中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<!--结束ad-->
<div class="main">
<div class="news_left">
     
	    <div  class="news_title">
	      <h4>个人中心</h4>
	    </div>
         <ul class="listmenu">
           <li><a href="edit_hy.php">修改资料</a></li>
		   <li><a href="exit.php">退出</a></li>
		   <li><a href="index.php">返回首页</a><li>
		  </ul> 
         
   </div>
  <!--/*结束news_left*/-->
   <div class="wrap_right">
	  <div  class="news_title" style="width:720px;"><h4>个人中心</h4></div>
	  
    <div class="dk_box cp_list p_person">
        hello,<?=$_SESSION["userid"]?>
	</div><!--结束dk_box-->
	
	</div><!--结束wrap_right-->
	
 </div>
</div><!--结束_main-->
</body>
</html>
