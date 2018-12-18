@extends('guest.master')
@section('title')
<title>Đất Đai</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/land.css">
@stop

@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p class="text-1">Vnlaw - đồng hành cùng quý khách</p>
				<h2 class="heading-1">Đất đai</h2>
				<p class="text-1">Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
				<div id="bg-black"></div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div id="content-1">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-12 headline">
						<span>VNG LAW 2018</span>
						<h3 class="heading-2">{{$kieu_1->tieu_de}}</h3>
						<a class="button-1-show" href="{{asset('datdai/'.$kieu_1->slug)}}">
							<i class="fas fa-angle-double-right"></i> Xem chi tiết

						</a>
					</div>
					<div class="col-md-8 col-sm-12 col-12 headline">
						<div class="summary">
							<p>{{$kieu_1->loi_dan}}</p>

						</div>
						<a class="button-1-hide" href="{{asset('datdai/'.$kieu_1->slug)}}">
							<i class="fas fa-angle-double-right"></i> Xem chi tiết		
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="bg-2" class="bg-f5">
		<div class="container">
			<div id="content-2">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-12">		
						<div id="images-2" class="headline" style="background: url('../images/{{$kieu_2->anh}}') no-repeat center/cover;">
						</div>
						
						<div class="bg-right-sm"></div>
						<div class="bg-left-sm"></div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 headline">
						<div class="cap-moi-2">
							<span>VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_2->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_2->loi_dan}}</p>
							<a class="button" href="{{asset('datdai/'.$kieu_2->slug)}}">
								<i class="fas fa-angle-double-right"></i> Xem chi tiết

							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-content-2">
			<div class="bg-right"></div>
			<div class="bg-left"></div>
		</div>
	</section>

	<section id="bg-content-3">
		<div class="container">
			<div id="content-2">
				<div class="row">	
					<div class="col-md-5 col-sm-12 col-12 content-3-show headline">
						<div class="cap-moi">
							<span>VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_3->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_3->loi_dan}}</p>
							<a  class="button" href="{{asset('datdai/'.$kieu_3->slug)}}">
								<i class="fas fa-angle-double-right"></i> Xem chi tiết
								
							</a>
						</div>
					</div>
					<div class="col-md-7 col-sm-12 col-12 headline">

						<div id="images-3">
							<div style="background: url('../images/{{$kieu_3->anh}}') no-repeat center/cover;width: 100%; height: 100%;" ></div>
							<div class="bg-content-3-top"></div>
							<div class="bg-content-3-bt"></div>
						</div>
					</div>
					<div class="col-md-5 col-sm-12 col-12 content-3-hide headline" >
						<div class="cap-moi">
							<span>VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_3->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_3->loi_dan}}</p>
							<a class="button" href="{{asset('datdai/'.$kieu_3->slug)}}">
								<i class="fas fa-angle-double-right"></i> Xem chi tiết
								
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop
