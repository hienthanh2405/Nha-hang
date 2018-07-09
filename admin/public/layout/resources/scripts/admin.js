// JavaScript Document
function kiem_tra_tin_tuc()
{
	var tieu_de=document.getElementById("tieu_de");
	if(tieu_de.value=="")
	{
		alert("Nhập tin tức");
		tieu_de.focus();
		return false;	
	}
	return true;
	
}
function xoa_tin_tuc(ma_tin_tuc)
{
	if(confirm('Bạn xóa tin hiện hành?\nCẩn thận'))
	{
		window.location="xoatintuc.php?ma_tin_tuc=" + ma_tin_tuc;		
	}	
}