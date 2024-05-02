<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:37:27
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\trang_chu\v_mau_hoa_moi.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6631ff47eab151_30362727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b85a42e84c48c07acd5d5496ad525ba9cebbc0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\trang_chu\\v_mau_hoa_moi.tpl',
      1 => 1714552411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6631ff47eab151_30362727 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu1" class="tab-pane fade in active">
    <div class="category-products">
        <ul class="products-grid row aos-all" id="aos-demo">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_moi']->value, 'hoa_moi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_moi']->value) {
?>
            <li class="item hoa " data-aos="fade-up-right">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_moi']->value->GiaKhuyenMai;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['hoa_moi']->value->SoLuongSP > 0) {?>
                                <div class="notify-dat-hang">
                                   <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</button>
                                </div>
                            <?php } else { ?>
                                <div class="notify">
                                    <button>Đã hết hàng</button>
                                </div>
                            <?php }?>
                        </div>
                      </div>
                  </div>
            </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <div class="cta">
            <button onclick="location.href='danh-sach-hoa'">Xem thêm hoa <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<?php }
}
