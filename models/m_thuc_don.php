<?php
require_once('database.php');
class M_thuc_don extends database 
{
        public function Doc_thuc_don($vt=-1,$limit=-1)
		{
			$query="Select * from thuc_don";
			if($vt>=0 && $limit>0)
			{
				$query .=" limit $vt,$limit";	
			}
			$this->setQuery($query);
			return $this->loadAllRows();
		}
		public function Doc_thuc_don_phan_trang($vt,$limit)
		{
			$query="Select * from thuc_don limit $vt,$limit";
			$this->setQuery($query);
			return $this->loadAllRows();
		}
		public function Doc_thuc_don_theo_ma_thuc_don($ma_thuc_don)
		{
			$query="Select * from thuc_don where ma_thuc_don=?";
			$this->setQuery($query);
			return $this->loadRow(array($ma_thuc_don));
		}
        public function Doc_thuc_don_mon_an($ma_thuc_don)
		{
			$query="SELECT ma_thuc_don, mon_an.ma_mon,ten_mon,don_gia,noi_dung_tom_tat, so_luong, hinh FROM thuc_don_mon_an, mon_an WHERE mon_an.ma_mon=thuc_don_mon_an.ma_mon and ma_thuc_don=?";
			$this->setQuery($query);
			return $this->loadAllRows(array($ma_thuc_don));
		}
		
		public function lay_thuc_don_cho_gio_hang($chuoi)
        {
            $query="Select * from thuc_don where ma_thuc_don in($chuoi)";
			$this->setQuery($query);
			return $this->loadAllRows();
        }
		
		
		

    }
?>