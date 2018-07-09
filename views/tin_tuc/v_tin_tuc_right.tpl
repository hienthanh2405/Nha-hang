{foreach $tin_tucs as $tin}
    <div class="" style="float:left;width:150px;height:150px;margin: 0 0 0 2px ">
        <div >
            <figure class="img-indent"><a href="javascript:void(0)" onclick="Xemtintuc({$tin->ma_tin_tuc})" >
            <img src="public/images/tin_tuc/{$tin->hinh}" alt="" width="140px" height="100px"></a>
            </figure>
        </div>
        <div class="" style="width:140px;height:150px" >
        	<a href="tin_tuc.php?ma_tin_tuc={$tin->ma_tin_tuc}" ><h5>{$tin->tieu_de}</h5>  </a>
        </div>
    </div>
{/foreach}
<div style="clear:both"></div>