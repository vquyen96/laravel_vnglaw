@extends('guest.master')
@section('title')
<title>Trang Chủ</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/home.css">
@stop

@section('main')
<div id="main">
	<section>
		<div id="myCarousel-4" class="carousel slide vert" data-ride="carousel">
			<!-- Indicators -->
			<div class="carousel-4-indicator-bg">
				<ol class="carousel-indicators">
					@foreach($dich_vu as $key=>$item)
					<li data-target="#myCarousel-4" data-slide-to="{{$key}}" @if($key==0)class="active"@endif></li>			
					@endforeach
				</ol>
			</div>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				@foreach($dich_vu as $key=>$item)
				<div class="carousel-item @if($key==0) active @endif">
					<div class="bg-main-top" style="background: url('../images/{{$item->anh}}') no-repeat; background-size: cover;">
						<div class="container main-top">
							<p class="text-1">Vnlaw - đồng hành cùng quý khách</p>
							<h2 class="heading-1">{{$item->tieu_de}}</h2>
							<p class="text-1">{{$item->loi_dan}}</p>
							<a class="button-1 mt-lg-4" href="{{asset('dich-vu/'.$item->slug)}}">
								<i class="fas fa-angle-double-right"></i> Xem chi tiết
							</a>
							<div class="click-top">
								<!-- Left and right controls -->
								<a class="left" href="#myCarousel-4" data-slide="next">
									<div class="button-up">
										<img src="../images/icon-up.png">
									</div>
								</a>
								<a class="right" href="#myCarousel-4" data-slide="prev">
									<div class="button-down">
										<img src="../images/icon-down.png">
									</div>
								</a>
							</div>	
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<section id="content-1" class="bg-f5" >
		<div class="container position-relative">
			<div class="row">
				<div id="deco-1"></div>
				<div class="col-lg-6 col-md-6 col-12 offset-md-1 headline">
					<div id="myCarousel-1" class="carousel slide carousel-fade carousel-1" data-ride="carousel">
						<div class="carousel-inner">
							@foreach($ly_do as $key=>$item)
							<div class="carousel-item @if($key==0) active @endif">
								<div class="full-images-1" >
									<div class="img-bg" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;"></div>
								</div>
							</div>
							@endforeach
						</div>

						<!-- Indicators -->
						<ol class="carousel-indicators">
							@foreach($ly_do as $key=>$item)	
							<li data-target=".carousel-1" onclick="$('#sub-carousel-1').carousel({{$key}})" data-slide-to="{{$key}}" @if($key==0) class="active" @endif>{{$key+1}}</li>
							@endforeach
						</ol>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12 headline">
					<div class="noi-dung-1">
						<span class="span">VNG LAW 2018</span>
						<h3 class="heading-2">Lý do chọn lựa VNGroup</h3>
						<div id="sub-carousel-1" class="carousel slide carousel-fade carousel-1" data-ride="carousel">
							<div class="carousel-inner">
								@foreach($ly_do as $key=>$item)
								<div class="carousel-item @if($key==0) active @endif">
									<p class="heading-3">{{$item->tieu_de}}</p>
									<p class="tom-tat">{{$item->noi_dung}}</p>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="content-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-12 headline">
					<div class="noi-dung-2">
						<span class="span">DỊCH VỤ</span>
						<h3 class="heading-2">Doanh nghiệp</h3>
						<p class="tom-tat">Với đội ngũ Luật sư và Chuyên viên pháp lý giàu kinh nghiệm Văn phòng luật sư VNG Việt Nam luôn đi đầu trong việc cập nhật quy định pháp luật mới để nâng cao chất lượng dịch vụ, hướng tới tiêu chí ba nhất: CHẤT LƯỢNG CAO NHẤT - CHI PHÍ THẤP NHẤT - DỊCH VỤ CHUYÊN NGHIỆP NHẤT</p>
						<a  class="button" href="{{asset('enterprise')}}">
							<i class="fas fa-angle-double-right"></i> Xem chi tiết
						</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 offset-sm-2 col-12 headline">
					<div class="images-2">
						<div id="myCarousel-2" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								@foreach($baner as $key=>$item)
								<div class="carousel-item @if($key == 0) active @endif">
									<div class="full-images-2" style="background-image: url( {{ asset('local/storage/app/public/images/'.$item->anh) }} );">
										<div class="thong-tin-2">
											<h3>{{$item->tieu_de}}</h3>
											<span>VnGLaw 2018</span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<ol class="carousel-indicators">
								@foreach($baner as $key=>$item)									
								<li data-target="#myCarousel-2" data-slide-to="{{$key}}" @if($key==0) class="active" @endif>{{$key+1}}</li>									
								@endforeach
							</ol>
							<div class="click-1">
								<!-- Left and right controls -->
								<a class="left" href="#myCarousel-2" data-slide="prev">
									<div class="button-up-1">
										<img  src="../images/button3.png">
									</div>
								</a>
								<a class="right" href="#myCarousel-2" data-slide="next">				
									<div class="button-down-1">
										<img src="../images/button4.png">
									</div>
								</a>
							</div>
							<!-- Left and right controls -->
						</div>
					</div>
				</div>
				<div class="col-12 headline">
					<div class="noi-dung-2-sm">
						<span class="span">DỊCH VỤ</span>
						<h3 class="heading-2">Doanh nghiệp</h3>
						<p class="tom-tat">Với đội ngũ Luật sư và Chuyên viên pháp lý giàu kinh nghiệm Văn phòng luật sư VNG Việt Nam luôn đi đầu trong việc cập nhật quy định pháp luật mới để nâng cao chất lượng dịch vụ, hướng tới tiêu chí ba nhất: CHẤT LƯỢNG CAO NHẤT - CHI PHÍ THẤP NHẤT - DỊCH VỤ CHUYÊN NGHIỆP NHẤT</p>
						<a class="button" href="{{asset('enterprise')}}">
							<i class="fas fa-angle-double-right"></i> Xem chi tiết
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="bg-content-2"></div>
	</section>

	<section id="content-3" class="bg-f5">
		<div class="container">
			<div class="row">
				@foreach($nhan_vien as $key=>$item)
				@if($key==0)
				<div class="col-md-4 col-sm-12 col-12 headline">
					<div class="staff" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
						<div class="full-images-3 headline" >
							<div class="thong-tin">
								<p>{{$item->ten_nv}}</p>
								<span>({{$item->chuc_vu}})</span>
							</div>
						</div>
					</div>
				</div>
				@else
				<div class="col-md-4 col-sm-12 col-12 staff-hide headline">
					<div class="staff">
						<div class="full-images-3 headline" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
							<div class="thong-tin">
								<p>{{$item->ten_nv}}</p>
								<span>({{$item->chuc_vu}})</span>
							</div>
						</div>
					</div>
				</div>
				@endif
				@endforeach

				<div class="col-md-4 col-sm-12 col-12 headline">
					<div class="tu-van">
						<span class="span">VNG LAW 2018</span>
						<h3 class="heading-2">Chuyên viên tư vấn</h3>
						<p class="tom-tat">Với đội ngũ Luật sư và Chuyên viên pháp lý giàu kinh nghiệm Văn phòng luật sư VNG Việt Nam luôn đi đầu trong việc cập nhật quy định pháp luật mới để nâng cao chất lượng dịch vụ, hướng tới tiêu chí ba nhất: CHẤT LƯỢNG CAO NHẤT - CHI PHÍ THẤP NHẤT - DỊCH VỤ CHUYÊN NGHIỆP NHẤT</p>
					</div>
				</div>
			</div>
		</div>
		<div id="bg-content-3"></div>
	</section>

	<section id="content-4" class="headline">
		<div class="container headline">
			<div id="myCarousel" class="carousel slide vert">
				<!-- Carousel items -->
				<div class="carousel-inner">
					@foreach($y_kien as $key=>$item)

					<div class="@if($key == 0) active @endif carousel-item">
						<div class="noi-dung-4">
							<div id="y-kien">
								<div class="position-relative">
									<span class="span">DỊCH VỤ</span>
									<h3 class="heading-2">Ý kiến khách hàng</h3>
									<p class="noi-dung-y-kien">“{{cut_string($item->y_kien,350)}}”</p>
									<p class="name-4">{{$item->ten_kh}}</p>
									<p class="chuc-vu-4">{{$item->chuc_vu}}</p>
								</div>
							</div>
							<div id="img-4">
								<div class="full-images-4" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
									
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<!-- Carousel nav -->
				<div class="click-1">
					<!-- Left and right controls -->
					<a class="left" href="#myCarousel" data-slide="prev">
						<i class="fas fa-angle-up"></i>
					</a><br/>
					<a class="right" href="#myCarousel" data-slide="next">				
						<i class="fas fa-angle-down"></i>
					</a>
				</div>

			</div>
		</div>
	</section>
</div>
@stop
