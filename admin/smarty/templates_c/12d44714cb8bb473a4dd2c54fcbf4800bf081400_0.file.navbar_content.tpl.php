<?php
/* Smarty version 3.1.30, created on 2024-05-02 17:26:08
  from "C:\xampp\htdocs\Project_shop_hoa-master\admin\smarty\templates\layouts\content\navbar_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6633b0905f1dd1_42488675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12d44714cb8bb473a4dd2c54fcbf4800bf081400' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project_shop_hoa-master\\admin\\smarty\\templates\\layouts\\content\\navbar_content.tpl',
      1 => 1714663285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6633b0905f1dd1_42488675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top print" id="mainNav">
    <a class="navbar-brand" href="../">Quản lý cửa hàng</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href=".">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Tổng quan</span>
          </a>
        </li>
        <?php if ($_COOKIE['permission'] == 1) {?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Quản lý sản phẩm</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="hoa.php">Hoa</a>
            </li>
            <li>
              <a href="loai_hoa.php">Loại hoa</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Quản lý đơn hàng</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti2">
            <li>
              <a href="hoa_don_da_duyet.php">Hóa đơn đã duyệt</a>
            </li>
             <li>
              <a href="hoa_don_chua_duyet.php">Hóa đơn chưa duyệt</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4" data-parent="#exampleAccordion">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Quản lý khách hàng</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti4">
            <li>
              <a href="khach_hang.php">Tất cả khách hàng</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5" data-parent="#exampleAccordion">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            <span class="nav-link-text">Thống kê</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti5">
            <li>
              <a href="thong_ke_doanh_thu.php">Doanh Thu</a>
            </li>
             <li>
              <a href="thong_ke_san_pham.php">Theo Sản Phẩm</a>
            </li>
          </ul>
        </li>
        <?php } elseif ($_COOKIE['permission'] == 0) {?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Quản lý đơn hàng</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti2">
            <li>
              <a href="hoa_don_da_duyet.php">Hóa đơn đã duyệt</a>
            </li>
             <li>
              <a href="hoa_don_chua_duyet.php">Hóa đơn chưa duyệt</a>
            </li>
          </ul>
        </li>
        <?php } elseif ($_COOKIE['permission'] == 2) {?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Quản lý sản phẩm</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="hoa.php">Hoa</a>
            </li>
            <li>
              <a href="loai_hoa.php">Loại hoa</a>
            </li>
          </ul>
        </li>
        <?php }?>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
       <?php if ($_COOKIE['permission'] == 1 || $_COOKIE['permission'] == 0) {?>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="hien_thi_don_hang dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Đơn Hàng Chưa Duyệt:</h6>
            <div class="dropdown-divider"></div>
            <div id="hien_thi">
  
            </div>
          </div>
        </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link">Xin chào
          <?php if (isset($_COOKIE['hoTen'])) {?>
            <?php echo $_COOKIE['hoTen'];?>

          <?php }?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Đăng xuất</a>
        </li>
      </ul>
    </div>
  </nav>
<?php }
}
