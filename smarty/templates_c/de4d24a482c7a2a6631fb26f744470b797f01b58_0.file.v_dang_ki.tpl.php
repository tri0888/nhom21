<?php
/* Smarty version 3.1.30, created on 2024-05-01 10:44:57
  from "C:\xampp\htdocs\Project_shop_hoa-master\views\dang_ki\v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6632010942cac8_49055221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de4d24a482c7a2a6631fb26f744470b797f01b58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\views\\dang_ki\\v_dang_ki.tpl',
      1 => 1714552411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6632010942cac8_49055221 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="register">
		<div class="container">
			<h2 class="h2Login">Đăng kí tại đây</h2>
			<div class="login-form-grids">
				<h5>Thông tin cá nhân</h5>
				<form method="post">
					<input type="text" name="hoTen" placeholder="Họ tên..." required=" ">
					<div class="gioi_tinh">Giới tính:<label><input type="radio" value="1"  name="phai">Nam</label><label><input type="radio" value="0"  name="phai">Nữ</label></div>
                    <input type="text"  name="diaChi"  placeholder="Địa chỉ..." required=" " >
                    <input type="text" name="dienThoai" placeholder="Điện thoại..." required=" " >
				<h6>Thông tin đăng nhập</h6>
					<input type="email" name="email" placeholder="Nhập Email..." required=" " >
					<input type="password" name="matKhau" placeholder="Mật khẩu..." required=" " >
					<input type="password" placeholder="Nhập Lại Mật khẩu..." required=" " >
					<input type="submit" name="dang_ki" value="Đăng Kí">
				</form>
			</div>
			<div class="register-home">
				<a href=".">Trở Về Trang chủ</a>
			</div>
		</div>
	</div><?php }
}
