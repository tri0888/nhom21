<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:44:57
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6632010937bd88_75888895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63dd86c314f23b04dc198ea9765d4eeba2b4de5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\v_dang_ki.tpl',
      1 => 1714552410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_ki/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_ki/v_dang_ki.tpl' => 1,
  ),
),false)) {
function content_6632010937bd88_75888895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_dang_ki.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
