<?
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<title>头部</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">分类列表</div>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="102" align="center">ID</td>
        <td align="left">分类</td>
        <td width="315" align="center">操作</td>
      </tr>
 <?php
 $sql="select * from category order by c_id desc";
 $query=mysql_query($sql);
 while($rs=mysql_fetch_array($query))
 {
?>
       
      <tr>
        <td align="center"><?php echo $rs["c_id"];?></td>
<td align="left"><?=$rs["category"]?></td>
        <td align="center"><a href="save_category.php?act=del&id=<?=$rs["c_id"]?>" onClick="{if(confirm('确定删除吗?')){return true;}return false;}"><font color="#000000">删除</font></a> <a href="edit_category.php?act=edit&id=<?=$rs["c_id"]?>">修改</a></td>
      </tr>
      <?
		 }
?>
		
      </table>

</div>

</body>
</html>