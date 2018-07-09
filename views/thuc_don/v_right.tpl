<h3>Chi tiết thực đơn</h3>
{for $i=0 to $ct|@count-1}
<div class="ct_thuc_don">
    <img src="public/images/hinh_mon_an/{$ct[$i]->hinh}" alt="" width="210px" height="125px" align="right">
    <h5 class="prev-indent-bot">{$ct[$i]->ten_mon}</h5>
    {$ct[$i]->noi_dung_tom_tat}
    <a href="chi_tiet_mon_an.php?ma_mon={$ct[$i]->ma_mon}" class="button-2" style="height:5px; line-height:5px; border-radius:5px">Xem tiếp</a> 
</div>
{/for}

