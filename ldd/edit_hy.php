<?
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('���ȵ�¼�ٽ��в�����'); window.location.href='index.php';</script>";
  exit;
}
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<!--����ad-->
<div class="main">
<div class="left-wrap">
	    <div  class="news_title">
	      <h4>��������</h4>
	    </div>
         <ul class="listmenu">
           <li><a href="edit_hy.php">�޸�����</a></li>
		   <li><a href="exit.php">�˳�</a></li>
		  </ul> 
         </div>
  <!--/*����news_left*/-->
   <div class="wrap_right">
	  <div  class="news_title" style="width:720px;"><h4>��������</h4></div>
	  
    <div class="dk_box cp_list p_person">
     <fieldset style="width:420px;border:1px solid #F1F3F4;text-align:left;color:black;font-size:  
12px;padding:5px;">
  <legend>�û��޸���Ϣ</legend>
    <table width="280" height="269" border="0" cellpadding="0" cellspacing="0" class="regtext">
		<?
		$hy_id=$_SESSION["hy_id"];
		$q=mysql_query("select * from hy where hy_id='$hy_id'");
		$rst=mysql_fetch_assoc($q);
		?>
		<form action="save_hy.php?act=edit" method="post">
		<input type="hidden" name="id" value="<?=$hy_id?>" />
                  <tr>
                    <td width="25%" height="26" align="right" valign="middle" class="text12">�ʺţ�</td>
     <td width="20%" align="left"><?=$rst["userid"]?></td>
                  </tr>
                  <tr>
                    <td height="31" align="right" valign="middle" class="text12">���룺</td>
                    <td align="left"><input name="password" type="password" class="inpt" id="password"  size="12" placeholder="����������" required value="<?=$rst["password"]?>"></td>
                  </tr>
                  <tr>
                    <td height="27" align="right" valign="middle" class="text12">�� ����</td>
                    <td align="left"><input name="name" type="text" class="inpt" id="name"  size="12" placeholder="����������" required value="<?=$rst["name"]?>"></td>
                  </tr>
                  <tr>
                    <td height="23" align="right" valign="middle" class="text12">�Ա�</td>
                    <td align="left"><input name="sex" type="radio" value="��" <? if($rst["sex"]=="��") echo "checked"?> />
                ��
                <input type="radio" name="sex" value="Ů" <? if($rst["sex"]=="Ů") echo "checked"?> />
                Ů</td>
                  </tr>
                  <tr>
                    <td height="29" align="right" valign="middle" class="text12">Email:</td>
                    <td align="left"><input name="email" type="email" class="inpt" id="email"style="border:1px solid #DEE1E6;" placeholder="����������" required value="<?=$rst["email"]?>"></td>
                  </tr>
                  <tr>
                    <td height="45" align="center">&nbsp;&nbsp;</td>
                    <td height="45" align="left"><input type="image" src="images/tj.png" ></td>
                  </tr>
	    </form>
      </table>
      </fieldset>
	</div><!--����dk_box-->
	
	</div><!--����wrap_right-->
	
 </div>
</div><!--����_main-->
</body>
</html>
