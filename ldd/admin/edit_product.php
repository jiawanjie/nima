<?
session_start();
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
<div class="bigTitle2">�����Ʒ</div>
<?
  $id=$_GET["id"];
	$query=mysql_query("select * from product where product_id='$id'");
	$rs=mysql_fetch_assoc($query);

  ?>
<form action="save_product.php?act=edit" method="post" name="form10">
<input type="hidden" name="id" value="<?=$id?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="loginForm">
      <tr>
        <th>����:</th>
        <td><input name="name" type="text" id="name" value="<?=$rs["name"]?>" required placeholder="�������Ʒ����"></td>
      </tr>
      <tr>
        <th>���ࣺ</th>
        <td><span class="text12">
          <select name="category">
            <?
$cx=mysql_query("select * from category");
				while($rst=mysql_fetch_array($cx))
				{
				?>
            <option  value="<?=$rst["c_id"]?>" <? if($rst["c_id"]==$rs["c_id"]) echo "selected"?>>
            <?=$rst["category"]?>
            </option>
            <?
			  }
			mysql_free_result($cx);
			?>
          </select>
        </span></td>
      </tr>
      <tr>
        <th width="150">�۸�</th>
<td><input name="price" type="text" id="price" size="12" value="<?=$rs["price"]?>" required placeholder="������۸�">
  Ԫ</td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><script charset="utf-8" src="kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterBlur : function() {
this.sync();
K.ctrl(document, 13, function() {
K('form[name=form10]')[0].submit();
});
K.ctrl(this.edit.doc, 13, function() {
K('form[name=form10]')[0].submit();
});
}
			});
			prettyPrint();
		});
	</script>
     <textarea name="content" display="none" style="width:500px;height:300px;"><?=$rs["content"]?></textarea>      </td>
      </tr>
      <tr>
        <th>ͼƬ��ַ��</th>
 <td><input name="pic" type="text" id="pic" value="<?=$rs["pic"]?>" required placeholder="���ϴ�ͼƬ"></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" value="�ύ" class="submit"/></td>
      </tr>
    </table>
  </form>




  </div>

</body>
</html>