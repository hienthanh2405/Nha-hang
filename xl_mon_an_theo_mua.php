<?php
$mua=$_POST["mua"];
// Đọc tập tin
$path="public/images/mon_an_theo_mua/mon_an_theo_mua.txt";
$f=fopen($path,"r") or die("Error file");
// Duyệt lấy nội dung
$mon_ans=array();
while(!feof($f))
{
	$mon_ans[]=fgets($f);
}
fclose($f);
?>
<table width="940px" border="0">
  <tr class="tieude">
    <td>Tên món</td>
    <td>Mô tả</td>
    <td>Hình</td>
    <td>Đơn giá</td>
  </tr>
  <?php
  foreach($mon_ans as $item)
  {
	  $mon=explode("|",$item);
	  if($mua==trim($mon[5]))
	  {
  ?>
  <tr class="dong">
    <td><?= $mon[1] ?></td>
    <td><?= $mon[3] ?></td>
    <td><img src="public/images/mon_an_theo_mua/<?= $mua ?>/<?= $mon[4] ?>" class="HinhTim"  /></td>
    <td><?= number_format($mon[2],0,",",".") ?> đ</td>
  </tr>
  <?php
	  }
  }
  ?>
  
</table>