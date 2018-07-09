<?php
include_once("database.php");
class M_loai_mon_an extends database
{
	
	function Doc_loai_mon_an($vt=-1,$limit=-1)
	{
		$sql="select * from loai_mon_an";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_loai_mon_an_theo_ma_loai($ma_loai)
	{
		$sql="select * from loai_mon_an where ma_loai=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai));
	}
	
	// Quản trị Cập nhật loại món ăn=======
	//ma_loai, ten_loai,mo_ta,hinh
	
	// Thêm
	function Them_loai_mon_an($ten_loai, $mo_ta,$hinh)
	{
		$sql="insert into loai_mon_an";
		$sql.=" values(?,?,?,?)";
		$this->setQuery($sql);
		$param=array('NULL', $ten_loai, $mo_ta,$hinh);
		return $this->execute($param);
		
	}
	// Sửa
	function Sua_loai_mon_an($ma_loai, $ten_loai,$mo_ta, $hinh)
	{
		$sql="update loai_mon_an ";
		$sql.="set ten_loai=?,mo_ta=?,hinh=? ";
		$sql.="where ma_loai=?";
		$this->setQuery($sql);
		$param=array($ten_loai,$mo_ta,$hinh,$ma_loai);
		return $this->execute($param);
	}
	// Xóa
	function Xoa_loai_mon_an($ma_loai)
	{
		$sql="delete from loai_mon_an where ma_loai=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai));
	}
}