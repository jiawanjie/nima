<?
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<title>ͷ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="style/css/css.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#fff">
<div class="adminBody">

<div class="bigTitle2">�����б�</div>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="adminTable">
      <tr>
        <td width="102" align="center">ID</td>
        <td align="left">����</td>
        <td width="315" align="center">����</td>
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
        <td align="center"><a href="save_category.php?act=del&id=<?=$rs["c_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a> <a href="edit_category.php?act=edit&id=<?=$rs["c_id"]?>">�޸�</a></td>
      </tr>
      <?
		 }
?>
		
      </table>

</div>

</body>
</html>