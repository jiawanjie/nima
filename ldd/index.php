<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>万斯商城</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
 <div class="top_bar">
    <div class="top">
	<div class="rightarea"><a href="login.php">登陆</a> &nbsp;| &nbsp;<a href="reg.php">注册</a></div> <!--结束rightarea-->
	</div><!--结束top-->
   </div><!--结束top_bar-->
  
   <div class="logo">
    <div class="search_bar">
	   <form action="product.php">
	     <input type="text" name="key" class="int" placeholder="请输入关键词" required><input type="submit" value="搜 索" name="button" class="btn">
	  </form>
	 </div>
	</div>
	<!--结束logo-->
     <div class="nav_bar">
	 <div class="nav">
	  <ul class="nav-main" style="width:1000px;">
      <li><a href="index.php">首页</a></li>
      <li id="li-1"><a href="product.php">商品中心</a><span></span></li>
	 
	  <li><a href="basket.php">购物车</a></li>
	  <li><a href="person.php">个人中心</a></li>
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

	<!--结束nav-->
    </div>

<!--结束header-->
 <div class="ad">
  <img src="images/banner2.jpg"id="bg">
 </div>

<!--结束ad-->
<div id="content">
   
    <div class="sy_product ">
      <div class="bt"><h3>产品展示</h3></div>
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
	 <!--结束pro_list-->
   </div>
   <!--结束sy_product-->
</div>
<!--结束main-->

</body>
</html>

