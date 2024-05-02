<?php
/* Smarty version 3.1.30, created on 2024-05-01 11:10:27
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\loai_hoa\v_modal_sua_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66320703d84c39_92115348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2e42dabab8aa4dc77f45b256cca559282070c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\loai_hoa\\v_modal_sua_loai_hoa.tpl',
      1 => 1714552392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66320703d84c39_92115348 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết <?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="loai_hoa.php">
          <input type="hidden" name="ma_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên loại hoa:</label>
            <input type="text" class="form-control ten_loai" name="ten_loai" id="ten_loai<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
" value="<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
" autocomplete="off">
            <div id="tenLoaiResult<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
