<?php
/* Smarty version 3.1.30, created on 2024-05-05 12:43:18
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\khach_hang\v_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_663762c636e902_86969527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd0b4a35b9a5b896d23ec9beb30c5f6ee66323f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\khach_hang\\v_thong_tin.tpl',
      1 => 1714663341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663762c636e902_86969527 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div  class="col-md-6 product-left-block">
  <h3 class="canh_giua khach_hang thong_tin">Thông tin</h3>
  <form name="them_khach_hang" method="post">
    <ul class="form-style-1">
  <li><label>Tên khách hàng </label><input type="text" name="ten_kh" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->ten_khach_hang;?>
" class="field-divided"/></li>
  <li>
      <label>Phái</label>
      <select name="phai" class="field-select phai">
        <option value="1" <?php if ($_smarty_tpl->tpl_vars['kh']->value->phai == 1) {?>  selected="selected" <?php }?>>Nam</option>
        <option value="0" <?php if ($_smarty_tpl->tpl_vars['kh']->value->phai == 0) {?>  selected="selected" <?php }?>>Nữ</option>
      </select>
  </li>
  <li>
      <label>Địa chỉ </label>
      <input type="text" name="dia_chi" class="field-long dia_chi"  value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->dia_chi;?>
"  />
  </li>
  <li>
      <label>Điện thoại </label>
      <input type="text" name="dien_thoai" class="field-long dien_thoai"  value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->dien_thoai;?>
" />
  </li>

  <li>
      <label>Thanh toán </label>
      <div class="container">
                <select name="" >
                    <option>Trực tuyến</option>
                    <option>Tiền mặt</option>                    
                </select>
        </div>
      

  </li>

  <li>
    <input type="submit"  class="one khach_hang" value="Đặt hàng" name="luu"/>
  </li>
</ul>
  </div>
<?php }
}
