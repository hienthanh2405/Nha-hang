<?php /* Smarty version Smarty-3.1.14, created on 2016-11-17 13:50:34
         compiled from "Smarty\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298005600bd87cb8832-24707734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1e8504ca6dc69671c973eed969f8559d02a9a1' => 
    array (
      0 => 'Smarty\\templates\\nav.tpl',
      1 => 1418789586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298005600bd87cb8832-24707734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5600bd87cbc6b5_49922394',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600bd87cbc6b5_49922394')) {function content_5600bd87cbc6b5_49922394($_smarty_tpl) {?><script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="quantri.php" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  
  <li>
  <a href="#" class="nav-top-item" id="tintuc"> Tin tức </a>
    <ul>
      <li><a href="tintuc.php" title="tintuc">Danh sách tin tức</a></li>
      <li><a href="themtintuc.php" title="tintuc">Thêm tin tức</a></li>
    </ul>
  </li>
  <li> 
  <a href="#" class="nav-top-item" id="loaimon"> Loại món ăn </a>
    <ul>
      <li><a href="loaimonan.php" title="loaimon">Danh sách loại món ăn</a></li>
      <li><a href="themloaimonan.php" title="loaimon" >Thêm loại món ăn</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="monan"> Món ăn </a>
    <ul>
      <li><a href="monan.php" title="monan">Danh sách món ăn</a></li>
      <li><a href="themmonan.php" title="monan">Thêm món ăn</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav --><?php }} ?>