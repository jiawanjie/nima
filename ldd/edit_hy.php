<?
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('请先登录再进行操作！'); window.location.href='index.php';</script>";
  exit;
}
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>个人中心</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<!--结束ad-->
<div class="main">
<div class="left-wrap">
	    <div  class="news_title">
	      <h4>个人中心</h4>
	    </div>
         <ul class="listmenu">
           <li><a href="edit_hy.php">修改资料</a></li>
		   <li><a href="exit.php">退出</a></li>
		  </ul> 
         </div>
  <!--/*结束news_left*/-->
   <div class="wrap_right">
	  <div  class="news_title" style="width:720px;"><h4>个人中心</h4></div>
	  
    <div class="dk_box cp_list p_person">
     <fieldset style="width:420px;border:1px solid #F1F3F4;text-align:left;color:black;font-size:  
12px;padding:5px;">
  <legend>用户修改信息</legend>
    <table width="280" height="269" border="0" cellpadding="0" cellspacing="0" class="regtext">
		<?
		$hy_id=$_SESSION["hy_id"];
		$q=mysql_query("select * from hy where hy_id='$hy_id'");
		$rst=mysql_fetch_assoc($q);
		?>
		<form action="save_hy.php?act=edit" method="post">
		<input type="hidden" name="id" value="<?=$hy_id?>" />
                  <tr>
                    <td width="25%" height="26" align="right" valign="middle" class="text12">帐号：</td>
     <td width="20%" align="left"><?=$rst["userid"]?></td>
                  </tr>
                  <tr>
                    <td height="31" align="right" valign="middle" class="text12">密码：</td>
                    <td align="left"><input name="password" type="password" class="inpt" id="password"  size="12" placeholder="请输入密码" required value="<?=$rst["password"]?>"></td>
                  </tr>
                  <tr>
                    <td height="27" align="right" valign="middle" class="text12">姓 名：</td>
                    <td align="left"><input name="name" type="text" class="inpt" id="name"  size="12" placeholder="请输入姓名" required value="<?=$rst["name"]?>"></td>
                  </tr>
                  <tr>
                    <td height="23" align="right" valign="middle" class="text12">性别：</td>
                    <td align="left"><input name="sex" type="radio" value="男" <? if($rst["sex"]=="男") echo "checked"?> />
                男
                <input type="radio" name="sex" value="女" <? if($rst["sex"]=="女") echo "checked"?> />
                女</td>
                  </tr>
                  <tr>
                    <td height="29" align="right" valign="middle" class="text12">Email:</td>
                    <td align="left"><input name="email" type="email" class="inpt" id="email"style="border:1px solid #DEE1E6;" placeholder="请输入邮箱" required value="<?=$rst["email"]?>"></td>
                  </tr>
                  <tr>
                    <td height="45" align="center">&nbsp;&nbsp;</td>
                    <td height="45" align="left"><input type="image" src="images/tj.png" ></td>
                  </tr>
	    </form>
      </table>
      </fieldset>
	</div><!--结束dk_box-->
	
	</div><!--结束wrap_right-->
	
 </div>
</div><!--结束_main-->
</body>
</html>
