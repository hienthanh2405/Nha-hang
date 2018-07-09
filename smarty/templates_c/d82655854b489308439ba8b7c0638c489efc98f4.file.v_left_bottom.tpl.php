<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:04
         compiled from "views\thuc_don\v_left_bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28568579c95b8a38eb9-11213404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82655854b489308439ba8b7c0638c489efc98f4' => 
    array (
      0 => 'views\\thuc_don\\v_left_bottom.tpl',
      1 => 1462678522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28568579c95b8a38eb9-11213404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95b8a4c746_12711393',
  'variables' => 
  array (
    'thuc_dons' => 0,
    'td' => 0,
    'cur' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95b8a4c746_12711393')) {function content_579c95b8a4c746_12711393($_smarty_tpl) {?><h3 class="p1">Danh sách Thực đơn</h3>
<?php  $_smarty_tpl->tpl_vars['td'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['td']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thuc_dons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['td']->key => $_smarty_tpl->tpl_vars['td']->value) {
$_smarty_tpl->tpl_vars['td']->_loop = true;
?>
<div class="p2 thuc_don">
    <figure>
        <a href="thuc_don.php?ma_thuc_don=<?php echo $_smarty_tpl->tpl_vars['td']->value->ma_thuc_don;?>
&page=<?php echo $_smarty_tpl->tpl_vars['cur']->value;?>
"><img src="public/images/thuc_don/<?php echo $_smarty_tpl->tpl_vars['td']->value->hinh_thuc_don;?>
" alt="" width="130px" height="100px" ></a>
    </figure>
    <h5><a href="thuc_don.php?ma_thuc_don=<?php echo $_smarty_tpl->tpl_vars['td']->value->ma_thuc_don;?>
&page=<?php echo $_GET['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['td']->value->ten_thuc_don;?>
</a></h5>
    (Giá <?php echo number_format($_smarty_tpl->tpl_vars['td']->value->don_gia,0,",",".");?>
 đ)
</div>
<?php } ?>
<div style="clear:both; text-align:center"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div><?php }} ?>
