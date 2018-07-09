<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:21:13
         compiled from "views\gio_hang\v_gio_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5908579c95b482c7e8-12035333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf22b497d3dd38e808ab6e2941be1145def4a8a' => 
    array (
      0 => 'views\\gio_hang\\v_gio_hang.tpl',
      1 => 1469881436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5908579c95b482c7e8-12035333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95b48826f5_68977221',
  'variables' => 
  array (
    'ds_mon_an' => 0,
    'ds_thuc_don' => 0,
    'item' => 0,
    'tien_mon_an' => 0,
    'tien_thuc_don' => 0,
    'tong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95b48826f5_68977221')) {function content_579c95b48826f5_68977221($_smarty_tpl) {?><section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)||isset($_smarty_tpl->tpl_vars['ds_thuc_don']->value)) {?>
        <div><?php $_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_variable(0, null, 0);?>
        <form action="gio_hang.php" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)) {?>       
        <h3 align="center">Danh sách món ăn bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0">
            <tr><td width="100px">Mã món</td><td>Tên món</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_mon_an']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ma_mon;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_mon;?>

                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_mon;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_mon;?>
"/>
                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->don_gia);?>

                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);?>
đ 
                    <?php $_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_variable($_smarty_tpl->tpl_vars['tien_mon_an']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia, null, 0);?>
                </td>
                <td align="center">
                    <input type="checkbox" name="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value->ma_mon;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
"/>
                </td>
            </tr>
        <?php } ?>
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền món ăn:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_mon_an']->value);?>
đ</td></tr>
        </table> 
    <?php }?> 
    
    <?php if (isset($_smarty_tpl->tpl_vars['ds_thuc_don']->value)) {?><?php $_smarty_tpl->tpl_vars['tien_thuc_don'] = new Smarty_variable(0, null, 0);?>
        <h3 align="center">Danh sách thực đơn bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0">
            <tr><td width="100px">Mã thực đơn</td><td>Tên thực đơn</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_thuc_don']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_thuc_don;?>

                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluongt<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
" name="dongiat<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>
"/>
                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->don_gia);?>

                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);?>
đ
                    <?php $_smarty_tpl->tpl_vars['tien_thuc_don'] = new Smarty_variable($_smarty_tpl->tpl_vars['tien_thuc_don']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia, null, 0);?>
                </td>
                <td align="center">
                    <input type="checkbox" name="t<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
"/>
                </td>
            </tr>
        <?php } ?>
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền thực đơn:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_thuc_don']->value);?>
đ</td></tr>
            <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)) {?>
                <tr bgcolor="#FEC8A7"><td colspan="4" align="right">Tiền hóa đơn:</td><td align="right" style="color:red">
                <?php $_smarty_tpl->tpl_vars['tong'] = new Smarty_variable($_smarty_tpl->tpl_vars['tien_thuc_don']->value+$_smarty_tpl->tpl_vars['tien_mon_an']->value, null, 0);?>
                <?php echo number_format($_smarty_tpl->tpl_vars['tong']->value);?>
đ</td></tr>
            <?php }?>
        </table> 
    <?php }?> 
    <p align="center">
    
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2" />
    
    <input type="button"  class="button-2"
						onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
						value="Đặt hàng" class="art-button" />
                        
    <input type="button"  class="button-1" id="btnxoa" value="Xóa giỏ hàng" class="art-button" />
    </p>
    </form>
    </div>
    <?php } else { ?>
        <h3 align="center">Bạn chưa chọn món ăn nào chọn giỏ</h3> 
    <?php }?>
    </div>
  </div>
</section><?php }} ?>
