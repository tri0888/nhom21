<?php
/* Smarty version 3.1.30, created on 2024-05-01 11:04:25
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\v_seo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66320599e38477_93925901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09c4c3a8b058ce3589fed24c903cb7a5d4ed8f47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\v_seo.tpl',
      1 => 1714552391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66320599e38477_93925901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title_website">Title Website:</label>
        <input type="text" class="form-control" name="title_website" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
">    
    </div>
    <div class="form-group">
        <label for="description_website">Description Website:</label>
        <input type="text" class="form-control" name="description_website" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['description_website']->value;?>
">    
    </div>
    <div class="form-group">
        <label for="keywords_website">Keywords Website:</label>
        <input type="text" class="form-control" name="keywords_website" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['keywords_website']->value;?>
">    
    </div>
    <div class="form-group">
        <label for="hinh" style="margin-bottom: 10px">Logo Website:</label>
        <div class="row">
            <div class="col col-4">
            <div class="input-file-container">  
                <input class="input-file" type="file" name="hinh" id="file"/>
                <label tabindex="0" for="my-file" class="input-file-trigger">Tải ảnh mới</label>
                <p class="file-return"></p>
            </div>
            </div>
            <div class="col col-3">
                <img id="hienThi" class="img-fluid" src="../public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"/>
                <p>Logo default: 130 x 49</p>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Cập nhật</button>
    </form>
</div>
    <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
>
    <?php if (isset($_SESSION['success'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Cập nhật thành công!",
            text: "<?php echo $_SESSION['success'];?>
!",
            type: "success"
            }).then(function() {
                window.location = "seo.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
