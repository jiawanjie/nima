<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>��¼</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
<div id="content">
   <div class="reg_box">
	  
	    <br/><br/><br/>
	  <fieldset style="width:420px;border:1px solid #eeeeee;text-align:left;color:black;font-size:  
12px;padding:5px;">
  <legend>��¼</legend>
	    <table width="416" height="139" border="0" cellpadding="0" cellspacing="0">
		 <form action="check.php" method="post" name="form10" id="form10">
                  <tr>
                    <td width="23%" height="34" align="right" valign="middle" color="black">�ʺţ�</td>
                    <td width="77%" align="left"><span class="text12">
                      <input name="userid" type="text" id="userid" maxlength="35" class="reg_inpt"  placeholder="�������˺�" required>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="45" align="right" valign="middle" class="text12">���룺</td>
                    <td align="left" >
                      <input  name="password" type="password" id="password"  maxlength="40" class="reg_inpt" placeholder="����������" required>
               </td>
                  </tr>
                  <tr>
                    <td height="60" align="center">&nbsp;&nbsp;</td>
                   <td height="60" align="left">
				   <input type="image" img src="images/denglu.png">
				   </td>
                  </tr>
	 </form>
    </table>
	  </fieldset>
		<!--ѭ������-->
	
	 </div>
</div>
<!--����main-->

</body>
</html>
