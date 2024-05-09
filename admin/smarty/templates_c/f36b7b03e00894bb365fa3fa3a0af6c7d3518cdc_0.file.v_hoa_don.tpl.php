<?php
/* Smarty version 3.1.30, created on 2024-05-08 13:41:05
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\views\v_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_663b64d1eaa821_31300735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36b7b03e00894bb365fa3fa3a0af6c7d3518cdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\views\\v_hoa_don.tpl',
      1 => 1715168460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b64d1eaa821_31300735 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hóa đơn</div>
            <form method="POST" action="\Project_shop_hoa-master\admin\hoa_don_chua_duyet.php">
                Từ ngày: <input type="date" name="start_date">
                Đến ngày: <input type="date" name="end_date">
                <input type="submit" value="Lọc">
            </form>
            <form method="POST" action="\Project_shop_hoa-master\admin\hoa_don_chua_duyet.php">
            <div>
              <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
              <option value="" selected>Chọn tỉnh thành</option>           
              </select>
                        
              <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
              <option value="" selected>Chọn quận huyện</option>
              </select>

              <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
              <option value="" selected>Chọn phường xã</option>
              </select>
              <input type="submit" value="Lọc">
              </div> 
              
              </form>

                  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"><?php echo '</script'; ?>
>
                  <?php echo '<script'; ?>
>
                var citis = document.getElementById("city");
              var districts = document.getElementById("district");
              var wards = document.getElementById("ward");
              var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
                method: "GET", 
                responseType: "application/json", 
              };
              var promise = axios(Parameter);
              promise.then(function (result) {
                renderCity(result.data);
              });

              function renderCity(data) {
                for (const x of data) {
                  citis.options[citis.options.length] = new Option(x.Name, x.Id);
                }
                citis.onchange = function () {
                  district.length = 1;
                  ward.length = 1;
                  if(this.value != ""){
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                      district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                  }
                };
                district.onchange = function () {
                  ward.length = 1;
                  const dataCity = data.filter((n) => n.Id === citis.value);
                  if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                      wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                  }
                };
              }
                <?php echo '</script'; ?>
>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Khách hàng</th>
                  <th>Ngày đặt</th>
                  <th>Địa chỉ</th>
                  <th>Tổng tiền</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_don']->value, 'hoa_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
">
                  <td>
                     <a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
" title="Xem chi tiết đơn hàng"target="_blank">
                       <?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>

                     </a>
                   </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
                  <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat,'%d-%m-%Y');?>
</td>
                  <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_thanh_tien);?>
 đ</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai;?>
</td>
                  <td>
                  <?php if (($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai) == 'Chưa xử lý') {?>
                      <button type="button" onclick="updateAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-success">Xử lý</button>
                  <?php }?>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              </tbody>
            </table>
          </div>
        </div>
        <?php echo '<script'; ?>
 src="public/js/ajax/ajax_update_hoa_don.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_hoa_don.js"><?php echo '</script'; ?>
><?php }
}
