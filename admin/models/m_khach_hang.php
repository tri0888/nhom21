
<?php
require_once("database.php");
class M_khach_hang extends database
{
    function doc_tat_ca_khach_hang(){
        if (isset($_POST['start_date1']) && isset($_POST['end_date1'])){
            $startDate = $_POST['start_date1'];
            $endDate = $_POST['end_date1'];
            $sql="SELECT khach_hang.ten_khach_hang,
            khach_hang.email,            
            count(hoa_don.ma_hoa_don) as don_hang, 
            max(hoa_don.ma_hoa_don) as don_hang_gan_nhat,
            sum(hoa_don.tong_thanh_tien) as tong_chi_tieu 
            FROM khach_hang inner join hoa_don on hoa_don.ma_khach_hang =khach_hang.ma_khach_hang 
            where ngay_dat between '$startDate' and '$endDate'
            group by khach_hang.ten_khach_hang,khach_hang.email
            ORDER BY `tong_chi_tieu` DESC
            LIMIT 5";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        if (!isset($_POST['start_date1']) && !isset($_POST['end_date1'])){
        $sql = "SELECT khach_hang.*, 
        sum(hoa_don.tong_thanh_tien) as tong_chi_tieu, 
        count(hoa_don.ma_hoa_don) as don_hang, 
        max(hoa_don.ma_hoa_don) as don_hang_gan_nhat 
        fROM khach_hang inner join hoa_don on hoa_don.ma_khach_hang =khach_hang.ma_khach_hang group by hoa_don.ma_khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
        }

        
    }
}
?>