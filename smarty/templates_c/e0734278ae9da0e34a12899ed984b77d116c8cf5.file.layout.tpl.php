<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:02
         compiled from "smarty\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26115579c95d3348a42-77849212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0734278ae9da0e34a12899ed984b77d116c8cf5' => 
    array (
      0 => 'smarty\\templates\\layout.tpl',
      1 => 1461208372,
      2 => 'file',
    ),
    '36fbe3939497ac5a91a56553a460db140e5e6f2d' => 
    array (
      0 => 'smarty\\templates\\head.tpl',
      1 => 1461206114,
      2 => 'file',
    ),
    'd0fe8af0e9dd90d0bfe6e5c7e5639bb029cc64f6' => 
    array (
      0 => 'smarty\\templates\\nav.tpl',
      1 => 1461808096,
      2 => 'file',
    ),
    'd83077e51f0c7f8703094d8c498c56a0adc8e871' => 
    array (
      0 => 'smarty\\templates\\slider.tpl',
      1 => 1461205020,
      2 => 'file',
    ),
    '6652bf75f43eb8665356b88e8a0e2401680ee1b9' => 
    array (
      0 => 'smarty\\templates\\header.tpl',
      1 => 1461208392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26115579c95d3348a42-77849212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_579c95d33ae363_79373119',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579c95d33ae363_79373119')) {function content_579c95d33ae363_79373119($_smarty_tpl) {?><?php /*  Call merged included template "head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26115579c95d3348a42-77849212');
content_5825efb21a0196_56021825($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "head.tpl" */?>
<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26115579c95d3348a42-77849212');
content_5825efb21dab23_11990092($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:02
         compiled from "smarty\templates\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5825efb21a0196_56021825')) {function content_5825efb21a0196_56021825($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/layout/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/layout.css" type="text/css" media="screen"> 
    <script src="public/layout/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="public/layout/js/cufon-yui.js" type="text/javascript"></script>
    <script src="public/layout/js/cufon-replace.js" type="text/javascript"></script> 
    <script src="public/layout/js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="public/layout/js/FF-cash.js" type="text/javascript"></script>
    <script src="public/layout/js/tms-0.3.js" type="text/javascript"></script>
    <script src="public/layout/js/tms_presets.js" type="text/javascript"></script>
    <script src="public/layout/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="public/layout/js/jquery.equalheights.js" type="text/javascript"></script>    
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="public/layout/js/html5.js"></script>
	<![endif]-->
</head>
<body id="page1"><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:02
         compiled from "smarty\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5825efb21dab23_11990092')) {function content_5825efb21dab23_11990092($_smarty_tpl) {?><header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="."><img src="public/layout/images/Alphatek.png" /></a></h1>
                    <?php /*  Call merged included template "nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26115579c95d3348a42-77849212');
content_5825efb2253cb2_43982066($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "nav.tpl" */?>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2><img src="public/layout/images/slogan.png" /></h2>
                    <?php /*  Call merged included template "slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '26115579c95d3348a42-77849212');
content_5825efb2286946_59135075($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "slider.tpl" */?>
                </div>
            </div>
        </div>
    </header><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:02
         compiled from "smarty\templates\nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5825efb2253cb2_43982066')) {function content_5825efb2253cb2_43982066($_smarty_tpl) {?><script>
$(function() {
	 
	pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	var vt=window.location.href.lastIndexOf("?")-1;
	if(vt>0)
	{
		pgurl = window.location.href.substr(1,vt);
		pgurl =pgurl.substr(pgurl.lastIndexOf("/")+1);	
	}	
	
	 if (pgurl=="") pgurl="." ;
     $("#nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});
</script>

<nav id="nav">
    <ul class="menu">
        <li><a href="thuc_don.php">Thực đơn</a></li>
        <li><a href="mon_an.php">Món ăn </a></li>
        <li><a href="mon_an_trong_ngay.php">Món ăn trong ngày </a></li>
        <li><a href="mon_an_theo_mua.php">Món ăn theo mùa</a></li>
        <li><a href="tim_kiem.php">Tìm kiếm </a></li>
        <li><a href="tin_tuc.php">Tin tức </a></li>
        <li><a href="gio_hang.php">Giỏ hàng </a></li>
    </ul>
</nav><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:02
         compiled from "smarty\templates\slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5825efb2286946_59135075')) {function content_5825efb2286946_59135075($_smarty_tpl) {?><div class="slider-wrapper">
    <div class="slider">
        <ul class="items">
            <li>
                <img src="public/layout/images/slider-img1.jpg" alt="" />
            </li>
            <li>
                <img src="public/layout/images/slider-img2.jpg" alt="" />
            </li>
            <li>
                <img src="public/layout/images/slider-img3.jpg" alt="" />
            </li>
        </ul>
    </div>
</div><?php }} ?>
