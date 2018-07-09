<?php
class C_tin_tuc
{
	public function Hien_thi_tin_tuc()
	{
		// Model
		include("models/m_tin_tuc.php");
		$m_tin_tuc=new M_tin_tuc();
		
		$tin_tucs=$m_tin_tuc->Doc_tin_tuc();
		
		
		$ma_tin_tuc=$tin_tucs[0]->ma_tin_tuc;
		
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
		}
		$tin_tuc=$m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
		// View
		include("controllers/Smarty_nha_hang.php");
		$smarty=new Smarty_nha_hang();
		
		$smarty->assign("tin_tucs",$tin_tucs);
		$smarty->assign("tin_tuc",$tin_tuc);
		
		$smarty->assign("title","Tin tức | Thu Trân");
		$view="views/tin_tuc/v_tin_tuc.tpl";
		$smarty->assign("view",$view);
		$smarty->display("mon_an/layout.tpl");	
	}	
}
?>