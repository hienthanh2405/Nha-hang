// JavaScript Document
function Monantheomua()
{
	var mua="";
	var r=document.getElementsByName("mua");
	for(i=0;i<r.length;i++)
	{
		if(r.item(i).checked)
		{
			mua=r.item(i).value;
			break;	
		}	
	}
	
	if(mua=="")
	{
		alert("Xin vui lòng chọn mùa");
		return false;	
	}
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	/* sử dụng POST */
	xmlhttp.open("POST","xl_mon_an_theo_mua.php",true);
	var data = new FormData();
	data.append('mua',mua);
	xmlhttp.send(data);
	
	
}

function Timmonan(gtTim)
{
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	/* sử dụng POST */
	xmlhttp.open("POST","xl_tim_mon.php",true);
	var data = new FormData();
	data.append('gtTim',gtTim);
	xmlhttp.send(data);
}


function Xemtintuc(ma_tin_tuc)
{
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	/* sử dụng POST */
	xmlhttp.open("POST","xl_tin_tuc.php",true);
	var data = new FormData();
	data.append('ma_tin_tuc',ma_tin_tuc);
	xmlhttp.send(data);
}