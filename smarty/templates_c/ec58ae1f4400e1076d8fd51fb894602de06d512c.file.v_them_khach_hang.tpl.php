<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 04:01:37
         compiled from "views\khach_hang\v_them_khach_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3469579ca74dbaf4b1-21698842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec58ae1f4400e1076d8fd51fb894602de06d512c' => 
    array (
      0 => 'views\\khach_hang\\v_them_khach_hang.tpl',
      1 => 1400576544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3469579ca74dbaf4b1-21698842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579ca74dbaf4b6_29632087',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579ca74dbaf4b6_29632087')) {function content_579ca74dbaf4b6_29632087($_smarty_tpl) {?><section id="content">
  <div class="main" style="min-height:768px">
    <div class="container">
        <h3 align="center">Vui lòng nhập thông tin khách hàng</h3>
        	<form name="them_khach_hang" action="khach_hang.php?key=dat-hang" method="post">
			<table align="center" width="90%" cellpadding="2px" cellspacing="0">
                
                <tr>
					<td align="center">
                        Tên khách hàng<br />
                        <input type="text" value="" name="ten_khach_hang" style="width:450px; text-align:center"/>
				</tr>
                <tr>
					<td align="center">Email<br /><input type="text" value="" name="email" style="width:450px; text-align:center"/></td>
				</tr>
                <tr>
					<td align="center">Địa chỉ<br /><input type="text" value="" name="dia_chi" style="width:450px; text-align:center"/></td>
				</tr>                
				<tr>
					<td align="center">Điện thoại<br /><input type="text" name="dien_thoai" style="width:450px; text-align:center"/></td>
				</tr>
                
                <tr>
					<td align="center">Ghi chú<br /><textarea name="ghi_chu" cols="55" rows="3"  style="width:450px; text-align:center"></textarea></td>
				</tr> 
                
                <tr>
					<td align="center">Tiền đặt cọc<br /><input type="text" name="tien_dat_coc" value="0" style="width:450px; text-align:center"/></td>
				</tr>
                
                <tr>
					<td align="center">Hình thức thanh toán<br />
                        <input type="radio" name="httt" value="tiền mặt" checked="true"/> Tiền mặt
                        <input type="radio" name="httt" value="chuyển khoản"/> Chuyển khoản
                        <input type="radio" name="httt" value="tín dụng"/> Tín dụng
                    </td>
				</tr>
                
				<tr>
					<td align="center"><input type="submit"  class="button-1" value="Lưu" name="submit"/> 
						<input type="button"  class="button-2"
						onclick="window.location.href = 'gio_hang.php'"
						value="Quay về"/>
					</td>
				</tr>
			</table>
			</form>
    </div>
  </div>
</section><?php }} ?>
