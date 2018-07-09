<?php
class C_thuc_don
{
	public function Hien_thi_thuc_don()
	{
		// Model
		include("models/m_thuc_don.php");
		$m_thuc_don=new M_thuc_don();
		$thuc_dons=$m_thuc_don->Doc_thuc_don();
		
		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=6;
		$count=count($thuc_dons);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$thuc_dons=$m_thuc_don->Doc_thuc_don($vt,$limit);
		// kết thúc phân trang //
		
		$ma_thuc_don=$thuc_dons[0]->ma_thuc_don;		
		if(isset($_GET["ma_thuc_don"]))
		{
			$ma_thuc_don=$_GET["ma_thuc_don"];	
		}
		
		$thuc_don=$m_thuc_don->Doc_thuc_don_theo_ma_thuc_don($ma_thuc_don);
		$ct=$m_thuc_don->Doc_thuc_don_mon_an($ma_thuc_don);
		// View
		include("controllers/Smarty_nha_hang.php");
		$smarty=new Smarty_nha_hang();
		
		$smarty->assign("thuc_dons",$thuc_dons);
		$smarty->assign("thuc_don",$thuc_don);
		$smarty->assign("ct",$ct);
		$smarty->assign("lst",$lst);
		$smarty->assign("cur",$curpage);
		
		$smarty->assign("title","Thực đơn | Thu Trân");
		$view="views/thuc_don/v_thuc_don.tpl";
		$smarty->assign("view",$view);
		$smarty->display("thuc_don/layout.tpl");	
	}	
}
?>