<?php
session_start();
include ("Smarty_quan_tri.php");
include ("models/m_tin_tuc.php");
class C_tin_tuc
{
	function Hien_thi_tin_tuc()
	{
			// Models
			$m_tin_tuc=new M_tin_tuc();
			$tin_tuc=$m_tin_tuc->Doc_tin_tuc();
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Hàng");
			$smarty->assign("tieude","Danh sách tin tức");
			$smarty->assign("tin_tuc",$tin_tuc);
			$smarty->assign("view","views/tintuc/v_tintuc.tpl");
			$smarty->display("layout.tpl");	
	
	}
	function Them_tin_tuc()
	{
			// Models
			//ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_tin_tuc=NULL; 
				$tieu_de=$_POST["tieu_de"];
				$tom_tat=$_POST["tom_tat"];
				$chi_tiet=$_POST["chi_tiet"];
				$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:""; 
				$tac_gia=$_POST["tac_gia"];
				$ngay_dang=$_POST["ngay_dang"];
				$ngay_gui=$_POST["ngay_gui"];
				$so_luot_xem=$_POST["so_luot_xem"];
				$m_tin_tuc=new M_tin_tuc();
				$kq=$m_tin_tuc->Them_tin_tuc($ma_tin_tuc, $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
				if($kq)
				{
					if($hinh!="")
					{
						move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/tin_tuc/$hinh");
					}
					header("Location:tintuc.php");	
				}
				
			}
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Hàng");
			$smarty->assign("tieude","Thêm tin tức");
			$smarty->assign("view","views/tintuc/v_Themtintuc.tpl");
			$smarty->display("layout.tpl");	
	
	}
	function Sua_tin_tuc()
	{
			// Models
			if(isset($_GET["ma_tin_tuc"]))
			{
				$ma_tin_tuc=$_GET["ma_tin_tuc"];
				$m_tin_tuc=new M_tin_tuc();
				$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin($ma_tin_tuc);
				// Cập nhật tin tức
				if(isset($_POST["btnCapnhat"]))
				{
					$tieu_de=$_POST["tieu_de"];
					$tom_tat=$_POST["tom_tat"];
					$chi_tiet=$_POST["chi_tiet"];
					$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:$tin_tuc->hinh; 
					$tac_gia=$_POST["tac_gia"];
					$ngay_dang=$_POST["ngay_dang"];
					$ngay_gui=$_POST["ngay_gui"];
					$so_luot_xem=$_POST["so_luot_xem"];
					
					$kq=$m_tin_tuc->Sua_tin_tuc($tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem,$ma_tin_tuc);
					if($kq)
					{
						if($_FILES["f_hinh"]["error"]==0)
						{
							move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/tin_tuc/$hinh");
						}
						header("Location:tintuc.php");	
					}
					
				}
				// End Cập nhật tin tức
				
			
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Nhà Hàng");
			$smarty->assign("tieude","Sửa tin tức");
			$smarty->assign("tin_tuc",$tin_tuc);
			$smarty->assign("view","views/tintuc/v_Suatintuc.tpl");
			$smarty->display("layout.tpl");	
			}
	
	}
	function Xoa_tin_tuc()
	{
		// Models
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
			$m_tin_tuc=new M_tin_tuc();
			
			$kq=$m_tin_tuc->Xoa_tin_tuc($ma_tin_tuc);
			if($kq)
			{
				header("Location:tintuc.php");	
			}
			
		}
		
			
	}
	
		
}
?>