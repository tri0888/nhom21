<?php
require_once("database.php");
class M_hoa_don extends database
{
    public function xem_hoa_don_chua_duyet()
    {
        if (!isset($_POST['start_date']) && !isset($_POST['end_date'])){
        $sql="SELECT * FROM hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang 
        where trang_thai='Chưa xử lý' 
        ORDER BY ngay_dat DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();}

        if (isset($_POST['start_date']) && isset($_POST['end_date'])){
            $startDate = $_POST['start_date'];
            $endDate = $_POST['end_date'];
            $city = $_POST['city'];
            $district = $_POST['district'];
            $ward = $_POST['ward'];
            $sql="SELECT * FROM hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang 
            where trang_thai='Chưa xử lý' 
            AND DATE(ngay_dat) BETWEEN '$startDate' AND '$endDate'
            AND khach_hang.dia_chi like='$city' || 
            khach_hang.dia_chi like='$district' || 
            khach_hang.dia_chi like='$ward' || 
            khach_hang.dia_chi like='HCM'
            ORDER BY tong_thanh_tien DESC";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        if (isset($_POST['city'])){
            $city = $_POST['city'];
            $district = $_POST['district'];
            $ward = $_POST['ward'];
            echo "<script>alert('$city');</script>";
           
        }
    }
    public function xem_hoa_don_da_duyet()
    {
        if (!isset($_POST['start_date']) && !isset($_POST['end_date'])){
            $sql="SELECT * FROM hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang 
            where trang_thai='Đã xử lý' 
            ORDER BY ngay_dat DESC";
            $this->setQuery($sql);
            return $this->loadAllRows();}
            if (isset($_POST['start_date']) && isset($_POST['end_date'])){
                $startDate = $_POST['start_date'];
                $endDate = $_POST['end_date'];
                $sql="SELECT * FROM hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang 
                where trang_thai='Đã xử lý' 
                AND DATE(ngay_dat) BETWEEN '$startDate' AND '$endDate'
                ORDER BY tong_thanh_tien DESC";
                $this->setQuery($sql);
                return $this->loadAllRows();
            }
    }
    public function xem_hoa_don_chua_xu_ly_hom_nay()
    {
        $sql="SELECT * FROM hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang WHERE day(ngay_dat) = day(CURDATE()) and hoa_don.trang_thai = 'Chưa xử lý'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Chi_Tiet($ma_hoa_don)
    {
        $sql="SELECT * FROM hoa_don inner join chi_tiet_hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don inner join khach_hang on khach_hang.ma_khach_hang=hoa_don.ma_khach_hang where hoa_don.ma_hoa_don=$ma_hoa_don limit 1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function SanPhamTheoMaHoaDon($ma_hoa_don)
    {
        $sql="SELECT * FROM chi_tiet_hoa_don inner join hoa on chi_tiet_hoa_don.MaHoa=hoa.MaHoa where ma_hoa_don=$ma_hoa_don";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
