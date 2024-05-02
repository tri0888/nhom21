<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:37:28
  from "C:\xampp\htdocs\Project_shop_hoa-master\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6631ff4867c8a1_69313885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6f8c67a7b4ad678a8372ded860e709d492d7c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1714552406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/script.tpl' => 1,
  ),
),false)) {
function content_6631ff4867c8a1_69313885 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
    <div class="container">
        <div class="col-sm-5 text-left">
            © Bản quyền thuộc về <?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>

        </div>
        <div class="col-sm-7 text-right">
            <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 | Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 | Hotline: <?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>

        </div>
    </div>
</footer>
<?php $_smarty_tpl->_subTemplateRender("file:layouts/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--Start of Tawk.to Script-->
<?php echo '<script'; ?>
 type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58dbc321f97dd14875f5ab04/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
<?php echo '</script'; ?>
>
<!--End of Tawk.to Script-->
    </body>
</html>
<?php }
}
