<?php
ini_set("display_errors",1);
include("controllers/Smarty_nha_hang.php");
$smarty=new Smarty_nha_hang();
$smarty->assign("title","Nhà hàng Thu Trân");
$smarty->display("layout.tpl");
?>