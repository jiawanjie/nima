<?
include("../inc/conn.php");
include("../inc/func.php");
$id=$_POST["id"];
$memo=$_POST["memo"];
$content=$_POST["content"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET['act'];
//编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$sql="update about set memo='$memo',content='$content' where about_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='body.php';</script>";
}

?>