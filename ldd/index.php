<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��˹�̳�</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
 <div class="top_bar">
    <div class="top">
	<div class="rightarea"><a href="login.php">��½</a> &nbsp;| &nbsp;<a href="reg.php">ע��</a></div> <!--����rightarea-->
	</div><!--����top-->
   </div><!--����top_bar-->
  
   <div class="logo">
    <div class="search_bar">
	   <form action="product.php">
	     <input type="text" name="key" class="int" placeholder="������ؼ���" required><input type="submit" value="�� ��" name="button" class="btn">
	  </form>
	 </div>
	</div>
	<!--����logo-->
     <div class="nav_bar">
	 <div class="nav">
	  <ul class="nav-main" style="width:1000px;">
      <li><a href="index.php">��ҳ</a></li>
      <li id="li-1"><a href="product.php">��Ʒ����</a><span></span></li>
	 
	  <li><a href="basket.php">���ﳵ</a></li>
	  <li><a href="person.php">��������</a></li>
	  </ul>
	 <div id="box-1" class="hidden-box hidden-loc-index">
        <ul>
		<?
		$query=mysql_query("select * from category");
		while($rst=mysql_fetch_array($query))
		{
		?>
          <li><a href="product.php?c_id=<?=$rst["c_id"]?>"><?=$rst["category"]?></a></li>
		 <?
		 }
		 mysql_free_result($query);
		 ?>
        </ul>
      </div>
	 </div>
	  <script type="text/javascript" src="js/main.js"></script> 

	<!--����nav-->
    </div>

<!--����header-->
 <div class="ad">
  <img src="images/banner2.jpg"id="bg">
 </div>

<!--����ad-->
<div id="content">
   
    <div class="sy_product ">
      <div class="bt"><h3>��Ʒչʾ</h3></div>
      <div class="pro_list">
       <ul>
	   <?
	   $q=mysql_query("select * from product order by product_id desc limit 12");
	   while($rs=mysql_fetch_array($q))
	   {
	   ?>
       <li><img src="<?=$rs["pic"]?>" width="190" height="205" >
       <p><a href="show_product.php?id=<?=$rs["product_id"]?>"><?=left($rs["name"],10)?></a></p></li>
	   <?
	   }
	   mysql_free_result($q);
	   ?>
     
      </ul>
     </div>
	 <!--����pro_list-->
   </div>
   <!--����sy_product-->
</div>
<!--����main-->

</body>
</html>

