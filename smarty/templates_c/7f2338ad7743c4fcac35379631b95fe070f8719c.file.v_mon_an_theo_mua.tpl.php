<?php /* Smarty version Smarty-3.1.18, created on 2016-11-11 17:20:29
         compiled from "views\mon_an\v_mon_an_theo_mua.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167595825efcd59a6a5-78649676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f2338ad7743c4fcac35379631b95fe070f8719c' => 
    array (
      0 => 'views\\mon_an\\v_mon_an_theo_mua.tpl',
      1 => 1462679840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167595825efcd59a6a5-78649676',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5825efcd5ec731_82882573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825efcd5ec731_82882573')) {function content_5825efcd5ec731_82882573($_smarty_tpl) {?><div class="main">
  <div class="container">
    <table align="center" width="600x" border="0" cellpadding="15px" bgcolor="#FEF3CB">
      <tr>
        <td bgcolor="#265140" style="font-size:24px;color:#FFFFFF; height:40px; text-align:center; line-height:40px ">
        XEM MÓN ĂN THEO MÙA
        </td>
      </tr>
      <tr>
        <td align="center">
            <input type="radio" name="mua" id="xuan" value="xuan">
            <label style="cursor:pointer" for="xuan">Mùa Xuân</label>
            <input type="radio" name="mua" id="ha" value="ha">
            <label style="cursor:pointer" for="ha">Mùa Hạ</label>
            <input type="radio" name="mua" id="thu" value="thu">
            <label style="cursor:pointer" for="thu">Mùa Thu</label>
            <input type="radio" name="mua" id="dong" value="dong">
            <label style="cursor:pointer" for="dong">Mùa Đông</label>
        </td>
      </tr>
      <tr>
        <td align="center">
        <input type="button" name="xem" value="Hiển thị" onClick="Monantheomua()" class="button-2">
        </td>
      </tr>
    </table>
    <div id="hienthi">
    
    </div>
  </div>
</div>
<?php }} ?>
