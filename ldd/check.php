<?php
session_start();
include("inc/conn.php");
include("inc/func.php");
$userid=$_POST["userid"];
$password=$_POST["password"];
$sql=mysql_query("select * from hy where userid='$userid' and password='$password'");
$num=mysql_num_rows($sql);
if($num==0)
{
echo "<script>alert('��������ȷ���ʺ����룡');window.location.href='index.php'</script>";
exit;
}
else
{
$rs=mysql_fetch_assoc($sql);
$_SESSION["userid"]=$rs["userid"];
$_SESSION["hy_id"]=$rs["hy_id"];
mysql_free_result($sql);
//�ж��Ƿ�Ӷ�������ҳ�淢������
if(!isset($_POST["state"]))
{
echo "<script>alert('���Ѿ��ɹ���½��');window.location.href='index.php'</script>";
}
else
{
echo "<script>alert('���Ѿ��ɹ���½��');window.location.href='orderlogin.php'</script>";
}

}
mysql_free_result($sql);
?>