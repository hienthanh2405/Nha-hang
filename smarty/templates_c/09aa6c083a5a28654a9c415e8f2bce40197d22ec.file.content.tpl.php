<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:02
         compiled from "smarty\templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7527579c95b481cde1-02933366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09aa6c083a5a28654a9c415e8f2bce40197d22ec' => 
    array (
      0 => 'smarty\\templates\\content.tpl',
      1 => 1461205200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7527579c95b481cde1-02933366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95b4824ae4_55950629',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95b4824ae4_55950629')) {function content_579c95b4824ae4_55950629($_smarty_tpl) {?><section id="content">
    <div class="main">
    <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>    
    </div>
</section><?php }} ?>
