<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <div class="container">
    {if isset($ds_mon_an) || isset($ds_thuc_don)}
        <div>{assign var=tien_mon_an value=0}
        <form action="gio_hang.php" method="post">
    {if isset($ds_mon_an)}       
        <h3 align="center">Danh sách món ăn bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0">
            <tr><td width="100px">Mã món</td><td>Tên món</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        {foreach $ds_mon_an as $item}
            <tr>
                <td>
                    {$item->ma_mon}
                </td>
                <td>
                    {$item->ten_mon}
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluong{$item->ma_mon}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{$item->don_gia}" name="dongia{$item->ma_mon}"/>
                </td>
                <td align="right">
                    {number_format($item->don_gia)}
                </td>
                <td align="right">
                    {number_format($item->so_luong*$item->don_gia)}đ 
                    {$tien_mon_an=$tien_mon_an+$item->so_luong*$item->don_gia}
                </td>
                <td align="center">
                    <input type="checkbox" name="{{$item->ma_mon}}" value="{$item->don_gia}"/>
                </td>
            </tr>
        {/foreach}
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền món ăn:</td><td align="right">{number_format($tien_mon_an)}đ</td></tr>
        </table> 
    {/if} 
    
    {if isset($ds_thuc_don)}{assign var=tien_thuc_don value=0}
        <h3 align="center">Danh sách thực đơn bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0">
            <tr><td width="100px">Mã thực đơn</td><td>Tên thực đơn</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        {foreach $ds_thuc_don as $item}
            <tr>
                <td>
                    {$item->ma_thuc_don}
                </td>
                <td>
                    {$item->ten_thuc_don}
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluongt{$item->ma_thuc_don}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{$item->don_gia}" name="dongiat{$item->ma_thuc_don}"/>
                </td>
                <td align="right">
                    {number_format($item->don_gia)}
                </td>
                <td align="right">
                    {number_format($item->so_luong*$item->don_gia)}đ
                    {$tien_thuc_don=$tien_thuc_don+$item->so_luong*$item->don_gia}
                </td>
                <td align="center">
                    <input type="checkbox" name="t{{$item->ma_thuc_don}}" value="{$item->don_gia}"/>
                </td>
            </tr>
        {/foreach}
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền thực đơn:</td><td align="right">{number_format($tien_thuc_don)}đ</td></tr>
            {if isset($ds_mon_an)}
                <tr bgcolor="#FEC8A7"><td colspan="4" align="right">Tiền hóa đơn:</td><td align="right" style="color:red">
                {$tong=$tien_thuc_don + $tien_mon_an}
                {number_format($tong)}đ</td></tr>
            {/if}
        </table> 
    {/if} 
    <p align="center">
    
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2" />
    
    <input type="button"  class="button-2"
						onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
						value="Đặt hàng" class="art-button" />
                        
    <input type="button"  class="button-1" id="btnxoa" value="Xóa giỏ hàng" class="art-button" />
    </p>
    </form>
    </div>
    {else}
        <h3 align="center">Bạn chưa chọn món ăn nào chọn giỏ</h3> 
    {/if}
    </div>
  </div>
</section>