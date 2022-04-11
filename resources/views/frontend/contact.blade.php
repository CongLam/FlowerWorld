@extends('frontend/layout')
@section('title', 'Contact')
@section('content')

		<div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcrumb-single blog_top_area">
							<ul id="breadcrumbs">
								<li><a href=""><i class="fa fa-home"></i>Trang chủ</a></li>
								<li><span>Ι</span></li>
								<li>Liên hệ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Start google map area -->
		<div class="google_map_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="googleMap" style="width:100%;height:433px;"></div>
					</div>
				</div>
			</div>
		</div>
		<!--End google map area -->
		<!--Start company details area -->
		<div class="company_contact_details">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="get_touch">
							 <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
							 <p>Nếu muốn biết thêm chi tiết về các sản phẩm laptop hoặc các thông tin khác, hãy liên hệ ngay với chúng tôi qua form thông tin dưới đây hoặc gọi trực tiếp qua hotline!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="contact_us_info">
                            @include('errors.note')
                            <form method="POST">
                                @csrf
                                <input type="text" required name="name" placeholder="Tên *">
                                <input type="text" required name="phone" placeholder="Số điện thoại *">
                                <input type="text" required name="email" placeholder="Email *">
                                <input type="text" required name="subject" placeholder="Tiêu đề">
                                <textarea required name="message" placeholder="Nội dung *" rows="10" cols="30"></textarea>
                                <div class="controls">
                                    <button type="submit" title="Submit Review" class="btn btn-large btn-primary submit" onclick="return confirm('Gửi thông tin liên hệ cho chúng tôi?')">Gửi!</button>
                                </div>
                            </form>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="company_right_area">
							<h6>THÔNG TIN</h6>
							<div class="contact_addon_content">
								<p><span><i class="fa fa-map-marker"></i></span> MinhAnhShop 28 Đường Thanh Bình, Hà Đông, Hà Nội, VN</p>
								<p><span><i class="fa fa-envelope"></i></span> minhanhshop@gmail.com</p>
								<p><span><i class="fa fa-phone"></i></span> (+84) 345678908</p>
							</div>
                        </div>
						<div class="company_right_hour">
							<h6>GIỜ LÀM VIỆC</h6>
						   <p>Thứ 2 &ndash; Chủ nhật: 9h sáng đến 21h tối</p>
						   <div class="single_icons_contact">
								<ul id="social_contact_icon">
									<li><a href="#" class="black-tooltip s-1" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Facebook"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#" class="black-tooltip s-2" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="black-tooltip s-3" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Google-plus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="black-tooltip s-4" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="black-tooltip s-5" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Behance"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- google map API JS  -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(21.027763, 105.834160)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map.png',
                map: map
              });

            }
            google.maps.event.addDomListener(window, 'load', initialize);
		</script>

@endsection
