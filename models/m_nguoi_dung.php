<?php
include_once("database.php");
class M_nguoi_dung extends database
{
	function Doc_user()
	{
		$sql="select * from user";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_Table()
	{
		$sql="SHOW TABLES FROM nha_hang";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_user_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from user where username=? and password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}
}
?>