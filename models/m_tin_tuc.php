<?php
require_once('database.php');
class M_tin_tuc extends database 
{
        public function Doc_tin_tuc($vt=-1,$limit=-1)
		{
			$sql="Select * from tin_tuc";
			if($vt>=0 && $limit>0)
			{
				$sql.=" limit $vt,$limit";	
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function Doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc)
		{
			$sql="Select * from tin_tuc where ma_tin_tuc=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_tin_tuc));
		}
}