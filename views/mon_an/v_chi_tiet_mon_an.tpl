<div class="container">
    <h3 style="color:#060">{$mon_an->ten_mon}</h3>
    <img src="public/images/hinh_mon_an/{$mon_an->hinh}" alt="" align="left" width="400px" height="250px" style="margin-right:10px">
    <h5>{$mon_an->noi_dung_tom_tat}</h5>
    <p style="font-style:italic">{$mon_an->noi_dung_chi_tiet}</p>
    <p  class="p2"><strong class="color-2">Giá: {number_format($mon_an->don_gia,0,",",".")} đ/đĩa </br> Số lượng:</strong>&nbsp;
    <input type="hidden" id="dongia{$mon_an->ma_mon}" value="{$mon_an->don_gia}"/>
    <input type="text" value="1" id="soluong{$mon_an->ma_mon}" />&nbsp;
    <a class="button-1" href="javascript:void(0)" id="{$mon_an->ma_mon}" >Mua</a>
    </p>
    <div style="clear:both; margin-bottom:50px "></div>
    <hr color="#999999" />
    {include file="views/mon_an/v_mon_an.tpl"}
     <hr color="#999999" />
</div>

