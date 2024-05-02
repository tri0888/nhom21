<?php
/* Smarty version 3.1.30, created on 2024-05-01 11:11:59
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6632075f0de863_46338978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9795c1866acd003faa1b2ff93d18e541ff3e1248' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\v_tin_tuc.tpl',
      1 => 1714552410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_thanh_danh_muc.tpl' => 1,
    'file:views/tin_tuc/v_ds_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_6632075f0de863_46338978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_ds_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
