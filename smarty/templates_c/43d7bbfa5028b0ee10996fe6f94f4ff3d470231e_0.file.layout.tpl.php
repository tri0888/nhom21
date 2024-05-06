<?php
/* Smarty version 3.1.30, created on 2024-05-02 17:42:17
  from "C:\xampp\htdocs\Project_shop_hoa-master\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6633b459a1a7b4_85389118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d7bbfa5028b0ee10996fe6f94f4ff3d470231e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1714663330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_6633b459a1a7b4_85389118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8272677636633b459a193e5_42875378', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18329883166633b459a1a327_96858710', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_8272677636633b459a193e5_42875378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_18329883166633b459a1a327_96858710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
