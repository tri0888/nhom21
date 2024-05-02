<?php
/* Smarty version 3.1.30, created on 2024-05-01 11:03:36
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66320568665898_57500044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c634e53c587815ea1da6fa4f9e1753cb8c888335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\v_khach_hang.tpl',
      1 => 1714552391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_ds_khach_hang.tpl' => 1,
  ),
),false)) {
function content_66320568665898_57500044 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_ds_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
</div><?php }
}
