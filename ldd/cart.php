<? 
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('���ȵ�¼�ٽ��в�����'); window.location.href='index.php';</script>";
  exit;
}?>
<? require"inc/inc_cart.php"; ?>
<?
$id=$_GET["id"];
$act=$_GET["act"];
//�����Ƿ�������session����
 if(!isset($_SESSION["cart_id"]))
	    {
         init($id,1);
        }
     else
      {
	     if(!exist_item($id))//�ж�Ԫ���Ƿ��Ѿ��ڹ��ﳵ��
         {
		 add_item($id,1);
		 } 
      }


//����Ԫ������
if($act=="update")
{
  /* $num=$_POST["num"]; */
   $pos=$_POST["pos"];
   update_item($pos,$num); 
}
//ɾ��Ԫ�ز���
if($act=="del")
 {
  $pos=$_GET["pos"];
   del_item($pos);
  }
//����������������
if($act=="remove")
 {
  remove_arry();
  }
  echo "<script>window.location.href='basket.php';</script>";//������ϣ�������ʾ���ﳵҳ��
?>