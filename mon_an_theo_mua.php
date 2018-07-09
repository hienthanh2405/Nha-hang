<?php
ini_set("display_errors",1);
include("controllers/Smarty_nha_hang.php");
$smarty=new Smarty_nha_hang();
$smarty->assign("title","Món ăn theo mùa | Thu Trân");

$view="views/mon_an/v_mon_an_theo_mua.tpl";
$smarty->assign("view",$view);
$smarty->display("mon_an/layout.tpl");
?>