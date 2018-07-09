<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:11
         compiled from "views\mon_an\v_mon_an.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9906579c95bb2395e0-62086953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5ad7765d8c336f85b0e1cdf0eb982b55df8fac' => 
    array (
      0 => 'views\\mon_an\\v_mon_an.tpl',
      1 => 1469879320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9906579c95bb2395e0-62086953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95bb273f75_97216820',
  'variables' => 
  array (
    'tieudeMonan' => 0,
    'mon_ans' => 0,
    'mon' => 0,
    'lst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95bb273f75_97216820')) {function content_579c95bb273f75_97216820($_smarty_tpl) {?><div class="container">
<h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['tieudeMonan']->value;?>
</h3>

    <?php  $_smarty_tpl->tpl_vars['mon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mon_ans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mon']->key => $_smarty_tpl->tpl_vars['mon']->value) {
$_smarty_tpl->tpl_vars['mon']->_loop = true;
?>
    <div class="p4 mon_an">
    <figure>
    <a class="lightbox-image" href="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon']->value->hinh;?>
" data-gal="prettyPhoto[prettyPhoto]">
    <img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon']->value->hinh;?>
" alt="" width="210px" height="125px"></a>
    </figure>
    <h5><a href="chi_tiet_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
"><?php echo $_smarty_tpl->tpl_vars['mon']->value->ten_mon;?>
</a></h5>
    <p class="p1 hidden"><?php echo $_smarty_tpl->tpl_vars['mon']->value->noi_dung_tom_tat;?>
</p>
    <p class="p2">
    	<strong class="color-2">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['mon']->value->don_gia,0,",",".");?>
 đ/đĩa </strong>
    </p>
    <p style="text-align:center">
        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
" value="<?php echo $_smarty_tpl->tpl_vars['mon']->value->don_gia;?>
"/>
        <input type="text" value="1" id="soluong<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
" />&nbsp;
        <a class="button-1" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
" >Mua</a>
    </p>
    </div>
    <?php } ?>
    
    <div style="clear:both; text-align:center"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>            
</div>
<?php }} ?>
