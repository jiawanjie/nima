<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>

<!--结束ad-->
 <div class="main" >
  <div class="news_left">
     
	    <div  class="news_title">
	      <h4>产品分类</h4>
	    </div>
         <ul class="listmenu">
		 <?
		$q=mysql_query("select * from category");
		while($rst=mysql_fetch_array($q))
		{
		?>  
           <li><a href="product.php?c_id=<?=$rst["c_id"]?>"><?=$rst["category"]?></a></li>
        <?
	   }
	   mysql_free_result($q);
	   ?>
		  </ul> 
         
   </div><!--/*结束news_left*/-->
   <div class="wrap_right">
	  <div  class="news_title" style="width:715px; color:#CCCCCC;"><h4>产品展示</h4></div>
	   <div class="dk_box">
	   <?
	  $id=$_GET["id"];
	  $q=mysql_query("select * from product where product_id='$id'");
	  $rs=mysql_fetch_assoc($q);
	  ?>
       <div class="dislist_box">
	   <img src="<?=$rs["pic"]?>" alt="<?=$rs["name"]?>" width="325" height="285" border=0 class="dislist_pim">
           <h4><?=$rs["name"]?></h4>
         <p>价格&nbsp;&nbsp;&nbsp;&nbsp;<?=$rs["price"]?></p>
        
         <p style="margin-top:30px;">
		 <a href="cart.php?id=<?=$rs["product_id"]?>">
		 <img src="images/shop_cart.png" border="0"></a>
		 </p>
       </div>
       <!--结束一个小的dislist_box-->
       <div class="miaoshu">
         <h4 class="msbj">详细介绍</h4>
         <p><?=$rs["content"]?></p>
       </div>
       <!--结束描述-->
     </div>
	</div><!--结束wrap_right-->

</div><!--结束_main-->


</body>
</html>

