<?php
ini_set("display_errors",1);
include("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();
// Cập nhật giỏ hàng
if(isset($_POST["btnCapnhat"]))
{
	
	//Xóa mặt hàng trong giỏ hàng
    $giohang=$c_gio_hang->layGioHang();
	foreach($giohang as $key=>$value)
    {
        if(isset($_POST[$key]))
        {
            $c_gio_hang->xoaMatHang($key,$_POST[$key]);
        }
    } 
    
	//Cập nhật lại giỏ hàng
    $giohang=$c_gio_hang->layGioHang();
    if($giohang)
    {
        foreach($giohang as $key=>$value)
        {
            $soluong_moi=$_POST["soluong".$key];
            if($soluong_moi!=$value)
            {                        
                $c_gio_hang->capNhatGioHang($key,$soluong_moi,$_POST["dongia".$key]);
            }
        }
    }		
}
$c_gio_hang->xem_gio_hang();
?>