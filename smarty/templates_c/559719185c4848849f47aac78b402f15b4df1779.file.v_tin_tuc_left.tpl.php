<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:21:04
         compiled from "views\tin_tuc\v_tin_tuc_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213235825eff0d3e857-64313136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '559719185c4848849f47aac78b402f15b4df1779' => 
    array (
      0 => 'views\\tin_tuc\\v_tin_tuc_left.tpl',
      1 => 1462674468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213235825eff0d3e857-64313136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tin_tuc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5825eff0e09a86_75624383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825eff0e09a86_75624383')) {function content_5825eff0e09a86_75624383($_smarty_tpl) {?><h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tieu_de;?>
</h3>
<div class="wrapper img-indent-bot" style="float:left" >
    <figure class="img-indent"  >
        <img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->hinh;?>
" alt=""  />
    </figure>
    <div>
        <h5><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tom_tat;?>
</h5>
        <div style="font-style:italic">
        <?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->chi_tiet;?>

        </div> 
    </div>

</div><?php }} ?>
