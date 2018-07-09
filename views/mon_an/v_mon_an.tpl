<div class="container">
<h3 class="prev-indent-bot">{$tieudeMonan}</h3>

    {foreach $mon_ans as $mon}
    <div class="p4 mon_an">
    <figure>
    <a class="lightbox-image" href="public/images/hinh_mon_an/{$mon->hinh}" data-gal="prettyPhoto[prettyPhoto]">
    <img src="public/images/hinh_mon_an/{$mon->hinh}" alt="" width="210px" height="125px"></a>
    </figure>
    <h5><a href="chi_tiet_mon_an.php?ma_mon={$mon->ma_mon}">{$mon->ten_mon}</a></h5>
    <p class="p1 hidden">{$mon->noi_dung_tom_tat}</p>
    <p class="p2">
    	<strong class="color-2">Giá: {number_format($mon->don_gia,0,",",".")} đ/đĩa </strong>
    </p>
    <p style="text-align:center">
        <input type="hidden" id="dongia{$mon->ma_mon}" value="{$mon->don_gia}"/>
        <input type="text" value="1" id="soluong{$mon->ma_mon}" />&nbsp;
        <a class="button-1" href="javascript:void(0)" id="{$mon->ma_mon}" >Mua</a>
    </p>
    </div>
    {/foreach}
    
    <div style="clear:both; text-align:center">{$lst}</div>            
</div>
