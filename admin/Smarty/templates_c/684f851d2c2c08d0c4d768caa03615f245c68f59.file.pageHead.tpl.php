<?php /* Smarty version Smarty-3.1.14, created on 2016-11-17 13:50:34
         compiled from "Smarty\templates\pageHead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258945600bd87ccff49-31112686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684f851d2c2c08d0c4d768caa03615f245c68f59' => 
    array (
      0 => 'Smarty\\templates\\pageHead.tpl',
      1 => 1461812414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258945600bd87ccff49-31112686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5600bd87cd3dc0_02414464',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600bd87cd3dc0_02414464')) {function content_5600bd87cd3dc0_02414464($_smarty_tpl) {?> <h2>Quản trị Nhà Hàng</h2>
			<p id="page-intro" style="color:red">Chào <?php echo mb_strtoupper($_SESSION['fullname'], 'UTF-8');?>
 - <?php echo $_SESSION['ngay'];?>
 </p>
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Write an Article
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					New Page
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="public/layout/resources/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<?php }} ?>