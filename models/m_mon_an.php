<?php
include("database.php");
class M_mon_an extends database
{
	/*
	Lấy danh sách món ăn
	Lấy danh sách món ăn có phân trang
	Lấy món ăn theo ma_mon
	Lấy món ăn cùng loại
	Lấy món ăn phục vụ trong ngày
	Thêm món ăn
	Cập nhật món ăn
	Xóa món ăn
	*/
	function Doc_mon_an($vt=-1,$limit=-1)
	{
		$sql="select * from mon_an ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}

	function Doc_mon_an_trong_ngay($vt=-1,$limit=-1)
	{
		$sql="select * from mon_an where trong_ngay=1 ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_mon_an_theo_ma_mon($ma_mon)
	{
		$sql="select * from mon_an where ma_mon=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_mon));	
	}
	function Doc_mon_an_cung_loai($ma_loai,$ma_mon,$vt=-1,$limit=-1)
	{
		$sql="select * from mon_an where ma_loai=? and ma_mon!=? ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai,$ma_mon));	
	}
	
	function Tim_mon_an_theo_ten($gtTim)
	{
		$sql="select * from mon_an where ten_mon like '%$gtTim%' ";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	public function lay_mon_an_cho_gio_hang($chuoi)
        {
            $query="Select * from mon_an where ma_mon in($chuoi)";
			$this->setQuery($query);
			return $this->loadAllRows();
        }
	
	
		
}
?>