<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?
include("inc_title.php");
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<?
include("header.php");
?><!--结束header-->
<?
include("flash.php");
?>
<!--结束ad-->
<div id="content">
<div class="bt"><h3>在线支付</h3></div>
   <!--开始-->
		<table width="65%" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
	 <?
	 $total=$_POST["total"];
	 $name=$_POST["name"];
	 $address=$_POST["address"];
	 $telephone=$_POST["telephone"];
	 $post_way=$_POST["post_way"];
	 $content=$_POST["content"];
	 ?>
            <form action="save_order1.php?act=add" method="post">
              <input type="hidden" name="total" value="<?=$total?>" />
              <input type="hidden" name="name" value="<?=$name?>" />
              <input type="hidden" name="address" value="<?=$address?>" />
     
              <input type="hidden" name="telephone" value="<?=$telephone?>" />
              <input type="hidden" name="email" value="<?=$email?>" />
             
              <input type="hidden" name="billing_address" value="<?=$billing_address?>" />
              <input type="hidden" name="post_way" value="<?=$post_way?>" />
              <input type="hidden" name="content" value="<?=$content?>" />
              <tr>
                <td height="85" align="center" valign="middle"><table width="80%" height="62" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="31" align="center" bgcolor="#FCF1DF">支付方式</td>
                    <td align="center" bgcolor="#FCF1DF">账号</td>
                  </tr>
		<?
		$q=mysql_query("select * from pay");
		while($rs=mysql_fetch_array($q))
		{
		?>
                  <tr>
  <td width="50%" height="31" align="center"><?=$rs["pay"]?></td>
       <td width="50%" align="center"><?=$rs["pay_number"]?></td>
                  </tr>
				  <?
				  }
				  mysql_free_result($q);
				  ?>
                </table></td>
              </tr>
              
              <tr>
                <td height="30" align="center" bgcolor="#FCF1DF" class="text12">金额一共是
                  <psan style="color:#FF0000;">
                    <?=$_POST["total"]?>
                    </span> 元</td>
              </tr>
              <tr>
                <td height="32" align="center"><input name="Submit2" type="submit" class="bt" value="提交" /></td>
              </tr>
            </form>
  </table>
    
		<!--结束-->
</div>
<!--结束main-->
<?
include("copy.php");
?>

</body>
</html>
