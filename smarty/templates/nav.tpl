<script>
$(function() {
	 
	pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	var vt=window.location.href.lastIndexOf("?")-1;
	if(vt>0)
	{
		pgurl = window.location.href.substr(1,vt);
		pgurl =pgurl.substr(pgurl.lastIndexOf("/")+1);	
	}	
	
	 if (pgurl=="") pgurl="." ;
     $("#nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});
</script>

<nav id="nav">
    <ul class="menu">
        <li><a href="thuc_don.php">Thực đơn</a></li>
        <li><a href="mon_an.php">Món ăn </a></li>
        <li><a href="mon_an_trong_ngay.php">Món ăn trong ngày </a></li>
        <li><a href="mon_an_theo_mua.php">Món ăn theo mùa</a></li>
        <li><a href="tim_kiem.php">Tìm kiếm </a></li>
        <li><a href="tin_tuc.php">Tin tức </a></li>
        <li><a href="gio_hang.php">Giỏ hàng </a></li>
    </ul>
</nav>