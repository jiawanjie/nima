<?
include("../inc/conn.php");
include("../inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">��Ʒ�б�</div>
<table width="100%" border="0">
  <tr>
    <td align="center">
	<table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="manage_product.php">
    <tr>
      <td width="103" height="33" align="center">��Ʒ����</td>
      <td width="217" align="center"><input type="text" name="key" /></td>
      <td width="90" align="center"><input type="submit" name="Submit" value="��ѯ"></td>
    </tr>
  </form>
</table>
	</td>
  </tr>
</table>
 <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="193" align="center">ͼƬ</td>
        <td width="345" align="center">��Ʒ</td>
        <td width="263" align="center">����</td>
        <td width="235" align="center">�۸�</td>
        <td width="280" align="center">����</td>
      </tr>
          <?php
$key=$_GET["key"];
$sql="select * from product where 1=1";
if(!empty($key))
{
  $sql=$sql." and name like '%".$key."%'";
}

$num=mysql_num_rows(mysql_query($sql));
$pagesize=6;
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
 echo "<tr><td colspan=7>��ʱû����Ϣ</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
       
      <tr>
  <td align="center"><img src="../<?=$rs["pic"]?>" width="30" height="30" /></td>
        <td align="center"><?=$rs["name"]?></td>
        <td align="center">
		<?
		$r=get_category($rs["c_id"]);
		echo $r["category"];
		?>
		</td>
        <td align="center"><?=$rs["price"]?></td>
        <td align="center"><a href="save_product.php?act=del&id=<?=$rs["product_id"]?>" class="text12">ɾ��</a> <a href="edit_product.php?id=<?=$rs["product_id"]?>">�޸�</a></td>
      </tr>
     <?
  }
}
?>
		 <tr>
         <td colspan="5"><div align="center" class="text1">
����<?=$num?>����¼����<?=ceil($num/$pagesize)?>ҳ��ʾ����ǰ�ǵ�<?=$page+1?>ҳ
<a href="?page=0" class="text1">��ҳ</a>
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

</div></td>
       </tr>
      </table>

</div>

</body>
</html>