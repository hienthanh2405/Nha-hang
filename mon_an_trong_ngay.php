<?php
ini_set("display_errors",1);
include("controllers/c_mon_an.php");
$c_mon_an=new C_mon_an();
$c_mon_an->Hien_thi_mon_an_trong_ngay();
?>