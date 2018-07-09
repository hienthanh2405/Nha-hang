<?php
ini_set("display_errors",1);
include("controllers/c_thuc_don.php");
$c_thuc_don=new C_thuc_don();
$c_thuc_don->Hien_thi_thuc_don();
?>