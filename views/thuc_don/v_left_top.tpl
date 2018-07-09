<div class="img-indent-bot">
    <h3 class="prev-indent-bot">{$thuc_don->ten_thuc_don}</h3>
    <div class="wrapper img-indent-bot">
        <figure class="img-indent"><img src="public/images/thuc_don/{$thuc_don->hinh_thuc_don}" alt="" width="210px" height="125px"></figure>
        <div class="extra-wrap">
            <h5>{$thuc_don->noi_dung} </h5>
            <p>Giá: {number_format($thuc_don->don_gia,0,".",",")} đ</p>
            
            <input type="hidden" id="dongiat{$thuc_don->ma_thuc_don}" value="{$thuc_don->don_gia}"/>
            <input type="text" value="1" id="soluongt{$thuc_don->ma_thuc_don}" />
            &nbsp;<a class="button-1" href="javascript:void(0)" id="t{$thuc_don->ma_thuc_don}" >Mua</a>
        </div>
    </div>
    
</div>
