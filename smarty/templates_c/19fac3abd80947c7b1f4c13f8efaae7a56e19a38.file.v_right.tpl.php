<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:04
         compiled from "views\thuc_don\v_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009579c95b8a54449-64754493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19fac3abd80947c7b1f4c13f8efaae7a56e19a38' => 
    array (
      0 => 'views\\thuc_don\\v_right.tpl',
      1 => 1462331890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009579c95b8a54449-64754493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95b8a67cc9_47971832',
  'variables' => 
  array (
    'ct' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95b8a67cc9_47971832')) {function content_579c95b8a67cc9_47971832($_smarty_tpl) {?><h3>Chi tiết thực đơn</h3>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['ct']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['ct']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<div class="ct_thuc_don">
    <img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['ct']->value[$_smarty_tpl->tpl_vars['i']->value]->hinh;?>
" alt="" width="210px" height="125px" align="right">
    <h5 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['ct']->value[$_smarty_tpl->tpl_vars['i']->value]->ten_mon;?>
</h5>
    <?php echo $_smarty_tpl->tpl_vars['ct']->value[$_smarty_tpl->tpl_vars['i']->value]->noi_dung_tom_tat;?>

    <a href="chi_tiet_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['ct']->value[$_smarty_tpl->tpl_vars['i']->value]->ma_mon;?>
" class="button-2" style="height:5px; line-height:5px; border-radius:5px">Xem tiếp</a> 
</div>
<?php }} ?>

<?php }} ?>
