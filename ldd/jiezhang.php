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
<div class="bt"><h3>���ﳵ</h3></div>
    <!--��ʼ-->
		<table width="97%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#CCCCCC" class="word07">
            <tr>
              <td height="31" align="center" bgcolor="#EEEEEE" class="text12">��Ʒ����</td>
              <td align="center" bgcolor="#EEEEEE" class="text12">����</td>
              <td align="center" bgcolor="#EEEEEE" class="text12">����</td>
              <td width="23%" align="center" bgcolor="#EEEEEE" class="text12">С��</td>
            </tr>
            <?
		$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++)
		{
		  if($idarry[$i]!=0)
		  {
			//�����ݿ����
			$sql=mysql_query("select * from product where product_id='".$idarry[$i]."'");
			$rs=mysql_fetch_assoc($sql);
			?>
            <tr>
              <td width="31%" height="31" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["name"]?></td>
              <td width="14%" align="center" bgcolor="#F6F6F6" class="text12">��<?=$rs["price"]?></td>
              <td width="18%" align="center" bgcolor="#F6F6F6" class="text12"><?=$countarry[$i]?></td>
              <td align="center" bgcolor="#F6F6F6" class="text12">��
                <?=$rs["price"]*$countarry[$i]?></td>
            </tr>
            <?
		$total=$total+($rs["price"]*$countarry[$i]);
			mysql_free_result($sql);
				}
			}
			?>
</table>

  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="border"  >
            <p>&nbsp;</p>
         <p>&nbsp;</p>
            <tr>
              <td height="410" valign="top"><?
			     $sql="select * from hy where userid='".$_SESSION["userid"]."'";
			     $q=mysql_query($sql);
			     $rst=mysql_fetch_assoc($q);
			  ?>
                  <table width="94%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#ccc">
   <form action="zf.php?act=add" method="post">
                      <tr>
                        <td height="27" align="right" bgcolor="#ffffff" class="text12">�ܼۣ�</td>
                        <td align="left" bgcolor="#ffffff"><input name="total" type="text" id="total" value="<?=$total?>" required placeholder="�������ܼ�">
                        <span class="text12">��</span></td>
                      </tr>
                      <tr>
                        <td height="27" align="right" bgcolor="#ffffff" class="text12">�� �� �ˣ�</td>
                        <td align="left" bgcolor="#ffffff"><input name="name" type="text" id="name" value="<?=$rst["name"]?>" required placeholder="����������">
                        <span class="word09 STYLE1">* </span></td>
                      </tr>
                      <tr>
                        <td height="30" align="right" bgcolor="#ffffff" class="text12">�ջ���ַ��</td>
                        <td align="left" bgcolor="#ffffff"><input name="address" type="text" id="address" value="<?=$rst["post_address"]?>" required placeholder="�������ջ��ַ">
                        <span class="js12">*</span></td>
                      </tr>
                      <tr>
                        <td height="30" align="right" bgcolor="#ffffff" class="text12">��ϵ�绰��</td>
                        <td align="left" bgcolor="#ffffff"><input name="telephone" type="text" id="telephone" value="<?=$rst["tel"]?>" required placeholder="��������ϵ�绰">
                        <span class="STYLE1">*</span></td>
                      </tr>
                      <tr>
                        <td height="30" align="right" bgcolor="#ffffff" class="text12">�������䣺</td>
                        <td align="left" bgcolor="#ffffff"><input name="email" type="email" id="email" value="<?=$rst["email"]?>" required placeholder="����������ʼ�"></td>
                      </tr>
                      <tr>
                       
 
                        </td>
                      </tr>
                      
                      <tr>
                        <td height="87" align="right" bgcolor="#ffffff" class="text12">���Ա�ע��</td>
                        <td align="left" bgcolor="#ffffff"><textarea name="content" cols="40" rows="4" id="textarea"></textarea></td>
                      </tr>
                      <tr>
                        <td width="15%" height="30" align="right" bgcolor="#ffffff" class="word09">&nbsp;</td>
                        <td width="85%" align="left" bgcolor="#ffffff"><label>
                          <input type="submit" name="Submit2" value="��  ��" style="background:#2D84FF;padding:10px;margin-right:20px;" />
                          <input type="reset" name="Submit2" value="��  ��" style="background:#2D84FF;padding:10px;" />
                        </label></td>
                      </tr>
                    </form>
                </table>
			  </tr>
    </table>
		<!--����-->
</div>
<!--����main-->

</body>
</html>
