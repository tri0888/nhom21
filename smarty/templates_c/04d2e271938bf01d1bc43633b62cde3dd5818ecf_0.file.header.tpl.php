<?php
/* Smarty version 3.1.30, created on 2024-05-09 03:57:06
  from "C:\xampp\htdocs\Project_shop_hoa-master\smarty\templates\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_663c2d72e9d912_03081737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d2e271938bf01d1bc43633b62cde3dd5818ecf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\smarty\\templates\\layouts\\header.tpl',
      1 => 1715219817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c2d72e9d912_03081737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="row">
    <div id="bsm_header_mobile">
        <i class="bsm_header_mobile_nav_button fa fa-bars" aria-hidden="true"></i>
        <i class="bsm_header_mobile_nav_button fa fa-times" aria-hidden="true"></i>
        <i class="bsm_header_mobile_search_button fa fa-search" aria-hidden="true"></i>
    </div>
    <div class="col-md-2 bsm_logo">
        <a href=".">

            <img src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="" style="width: 160px;height: 68px;">
        </a>
    </div>
    <nav id="bsm_header_mobile_nav"><ul class="bsm_header_nav_left">
            <li ><a href=".">Trang chủ</a></li>
            <li><a href="gioi_thieu.php">Giới thiệu</a></li>
            <li><a href="danh-sach-hoa">Hoa tươi</a></li>
        </ul>
        <ul class="bsm_header_nav_left">
            <li><a href="tin_tuc.php">Tin Tức</a></li>
            <li><a href="check_hoa_don.php">Check hóa đơn</a></li>
            <li><a href="lien-he.html">Liên hệ</a></li>
        </ul>
    </nav>
    <div id="bsm_header_mobile_search">
        <i class="bsm_header_mobile_button_close fa fa-times" aria-hidden="true"></i>
        <form method="post">
            <label>
                <div class="khung-tim-kiem-mobile">
                    <form class="form-inline" method="post" autocomplete="off">
                        <input name="search" id="search-mobile" class="form-control mr-sm-2" type="text" placeholder="Nhập hoa cần tìm kiếm">
                    </form>
                    <div class="hien-thi-tim-kiem-mobile">
                        <div id="result-tenHoa-mobile"></div>
                    </div>
                </div>
            </label>
        </form>
    </div>

    <div id="bsm_header_top_bar">
        <div class="container">
            <div class="col-md-9 col-sm-8">
                <ul>
                    <li>
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
">Gọi ngay: <?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</a>
                    </li>
                    <li>
                        <div class="khung-tim-kiem-pc">
                            <form class="form-inline" method="post" autocomplete="off">
                                <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Nhập hoa cần tìm kiếm">
                                <form id="advancedSearchForm" class="form-inline" method="post" autocomplete="off">
                       
                            <div class="form-group">
                                <label for="category">Phân loại:</label>
                                <select name="category" id="category" class="form-control mr-sm-2">
                                    <option value="">Tất cả</option>
                                     <option value="category1">Hoa hộp</option>
                                    <option value="category2">Hoa cắm giỏ </option>
                                    <option value="category2">Hoa cắm bình </option>
                                    <option value="category2">Hoa cầm tay </option>
                                    <option value="category2">Hoa đại sảnh </option>
                                    <!-- Thêm các tùy chọn phân loại khác nếu cần -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="minPrice">Giá từ:</label>
                                <input name="minPrice" id="minPrice" class="form-control mr-sm-2" type="number" min="0">
                            </div>
                            <div class="form-group">
                                <label for="maxPrice">Đến:</label>
                                <input name="maxPrice" id="maxPrice" class="form-control mr-sm-2" type="number" min="0">
                            </div>
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </form>
                        <div class="hien-thi-tim-kiem">
                            <div id="result-tenHoa"></div>
                        </div>
                            </form>
                            <div class="hien-thi-tim-kiem">
                                <div id="result-tenHoa"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-8 canh_trai">
                <ul>
                 <?php if (isset($_SESSION['hoTen'])) {?>
                    <li>
                        Xin Chào <?php echo $_SESSION['hoTen'];?>

                    </li>
                    <li>
                        <a href="dang-xuat.html">Đăng Xuất</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="dang-nhap.html">Đăng Nhập</a>
                    </li>
                    <li>
                       <a href="dang-ki.html">Đăng Kí</a>
                    </li>
                <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <div id="bsm_header_navigation" class="container">
        <div class="col-md-5">
            <nav>
                <ul class="bsm_header_nav_left">
                    <li ><a href=".">Trang chủ</a></li>
                    <li><a href="gioi_thieu.php">Giới thiệu</a></li>
                    <li><a href="danh-sach-hoa">Hoa tươi</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-2">
            <a href=".">   
            <img src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="" style="width: 165px;height: 130px;">
        </a>
        </div>
        <div class="col-md-5">
            <nav>
                <ul class="bsm_header_nav_left">
                    <li><a href="tin_tuc.php">Tin Tức</a></li>
                    <li><a href="check_hoa_don.php">Check hóa đơn</a></li>
                    <li><a href="lien-he.html">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php }
}
