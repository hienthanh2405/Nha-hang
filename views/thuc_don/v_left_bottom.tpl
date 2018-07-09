<h3 class="p1">Danh sách Thực đơn</h3>
{foreach $thuc_dons as $td}
<div class="p2 thuc_don">
    <figure>
        <a href="thuc_don.php?ma_thuc_don={$td->ma_thuc_don}&page={$cur}"><img src="public/images/thuc_don/{$td->hinh_thuc_don}" alt="" width="130px" height="100px" ></a>
    </figure>
    <h5><a href="thuc_don.php?ma_thuc_don={$td->ma_thuc_don}&page={$smarty.get.page}">{$td->ten_thuc_don}</a></h5>
    (Giá {number_format($td->don_gia,0,",",".")} đ)
</div>
{/foreach}
<div style="clear:both; text-align:center">{$lst}</div>