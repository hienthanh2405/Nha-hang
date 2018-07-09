<?php
$gtTim=$_POST["gtTim"];
include("models/m_mon_an.php");
$m_mon_an=new M_mon_an();
$mon_ans=$m_mon_an->Tim_mon_an_theo_ten($gtTim);
?>
<table width="940px" border="0">
  <tr class="tieude">
    <td>Tên món</td>
    <td>Mô tả</td>
    <td>Hình</td>
    <td>Đơn giá</td>
  </tr>
  <?php
  foreach($mon_ans as $mon)
  {
  ?>
  <tr class="dong">
    <td><?= $mon->ten_mon ?></td>
    <td><?= $mon->noi_dung_tom_tat ?></td>
    <td><img src="public/images/hinh_mon_an/<?= $mon->hinh ?>" class="HinhTim"  /></td>
    <td><?= number_format($mon->don_gia,0,",",".") ?> đ</td>
  </tr>
  <?php
  }
  ?>
  
</table>