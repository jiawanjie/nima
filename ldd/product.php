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

<!--����ad-->
<div id="content">
   
    <div class="sy_product">
      <div class="bt"><h3>��Ʒչʾ</h3></div>
      <div class="pro_list">
       <ul>
	   	 <?php
$key=$_GET["key"];
$c_id=$_GET["c_id"];
$sql="select * from product where 1=1";
if(!empty($key))
{
  $sql=$sql." and name like '%".$key."%'";
}
if(!empty($c_id))
{
  $sql=$sql." and c_id='$c_id'";
}
$num=mysql_num_rows(mysql_query($sql));
$pagesize=12;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>$pagecount)
{
$page=ceil($num/$pagesize)-1;
}
$nextpage=$page+1;
$prepage=$page-1;
$exec=$sql." order by product_id desc limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);
if($num==0)
{
 echo "<li>��ʱû����Ϣ</li>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
       <li><a href="show_product.php?id=<?=$rs["product_id"]?>"><img src="<?=$rs["pic"]?>" width="190" height="205" >
       <p><?=$rs["name"]?></p></a></li>
<?
  }
}
?>
  
      </ul>
     </div>
	 <!--����pro_list-->
	 <div class="page">
    <!--��ҳ-->
   <div align="center" class="text1">
����<?=$num?>����¼����<?=ceil($num/$pagesize)?>ҳ��ʾ����ǰ�ǵ�<?=$page+1?>ҳ
<a href="index.php" class="text1">��ҳ</a>
<?
if ($page==0) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$prepage' class='text1'>��һҳ</a>";
?>
<?
if($page==$pagecount) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$nextpage' class='text1'>��һҳ</a>"; 
?>

<?
if($page==$pagecount) echo "<span class='text1'>βҳ</span>";
else echo "<a href='?page=$pagecount' class='text1'>βҳ</a>";
?>

</div>
<!--��ҳ����-->
     </div>
	 <!--����page-->
   </div>
   <!--����sy_product-->
</div>
<!--����main-->


</body>
</html>

