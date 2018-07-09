<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:21:28
         compiled from "views\mon_an\v_chi_tiet_mon_an.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158865825f008a737e6-39037315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39539d15b84548d24b985cf243b4482c694b9033' => 
    array (
      0 => 'views\\mon_an\\v_chi_tiet_mon_an.tpl',
      1 => 1469879316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158865825f008a737e6-39037315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mon_an' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5825f008c0dac5_69255327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825f008c0dac5_69255327')) {function content_5825f008c0dac5_69255327($_smarty_tpl) {?><div class="container">
    <h3 style="color:#060"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ten_mon;?>
</h3>
    <img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->hinh;?>
" alt="" align="left" width="400px" height="250px" style="margin-right:10px">
    <h5><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_tom_tat;?>
</h5>
    <p style="font-style:italic"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_chi_tiet;?>
</p>
    <p  class="p2"><strong class="color-2">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['mon_an']->value->don_gia,0,",",".");?>
 đ/đĩa </br> Số lượng:</strong>&nbsp;
    <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->don_gia;?>
"/>
    <input type="text" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
" />&nbsp;
    <a class="button-1" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
" >Mua</a>
    </p>
    <div style="clear:both; margin-bottom:50px "></div>
    <hr color="#999999" />
    <?php echo $_smarty_tpl->getSubTemplate ("views/mon_an/v_mon_an.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <hr color="#999999" />
</div>

<?php }} ?>
