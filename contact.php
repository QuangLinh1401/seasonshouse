<?php
require_once("./db/database_sql.php");
function authenToken()
{
	if (isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];
		if (empty($token)) {
			return null;
		}
	} else {
		return null;
	}
	$query = "SELECT nguoidung.* from nguoidung,tokens where nguoidung.email=tokens.user_email and tokens.token='$token'";
	$list = executeResult($query);
	if ($list != null && count($list) > 0) {
		return $list[0];
	}

	return null;
}
$user = authenToken();
$username = "";
if ($user == null) {
	$status_user = false;
} else {
	$username = $user['username'];
	$status_user = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kết Nối</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<!-- Top Bar -->
			<div class="top_bar" style="background-color: #832fb4;">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<a href="callto:0963466159" class="phone" style="font-size: 12px;">+84 963466159</a>
							<div class="social">
								<ul class="social_list">
									<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="https://www.facebook.com/quanglinh.140101"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="user_box ml-auto">
								<div class="user_box_login user_box_link" id="dangky"><a href="./login.php">Đăng Nhập</a></div>
								<div class="user_box_register user_box_link" id="dangnhap"><a href="./register.php">Đăng Ký</a></div>
								<div class="user_box_register user_box_link" id="user"><a href="./canhan.php"><img id="user_avata" src="<?=$user['avatar']?>" alt="avatar"><?= $username ?></a></div>
								<div class="user_box_logout user_box_link" id="dangxuat"><a href="./logout.php"> Đăng xuất</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Seasons House</a></div>
							</div>
							<div class="main_nav_container ml-auto">
								<ul class="main_nav_list">
									<li class="main_nav_item"><a href="indexx.php">Trang Chủ</a></li>
									<li class="main_nav_item"><a href="offers.php">MENU</a></li>
									<li class="main_nav_item"><a class="header_active" href="contact.php">Kết Nối</a></li>
								</ul>
							</div>
							<div class="content_search ml-lg-0 ml-auto">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
									<g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
										s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
										C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
										M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
										c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
											</g>
										</g>
										<g>
											<g>
												<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
										c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
										C-2.019,484.77-2.019,497.865,6.057,505.942z" />
											</g>
										</g>
									</g>
								</svg>
							</div>

							<form id="search_form" class="search_form bez_1">
								<input type="search" class="search_content_input bez_1">
							</form>

							<div class="hamburger">
								<i class="fa fa-bars trans_200"></i>
							</div>
							<div class="car" style="display: flex;">
								<a href="giohang.php">
									<img style="width: 30px; height: 30px; justify-content: right;margin-left: 20px; margin-top: 10px;" src="https://cdn-icons-png.flaticon.com/512/726/726496.png" alt="cart">
								</a>
								<a href="giohang.php">
									<?php
									$cart = [];
									if (isset($_COOKIE['cart'])) {
										$json = $_COOKIE['cart'];
										$cart = json_decode($json, true);
									}

									$count = 0;
									for ($i = 0; $i < count($cart); $i++) {
										$count += $cart[$i]['num'];
									}
									?>
									<div style="color: rgb(255, 255, 255); font-weight: 700; margin-left: 2px; margin-bottom: 10px;font-size: 20px;border-radius: 50%; margin-bottom: 30px; background-color: brown; width: 18px;height: 18px; text-align: center;font-size: small;">
										<?= $count ?>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</nav>

		</header>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="indexx.php"><img src="images/logo.png" alt="Ảnh"></a></div>
				<ul>
					<li class="menu_item"><a href="indexx.php">Trang Chủ</a></li>
					<li class="menu_item"><a href="offers.php">MENU</a></li>
					<li class="menu_item"><a href="contact.php">Kết Nối</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
			<div class="home_content">
				<div class="home_title">Kết Nối</div>
			</div>
		</div>

		<!-- Contact -->

		<div class="contact_form_section">
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- Contact Form -->
						<div class="contact_form_container">
							<div class="contact_title text-center">Kết nối Với Chúng Tôi</div>
							<form action="https://formspree.io/f/mrgrwkgb" method="POST" id="contact_form" class="contact_form text-center">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" name="ten" placeholder="Họ Và tên" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" name="email" placeholder="E-mail" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_subject" class="contact_form_subject input_field" name="tilte" placeholder="Tiêu Đề" required="required" data-error="Subject is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Nội Dung" required="required" data-error="Please, write us a message."></textarea>
								<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Gửi Tin Nhắn<span></span><span></span><span></span></button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- About -->
		<div class="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">

						<!-- About - Image -->

						<div class="about_image">
							<img src="images/man.png" alt="">
						</div>

					</div>

					<div class="col-lg-4">

						<!-- About - Content -->

						<div class="about_content">
							<div class="logo_container about_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Seasons House</a></div>
							</div>
							<p class="about_text">Rất cảm ơn bạn đã đến với chúng tôi, bạn không cần phải lo lắng làm sao để kiếm một món ăn ngon, nước uống thật tuyệt vời, nhanh chóng, tiện lợi vì đã có Seasons House đang chờ được phục vụ bạn !</p>
							<ul class="about_social_list">
								<li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="about_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>

					</div>

					<div class="col-lg-3">

						<!-- About Info -->

						<div class="about_info">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<a class="d-flex" href="https://www.google.com/maps/place/3+V%C4%A9nh+Ph%C3%BA+42,+V%C4%A9nh+Ph%C3%BA,+Thu%E1%BA%ADn+An,+B%C3%ACnh+D%C6%B0%C6%A1ng/@10.8862328,106.6958438,17z/data=!3m1!4b1!4m5!3m4!1s0x3174d7dd3c6dc465:0x290e2f524a6dafb0!8m2!3d10.8862328!4d106.6980325">
										<div>
											<div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
										</div>
										<div class="contact_info_text">3/2 Vĩnh Phú 42, Phường Lái Thiêu, TP.Thuận An, Tỉnh Bình Dương</div>
									</a>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<a class="d-flex" href="callto:0963466159">
										<div>
											<div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
										</div>
										<div class="contact_info_text">0963466159</div>
									</a>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
									</div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">seasonhouse@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div>
									</div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.seasonhouse.com</a></div>
								</li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_content footer_about">
								<div class="logo_container footer_logo">
									<div class="logo"><a href="#"><img src="images/logo.png" alt="">Seasons House</a></div>
								</div>
								<p class="footer_about_text">Rất cảm ơn bạn đã đến với chúng tôi, bạn không cần phải lo lắng làm sao để kiếm một món ngon, một thức uống giải khát vì đã có Seasons House.</p>
								<ul class="footer_social_list">
									<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_title">Bài Review</div>
							<div class="footer_content footer_blog">

								<!-- Footer blog item -->
								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img style="width: 65px; height: 65px" src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.html">Món ăn tuyệt vời nhất</a></div>
										<div class="footer_blog_date">08/09/2021</div>
									</div>
								</div>

								<!-- Footer blog item -->
								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img style="width: 65px; height: 65px" src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.html">Sự mới lạ trong tôi</a></div>
										<div class="footer_blog_date">06/07/2021</div>
									</div>
								</div>

								<!-- Footer blog item -->
								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img style="width: 65px; height: 65px" src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.html">Tráng miệng của năm</a></div>
										<div class="footer_blog_date">18/10/2021</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_title">Links</div>
							<div class="footer_content footer_tags">
								<ul class="tags_list clearfix">
									<li class="tag_item"><a href="#">Ẩm Thực</a></li>
									<li class="tag_item"><a href="#">Tráng Miệng</a></li>
									<li class="tag_item"><a href="#">Ăn Vặt</a></li>
									<li class="tag_item"><a href="#">Nước Uống</a></li>
									<li class="tag_item"><a href="#">Bánh Kem</a></li>
									<li class="tag_item"><a href="#">Món Hàn Quốc</a></li>
									<li class="tag_item"><a href="#">Giải khát</a></li>
									<li class="tag_item"><a href="#">Seasons House</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_title">Liên hệ</div>
							<div class="footer_content footer_contact">
								<ul class="contact_info_list">
									<li class="contact_info_item d-flex flex-row">
										<a class="d-flex" href="https://www.google.com/maps/place/3+V%C4%A9nh+Ph%C3%BA+42,+V%C4%A9nh+Ph%C3%BA,+Thu%E1%BA%ADn+An,+B%C3%ACnh+D%C6%B0%C6%A1ng/@10.8862328,106.6958438,17z/data=!3m1!4b1!4m5!3m4!1s0x3174d7dd3c6dc465:0x290e2f524a6dafb0!8m2!3d10.8862328!4d106.6980325">
											<div>
												<div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
											</div>
											<div class="contact_info_text">3/2 Vĩnh Phú 42, Phường Lái Thiêu, TP.Thuận An, Tỉnh Bình Dương</div>
										</a>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<a class="d-flex" href="callto:0963466159">
											<div>
												<div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
											</div>
											<div class="contact_info_text">0963466159</div>
										</a>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
										</div>
										<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">seasonhouse@gmail.com</a></div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div>
											<div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div>
										</div>
										<div class="contact_info_text"><a href="https://colorlib.com">www.seasonhouse.com</a></div>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 order-lg-1 order-2  ">
						<div class="copyright_content d-flex flex-row align-items-center">
							<div>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Nhóm 11 &copy;<script>
									document.write(new Date().getFullYear());
								</script> Tất cả đều được tạo ra từ <i class="fa fa-heart-o" aria-hidden="true"></i><a href="" target="_blank">Quang Linh, Như Phượng, Bích Phượng</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>
					<div class="col-lg-9 order-lg-2 order-1">
						<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
							<div class="footer_nav">
								<ul class="footer_nav_list">
									<li class="footer_nav_item"><a  href="indexx.php">Trang Chủ</a></li>
									<li class="footer_nav_item"><a href="offers.php">MENU</a></li>
									<li class="footer_nav_item"><a  href="contact.php">Kết Nối</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<script>
		var status_user = '<?= $status_user ?>';
		if (status_user == '1') {
			document.querySelector("#dangky").style.display = "none";
			document.querySelector("#dangnhap").style.display = "none";
		} else {
			document.querySelector("#dangxuat").style.display = "none";
			document.querySelector("#user").style.display = "none";
		}
	</script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/contact_custom.js"></script>


</body>

</html>