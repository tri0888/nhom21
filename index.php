<?php
$string =  '<!DOCTYPE html>'.
'<html lang="vi">'.
''.
'<head>'.
'	<meta charset="UTF-8">'.
'	<meta name="viewport" content="width=device-width, initial-scale=1.0">'.
'	<meta http-equiv="X-UA-Compatible" content="ie=edge">'.
''.
'	<title>Thế giới LAPTOP</title>'.
'	<link rel="shortcut icon" href="img/favicon.ico" />'.
''.
'	<!-- Load font awesome icons -->'.
'	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"'.
'	 crossorigin="anonymous">'.
''.
'	<!-- owl carousel libraries -->'.
'	<link rel="stylesheet" href="js/owlcarousel/owl.carousel.min.css">'.
'	<link rel="stylesheet" href="js/owlcarousel/owl.theme.default.min.css">'.
'	<script src="js/Jquery/Jquery.min.js"></script>'.
'	<script src="js/owlcarousel/owl.carousel.min.js"></script>'.
''.
'	<!-- tidio - live chat -->'.
'	<!-- <script src="//code.tidio.co/bfiiplaaohclhqwes5xivoizqkq56guu.js"></script> -->'.
''.
'	<!-- our files -->'.
'	<!-- css -->'.
'	<link rel="stylesheet" href="css/style.css">'.
'	<link rel="stylesheet" href="css/topnav.css">'.
'	<link rel="stylesheet" href="css/header.css">'.
'	<link rel="stylesheet" href="css/banner.css">'.
'	<link rel="stylesheet" href="css/taikhoan.css">'.
'	<link rel="stylesheet" href="css/trangchu.css">'.
'	<link rel="stylesheet" href="css/home_products.css">'.
'	<link rel="stylesheet" href="css/pagination_phantrang.css">'.
'	<link rel="stylesheet" href="css/footer.css">'.
'	'.
'	<!-- js -->'.
'	<script src="data/products.js"></script>'.
'	<script src="js/classes.js"></script>'.
'	<script src="js/dungchung.js"></script>'.
'	<script src="js/trangchu.js"></script>'.
''.
'</head>'.
''.
'<body>'.
'	<img src="https://cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/homev2/fs-2710-3110-theme/desk/tgdd/banner-title.gif" alt="" style="width: 100%;">'.
'	<!--script> addTopNav(); </script-->'.
''.
'	<section>'.
'		<script> addHeader(); </script>'.
''.
'		<br>'.
'		<div class="companyMenu group flexContain"></div>'.
''.
'		<div class="flexContain">'.
''.
'			<div class="pricesRangeFilter dropdown">'.
'				<button class="dropbtn">Giá tiền</button>'.
'				<div class="dropdown-content"></div>'.
'			</div>'.
''.
'			<div class="starFilter dropdown">'.
'				<button class="dropbtn">Số lượng sao</button>'.
'				<div class="dropdown-content"></div>'.
'			</div>'.
''.
'			<div class="sortFilter dropdown">'.
'				<button class="dropbtn">Sắp xếp</button>'.
'				<div class="dropdown-content"></div>'.
'			</div>'.
'			'.
'		</div> <!-- End khung chọn bộ lọc -->'.
''.
'		<div class="choosedFilter flexContain">'.
'			<a id="deleteAllFilter" style="display: none;">'.
'				<h3>Xóa bộ lọc</h3>'.
'			</a>'.
'		</div> <!--Những bộ lọc đã chọn -->'.
'		<h1 id="demo" class="homeproduct group flexContain" style="color: red;"></h1>'.
'		<hr>'.
''.
'		<!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->'.
'		<div class="contain-products" style="display:none"> '.
'			<div class="filterName">'.
'				<input type="text" placeholder="Lọc trong trang theo tên..." onkeyup="filterProductsName(this)">'.
'			</div> <!-- End FilterName -->'.
''.
'			<ul id="products" class="homeproduct group flexContain">'.
'				<div id="khongCoSanPham">'.
'					<i class="fa fa-times-circle"></i>'.
'					Không có sản phẩm nào'.
'				</div> <!-- End Khong co san pham -->'.
'			</ul><!-- End products -->'.
''.
'			<div class="pagination"></div>'.
'		</div>'.
'	'.
'		<!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->'.
'		<div class="contain-khungSanPham" ></div>'.
''.
'	</section> <!-- End Section -->'.
''.
'	<script>'.
'		addContainTaiKhoan(); addPlc();'.
'		'.
'	</script>'.
''.
'	<div class="footer"><script>addFooter();</script></div>'.
''.
'	<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>'.
'	'.
'</body>'.
''.
'</html>';

 echo $string; 
?>