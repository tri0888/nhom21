<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
  <script>
    function voHieuHoaNguoiDung(inp) {
      <?php 
        $sql = "UPDATE khach_hang SET permission=0 WHERE ma_khach_hang=47";
        ?>
}
  </script>
</body>
</html>
<?php
/* Smarty version 3.1.30, created on 2024-05-03 12:07:28
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\khach_hang\v_ds_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6634b76004b8a1_38202650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '026dde24d343ae2a1cbda0c3b001b15e25bb02c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\khach_hang\\v_ds_khach_hang.tpl',
      1 => 1714730425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6634b76004b8a1_38202650 (Smarty_Internal_Template $_smarty_tpl) {

?>
<style>
        .switch {
          position: relative;
          display: inline-block;
          width: 25px;
          height: 15px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 0px;
            bottom: 0px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(13px);
            -ms-transform: translateX(13px);
            transform: translateX(13px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <form method="POST" action="\Project_shop_hoa-master\admin\khach_hang.php">
                Từ ngày: <input type="date" name="start_date1">
                Đến ngày: <input type="date" name="end_date1">
                <input type="submit" value="Lọc">
            </form>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Họ tên</th>
      <th>Email</th>
      <th>Tổng đơn hàng</th>
      <th>Đơn hàng gần nhất</th>
      <th>Tổng chi tiêu</th>
      <th>Khóa người dùng</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_khach_hang']->value, 'khach_hang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khach_hang']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->email;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->don_hang;?>
</td>
      <td><a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->don_hang_gan_nhat;?>
" title="Xem chi tiết đơn hàng" ><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->don_hang_gan_nhat;?>
</a></td>
      <td><?php echo number_format($_smarty_tpl->tpl_vars['khach_hang']->value->tong_chi_tieu);?>
 đ</td>
      <td>
      <label class="switch">
          <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>" onclick="return confirm('Bạn có muốn ẩn người dùng')">
          <span class="slider round"></span>
      </label> 
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}