<?php
/* Smarty version 3.1.30, created on 2024-05-01 11:03:36
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\khach_hang\v_ds_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_663205686ee2e4_58402082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '026dde24d343ae2a1cbda0c3b001b15e25bb02c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\khach_hang\\v_ds_khach_hang.tpl',
      1 => 1714552392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663205686ee2e4_58402082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Họ tên</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Tổng đơn hàng</th>
      <th>Đơn hàng gần nhất</th>
      <th>Tổng chi tiêu</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_khach_hang']->value, 'khach_hang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khach_hang']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->email;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dia_chi;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->don_hang;?>
</td>
      <td><a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->don_hang_gan_nhat;?>
" title="Xem chi tiết đơn hàng" ><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->don_hang_gan_nhat;?>
</a></td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['khach_hang']->value->tong_chi_tieu);?>
 đ</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
