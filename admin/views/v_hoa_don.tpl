      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách hóa đơn</div>
            <form method="POST" action="\Project_shop_hoa-master\admin\hoa_don_chua_duyet.php">
                Từ ngày: <input type="date" name="start_date">
                Đến ngày: <input type="date" name="end_date">
                <input type="submit" value="Lọc">
            </form>
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
              </div>    


                  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                  <script>
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
                </script>
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
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                {foreach $doc_hoa_don as $hoa_don}
                <tr id="delete{$hoa_don->ma_hoa_don}">
                  <td>
                     <a href="chi_tiet_hoa_don.php?ma_hoa_don={$hoa_don->ma_hoa_don}" title="Xem chi tiết đơn hàng"target="_blank">
                       {$hoa_don->ma_hoa_don}
                     </a>
                   </td>
                  <td>{$hoa_don->ten_khach_hang}</td>
                  <td>{$hoa_don->ngay_dat|date_format:'%d-%m-%Y'}</td>
                  <td>{number_format($hoa_don->tong_thanh_tien)} đ</td>
                  <td>{$hoa_don->trang_thai}</td>
                  <td>
                  {if ($hoa_don->trang_thai) == 'Chưa xử lý'}
                      <button type="button" onclick="updateAjax({$hoa_don->ma_hoa_don})" class="btn btn-success">Xử lý</button>
                  {/if}
                      <button type="button" onclick="deleteAjax({$hoa_don->ma_hoa_don})" class="btn btn-danger">Xóa</button>
                  </td>
                </tr>
                {/foreach}

              </tbody>
            </table>
          </div>
        </div>
        <script src="public/js/ajax/ajax_update_hoa_don.js"></script>
        <script src="public/js/ajax/ajax_delete_hoa_don.js"></script>