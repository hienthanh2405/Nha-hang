<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:21:04
         compiled from "views\tin_tuc\v_tin_tuc_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2965825eff0e15615-84353049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '768de52009b77c18ea755936d8ffb3d6fb0ae885' => 
    array (
      0 => 'views\\tin_tuc\\v_tin_tuc_right.tpl',
      1 => 1462671516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2965825eff0e15615-84353049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tin_tucs' => 0,
    'tin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5825eff0effc42_48069665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825eff0effc42_48069665')) {function content_5825eff0effc42_48069665($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['tin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tin_tucs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->key => $_smarty_tpl->tpl_vars['tin']->value) {
$_smarty_tpl->tpl_vars['tin']->_loop = true;
?>
    <div class="" style="float:left;width:150px;height:150px;margin: 0 0 0 2px ">
        <div >
            <figure class="img-indent"><a href="javascript:void(0)" onclick="Xemtintuc(<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
)" >
            <img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin']->value->hinh;?>
" alt="" width="140px" height="100px"></a>
            </figure>
        </div>
        <div class="" style="width:140px;height:150px" >
        	<a href="tin_tuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
" ><h5><?php echo $_smarty_tpl->tpl_vars['tin']->value->tieu_de;?>
</h5>  </a>
        </div>
    </div>
<?php } ?>
<div style="clear:both"></div><?php }} ?>
