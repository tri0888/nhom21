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
<form method="POST" action="/Project_shop_hoa-master/admin/khach_hang.php">
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
  {foreach $ds_khach_hang as $khach_hang}
    <tr>
      <td>{$khach_hang->ten_khach_hang}</td>
      <td>{$khach_hang->email}</td>
      <td>{$khach_hang->don_hang}</td>
      <td><a href="chi_tiet_hoa_don.php?ma_hoa_don={$khach_hang->don_hang_gan_nhat}" title="Xem chi tiết đơn hàng" >{$khach_hang->don_hang_gan_nhat}</a></td>
      <td>{number_format($khach_hang->tong_chi_tieu)} đ</td>
      <td>
      <label class="switch">
          <input type="checkbox" `+(u.off?'':'checked')+` onclick="voHieuHoaNguoiDung(this, '`+u.username+`')">
          <span class="slider round"></span>
      </label>
      </td>
    </tr>
  {/foreach}
  </tbody>
</table>
