<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã tin</th>
          <th>Tiêu đề</th>
          <th>Tác giả</th>
          <th>Ngày đăng</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $tin_tuc as $tin}
        <tr>
          <td><input type="checkbox" /></td>
          <td>{$tin->ma_tin_tuc}</td>
          <td><a href="suatintuc.php?ma_tin_tuc={$tin->ma_tin_tuc}" title="Edit">{$tin->tieu_de}</a></td>
          <td>{$tin->tac_gia}</td>
          <td>{$tin->ngay_dang}</td>
          <td><!-- Icons --> 
            <a href="suatintuc.php?ma_tin_tuc={$tin->ma_tin_tuc}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:xoa_tin_tuc({$tin->ma_tin_tuc})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
