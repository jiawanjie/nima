<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!D<DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset = gb2312" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>

<!--¿ªÊ¼ad-->
<div id="content">
   <div class="reg_box">
	  
	    <br/><br/><br/>
	   <fieldset style="width:420px;border:1px solid #DEE1E6;text-align:left;COLOR:black;FONT-SIZE:  
12px;font-family: Verdana;padding:5px;">
  <legend>×¢²á</legend>
	    <table width="416" height="300" border="0" cellpadding="0" cellspacing="0" class="regtext">
		 <form action="save_hy.php?act=add" method="post" name="form10" id="form10">
                  <tr>
                    <td width="23%" height="34" align="right" valign="middle" class="text12">ÕËºÅ</td>
                    <td width="77%" align="left"><span class="text12">
                      <input name="userid" type="text" id="userid" maxlength="35" class="reg_inpt"  placeholder="ÇëÊäÈëÕËºÅ" required>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="45" align="right" valign="middle" class="text12">ÃÜÂë</td>
                    <td align="left"><span class="text12">
                      <input name="password" type="password" id="password"  maxlength="35" class="reg_inpt" placeholder="ÇëÊäÈëÃÜÂë" required>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="36" align="right" valign="middle" class="text12">ÐÕÃû</td>
                    <td align="left"><span class="text12">
                      <input name="name" type="text" id="name" maxlength="35" class="reg_inpt" placeholder="ÇëÊäÈëÐÕÃû" required>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="35" align="right" valign="middle" class="text12">ÐÔ±ð</td>
                    <td align="left"><span class="text12">
                      <input type="radio" name="sex" value="ÄÐ" />
                     ÄÐ
                <input type="radio" name="sex" value="Å®" />
                    Å®</span></td>
                  </tr>
                  <tr>
                    <td height="45" align="right" valign="middle" class="text12">E--mail:</td>
                    <td align="left"><span class="text12">
                      <input name="email" type="email" id="email" maxlength="35" class="reg_inpt" placeholder="ÇëÊäÈëÓÊÏä" required>
                    </span></td>
                  </tr>
           
                  <tr>
                    <td height="60" align="center">&nbsp;&nbsp;</td>
   <td height="60" align="left"><input type="image" img src="images/×¢²á.png"></td>
                  </tr>
	 </form>
    </table>
	  </fieldset>
		<!--½áÊø-->
	
	 </div>
</div>
<!--½áÊømain-->


</body>
</html>
