<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ﳵ</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<!--����ad-->
<div id="content">
<div class="bt"><h3 style="color:black;">���ﳵ</h3></div>
    <!--��ʼ-->
		<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="word07">
          <tr>
            <td height="150" valign="top"><!--���ﳵ����-->
                <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" class="word07">
                  <tr>
                    <td height="31" align="center" bgcolor="#217DFF"style="color:#fff;">��Ʒ����</td>
                    <td align="center" bgcolor="#217DFF" style="color:#fff;" >����</td>
                    <td align="center" bgcolor="#217DFF"  style="color:#fff;">����</td>
                    <td align="center" bgcolor="#217DFF" style="color:#fff;">С��</td>
                  </tr>
                  <?
		$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++){
		  if($idarry[$i]!=0){
			//�����ݿ����
			$sql=mysql_query("select * from product where product_id='".$idarry[$i]."'");
			$rs=mysql_fetch_assoc($sql);
			?>
                  <form action="cart.php?act=update" method="post">
                    <input type="hidden" name="pos" value="<?=$i?>">
                    <tr>
                      <td width="27%" height="31" align="center" bgcolor="#F6F6F6" class="text12"><?=left($rs["name"],16)?></td>
                      <td width="13%" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["price"]?></td>
                      <td width="12%" align="center" bgcolor="#F6F6F6" class="text12"><label>
                        <input name="num" type="text" size="10" value="<?=$countarry[$i]?>">
                      </label></td>
                      <td width="11%" align="center" bgcolor="#F6F6F6" class="text12">��
              <?=$rs["price"]*$countarry[$i]?></td>
                      
                    </tr>
                  </form>
                  <?
			$total=$total+($rs["m_price"]*$countarry[$i]);
			mysql_free_result($sql);
				}
			}
						?>
                </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="20" colspan="4">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="19%" align="center" bgcolor="#EEEEEE">
					<a href="index.php">
					<img src="images/jixugouwu.png" width="130" height="55" border="0">
					</a>
					</td>
                    <td width="19%" align="center" bgcolor="#EEEEEE">
					<a href="cart.php?act=remove">
					<img src="images/qk.png" width="130" height="55" border="0">
					</a>
					</td>
                    <td width="19%" align="center" bgcolor="#EEEEEE">
					<a href="jiezhang.php">
					<img src="images/fk.png" width="130" height="55" border="0">
					</a>
					</td>
                  </tr>
                </table>
              <!--���ﳵ����-->
			  </td>
          </tr>
        </table>
		<!--����-->
</div>

</body>
</html>
