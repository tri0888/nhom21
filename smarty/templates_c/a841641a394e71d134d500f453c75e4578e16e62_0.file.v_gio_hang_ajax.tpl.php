<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:37:28
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\v_gio_hang_ajax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6631ff485b3e10_06252105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a841641a394e71d134d500f453c75e4578e16e62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\v_gio_hang_ajax.tpl',
      1 => 1714552410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6631ff485b3e10_06252105 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['giohang'])) {?>
  <div class="cd-cart-container">
<?php } else { ?>
  <div class="cd-cart-container empty">
<?php }?>

	<a  class="cd-cart-trigger">
		Cart
		<ul class="count" id="count">
      <?php if (isset($_SESSION['tong_gio_hang'])) {?>
			  <li><?php echo $_SESSION['tong_gio_hang'];?>
</li>
			  <li><?php echo $_SESSION['tong_gio_hang'];?>
</li>
      <?php } else { ?>
        <li>0</li>
        <li>0</li>
      <?php }?>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<header>
				<h2>Giỏ Hàng</h2>
			</header>

			<div class="body">
				<ul id="listGioHang">
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer class='footer_gio_hang'>
				<a href="khach-hang.html" alt="Xem giỏ hàng" class="checkout">
					<em>Đặt hàng - 
						<span id="tong_thanh_tien">
          		 0 đ
      			</span>
					</em>
				</a>
			</footer>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->
<?php }
}
