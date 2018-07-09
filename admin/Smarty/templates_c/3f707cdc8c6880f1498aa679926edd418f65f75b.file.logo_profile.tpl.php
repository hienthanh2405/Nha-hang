<?php /* Smarty version Smarty-3.1.14, created on 2016-11-17 13:50:33
         compiled from "Smarty\templates\logo_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29555600bd87ca4fb7-73329189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f707cdc8c6880f1498aa679926edd418f65f75b' => 
    array (
      0 => 'Smarty\\templates\\logo_profile.tpl',
      1 => 1461810686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29555600bd87ca4fb7-73329189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5600bd87cb0b32_12388263',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600bd87cb0b32_12388263')) {function content_5600bd87cb0b32_12388263($_smarty_tpl) {?><a href="quantri.php"><img id="logo" src="public/layout/resources/images/alphatek.png" alt="Simpla Admin logo" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo mb_strtoupper($_SESSION['fullname'], 'UTF-8');?>

</a><br />
  <br />
  <a href="../" title="View the Site" target="_blank">View the Site</a> | 
  <a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div>
<?php }} ?>