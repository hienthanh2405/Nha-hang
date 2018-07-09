<?php
class C_mon_an
{
	public function Hien_thi_chi_tiet_mon_an()
	{
		// Model
		$ma_mon=$_GET["ma_mon"];
		include("models/m_mon_an.php");
		$m_mon_an=new M_mon_an();
		$mon_an=$m_mon_an->Doc_mon_an_theo_ma_mon($ma_mon);
		// Món ăn cùng loại
		$ma_loai=$mon_an->ma_loai;
		$mon_ans=$m_mon_an->Doc_mon_an_cung_loai($ma_loai,$ma_mon);
		// Phân trang
		include("Pager.php");
		$p=new pager();
		
		$limit=8;
		$count=count($mon_ans);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$mon_ans=$m_mon_an->Doc_mon_an_cung_loai($ma_loai,$ma_mon,$vt,$limit);
		// Kết thúc Phân trang
		//echo $mon_ans->ten_mon;
		
		
		// View
		include("controllers/Smarty_nha_hang.php");
		$smarty=new Smarty_nha_hang();
		
		$smarty->assign("mon_an",$mon_an);
		$smarty->assign("mon_ans",$mon_ans);
		$smarty->assign("lst",$lst);
		
		$smarty->assign("title","Chi tiết Món ăn | Thu Trân");
		$smarty->assign("tieudeMonan","Món ăn cùng danh mục");
		$view="views/mon_an/v_chi_tiet_mon_an.tpl";
		$smarty->assign("view",$view);
		$smarty->display("mon_an/layout.tpl");
		
	}
	public function Hien_thi_mon_an()
	{
		// Model
		include("models/m_mon_an.php");
		$m_mon_an=new M_mon_an();
		$mon_ans=$m_mon_an->Doc_mon_an();
		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($mon_ans);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$mon_ans=$m_mon_an->Doc_mon_an($vt,$limit);
		// Kết thúc Phân trang
		// View
		include("controllers/Smarty_nha_hang.php");
		$smarty=new Smarty_nha_hang();
		
		$smarty->assign("mon_ans",$mon_ans);
		$smarty->assign("lst",$lst);
		
		$smarty->assign("title","Món ăn | Thu Trân");
		$smarty->assign("tieudeMonan","Danh sách Món ăn");
		$view="views/mon_an/v_mon_an.tpl";
		$smarty->assign("view",$view);
		$smarty->display("mon_an/layout.tpl");	
	}
	
	public function Hien_thi_mon_an_trong_ngay()
	{
		// Model
		include("models/m_mon_an.php");
		$m_mon_an=new M_mon_an();
		$mon_ans=$m_mon_an->Doc_mon_an_trong_ngay();
		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($mon_ans);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$mon_ans=$m_mon_an->Doc_mon_an_trong_ngay($vt,$limit);
		// Kết thúc Phân trang
		
		
		// View
		include("controllers/Smarty_nha_hang.php");
		$smarty=new Smarty_nha_hang();
		
		$smarty->assign("mon_ans",$mon_ans);
		$smarty->assign("lst",$lst);
		
		$smarty->assign("title","Món ăn trong ngày | Thu Trân");
		$smarty->assign("tieudeMonan","Món ăn trong ngày");
		$view="views/mon_an/v_mon_an.tpl";
		$smarty->assign("view",$view);
		$smarty->display("mon_an/layout.tpl");
	}
}
?>