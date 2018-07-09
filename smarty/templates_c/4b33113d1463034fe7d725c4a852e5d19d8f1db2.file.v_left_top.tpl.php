<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:04
         compiled from "views\thuc_don\v_left_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13691579c95b8a217b4-06375958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b33113d1463034fe7d725c4a852e5d19d8f1db2' => 
    array (
      0 => 'views\\thuc_don\\v_left_top.tpl',
      1 => 1469879306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13691579c95b8a217b4-06375958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95b8a311b3_86281420',
  'variables' => 
  array (
    'thuc_don' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95b8a311b3_86281420')) {function content_579c95b8a311b3_86281420($_smarty_tpl) {?><div class="img-indent-bot">
    <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ten_thuc_don;?>
</h3>
    <div class="wrapper img-indent-bot">
        <figure class="img-indent"><img src="public/images/thuc_don/<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->hinh_thuc_don;?>
" alt="" width="210px" height="125px"></figure>
        <div class="extra-wrap">
            <h5><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->noi_dung;?>
 </h5>
            <p>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['thuc_don']->value->don_gia,0,".",",");?>
 đ</p>
            
            <input type="hidden" id="dongiat<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
" value="<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->don_gia;?>
"/>
            <input type="text" value="1" id="soluongt<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
" />
            &nbsp;<a class="button-1" href="javascript:void(0)" id="t<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
" >Mua</a>
        </div>
    </div>
    
</div>
<?php }} ?>
