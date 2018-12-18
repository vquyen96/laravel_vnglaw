<!DOCTYPE html>
<html>
<head>
	@yield('title')
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://demo-cgroup.com/public/layout/frontend/img/Layer 2.png">
	<base href="{{ asset('local/storage/app/public/guest') }}/">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/master.css">

	@yield('css')
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<section id="header-desktop">
				<div class="container">
					<div class="row">
						<div id="logo">
							<a href="{{asset('/')}}"><img src="../images/Logo.png"></a>
						</div>

						<div id="menu">
							<ul>
								<li><a @if(Request::segment(1)=='introduce') class="active" @endif href="{{asset('introduce')}}">Giới thiệu</a></li>
								<li><a @if(Request::segment(1)=='enterprise') class="active" @endif href="{{asset('enterprise')}}">Doanh nghiệp</a></li>
								<li><a @if(Request::segment(1)=='land') class="active" @endif href="{{asset('land')}}">Đất đai</a></li>
								<li><a @if(Request::segment(1)=='license') class="active" @endif href="{{asset('license')}}">Giấy phép</a></li>
								<li><a @if(Request::segment(1)=='intellectual') class="active" @endif href="{{asset('intellectual')}}">Sở hữu trí tuệ</a></li>
								<li><a @if(Request::segment(1)=='list-news') class="active" @endif href="{{asset('list-news')}}">Tin tức</a></li>
								<li><a @if(Request::segment(1)=='contact') class="active" @endif href="{{asset('contact')}}">Liên hệ</a></li>
							</ul>
						</div>

						<div id="hotline">
							<a>Hotline: (+84)46 260 4463</a>
						</div>
					</div>
				</div>
			</section>

			{{-- mobile header --}}
			<section id="header-sm">
				<div class="container">
					<div class="row">
						<div id="logo">
							<a href="{{asset('/')}}"><img src="../images/Logo.png"></a>
						</div>

						<div class="respon-menu">
							<div class="menu-button">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div id="menu-mobile">
				<div id="logo-menu">
					<a href="{{asset('/')}}"><img src="../images/Logo.png"></a>
				</div>
				
				<div id="menu-container">
					<div class="close-menu">
						<div class="close-button">
							<img src="../images/menu.png">
						</div>
					</div>
					<ul>
						<li><a @if(Request::segment(1)=='introduce') class="active" @endif href="{{asset('introduce')}}">Giới thiệu</a></li>
						<li><a @if(Request::segment(1)=='enterprise') class="active" @endif href="{{asset('enterprise')}}">Doanh nghiệp</a></li>
						<li><a @if(Request::segment(1)=='land') class="active" @endif href="{{asset('land')}}">Đất đai</a></li>
						<li><a @if(Request::segment(1)=='license') class="active" @endif href="{{asset('license')}}">Giấy phép</a></li>
						<li><a @if(Request::segment(1)=='intellectual') class="active" @endif href="{{asset('intellectual')}}">Sở hữu trí tuệ</a></li>
						<li><a @if(Request::segment(1)=='list-news') class="active" @endif href="{{asset('list-news')}}">Tin tức</a></li>
						<li><a @if(Request::segment(1)=='contact') class="active" @endif href="{{asset('contact')}}">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</div>

		@yield('main')

		<div id="footer">
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="map-bg">
							<div id="map"></div>
							<div id="opacity"></div>
							<div id="footer-bottom">
							</div>
						</div>
						<div class="orange-bg d-lg-block d-none">
							<div id="bg-sign-up"></div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div id="headquarters">
								<div class="row">
									<div class="col-lg-4 col-12">
										<h3>Trụ sở chính tại Hà Nội</h3>
										<p>Địa chỉ: Tầng 5, Tòa Diamond Flower Tower, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội</p>
										<p>Tel: 046 260 4463</p>
										<p>Hotline: 0971 026 678</p>
										<p>Email: info&#64;vnglaw.vn</p>
									</div>
									<div class="col-lg-4 d-lg-block d-none">
										<h3>Chi nhánh miền Trung</h3>
										<p>Địa chỉ : Số 173 Nguyễn Văn Linh, Phường Nam Dương, Quận Hải Châu, Thành phố Đà Nẵng</p>
										<p>Tel: 0511 399 6886</p>
										<p>Hotline: 0971 026 678</p>
										<p>Email: info&#64;vnglaw.vn</p>
									</div>
									<div class="col-lg-4 d-lg-block d-none">
										<h3>Chi nhánh miền Nam</h3>
										<p>Địa chỉ: 115 Trần Nhân Tông, Phường 15, Quận Tân Bình, Thành phố Hồ Chí Minh</p>
										<p>Tel: 0838 152 352</p>
										<p>Hotline: 0971 026 678</p>
										<p>Email: info&#64;vnglaw.vn</p>
									</div>

								</div>
							</div>

							<div id="footer-bottom">
								<p>© Copyright 2015 VngLaw. Designed & developed by- VngMedia</p>
							</div>
						</div>
						<div class="col-lg-3 d-lg-block d-none">
							<div id="contact">
								<h3>Đăng kí nhận bản tin</h3>
								<p>Nhập địa chỉ email của bạn và nhấn / trở lại để đăng ký. Bạn sẽ được thông báo về các sự kiện sắp tới.</p>
								<form method="post" action="{{asset('dangkinhanbantin/add')}}">
									<input type="email" name="email" required="" placeholder="Nhập địa chị email">
									<input type="submit" name="" value="Đăng kí">
									{{csrf_field()}}
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<script>
		function initMap() {
			var uluru = {lat: 21.005368, lng: 105.8025841};
			var map = new google.maps.Map(
				document.getElementById('map'), {zoom: 17, center: uluru});
			var marker = new google.maps.Marker({position: uluru, map: map});
		}

	</script>

	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOc88r0unTZkaOlPWE9oYQ6l6_WpZvUAY&callback=initMap">
	</script>
	<script src="js/scrollanimate.js"></script>
	<script type="text/javascript">	ScrollReveal({ reset: true });</script>
	<script type="text/javascript" src="js/master.js"></script>
@yield('script')
</body>
</html>