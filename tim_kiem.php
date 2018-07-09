<?php
ini_set("display_errors",1);
include("controllers/Smarty_nha_hang.php");
$smarty=new Smarty_nha_hang();
$smarty->assign("title","Tìm Món ăn | Thu Trân");
$view="views/mon_an/v_timkiem.tpl";
$smarty->assign("view",$view);
$smarty->display("mon_an/layout.tpl");
?>