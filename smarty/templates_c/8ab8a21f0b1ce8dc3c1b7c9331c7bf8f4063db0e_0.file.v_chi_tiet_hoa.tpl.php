<?php
/* Smarty version 3.1.30, created on 2024-05-09 03:52:17
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\v_chi_tiet_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_663c2c514844f0_81057926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab8a21f0b1ce8dc3c1b7c9331c7bf8f4063db0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\v_chi_tiet_hoa.tpl',
      1 => 1714663339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/chi_tiet_hoa/v_thanh_danh_muc.tpl' => 1,
    'file:views/chi_tiet_hoa/v_chi_tiet_hoa.tpl' => 1,
    'file:views/chi_tiet_hoa/v_thong_tin_khac.tpl' => 1,
    'file:views/chi_tiet_hoa/v_thong_tin_hoa.tpl' => 1,
    'file:views/chi_tiet_hoa/v_san_pham_cung_loai.tpl' => 1,
    'file:views/chi_tiet_hoa/v_lich_su_xem.tpl' => 1,
    'file:layouts/body/quang_cao.tpl' => 1,
    'file:views/v_gio_hang_ajax.tpl' => 1,
  ),
),false)) {
function content_663c2c514844f0_81057926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="product-view">
    <form method="post" action="gio_hang.php?MaHoa=<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">
      <div class="row">
        <div class="col-md-5">
            <img class="img-responsive hinh_ct" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
        </div>
        <div class="product-shop col-md-7 col-sm-6 col-xs-12">
          <div class="product-shop-content">
            <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_chi_tiet_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thong_tin_khac.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_thong_tin_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
      </div>
    </div>
  </form>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_san_pham_cung_loai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:views/chi_tiet_hoa/v_lich_su_xem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:views/v_gio_hang_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
