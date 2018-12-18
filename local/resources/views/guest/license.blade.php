@extends('guest.master')
@section('title')
<title>Giấy Phép</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/license.css">

@stop
@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p class="text-1">Vnlaw - đồng hành cùng quý khách</p>
				<h2 class="heading-1">Giấy phép</h2>
				<p class="text-1">Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
			</div>
		</div>
	</section>

	<section>
		<div id="content-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-12 headline">
						<div id="thuc-pham">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_1->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_1->loi_dan}}</p>
							<a class="button" href="{{asset('giayphep/'.$kieu_1->slug)}}">
								<i class="fas fa-angle-double-right"></i> Xem chi tiết

							</a>
						</div>
					</div>

					<div class="col-md-4 headline">
						<div class="full-images-1">
							<img src="../images/andrew-neel-218073-unsplash.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div id="content-2" class="headline">
				
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						@foreach($kieu_2 as $key=>$item)
						<li data-target="#myCarousel" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
						@endforeach
						
						
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						@foreach($kieu_2 as $key=>$item)		
						<div class="carousel-item @if($key==0) active @endif">
							<div class="ruou">
								<span class="span">VNG LAW 2018</span>
								<h3 class="heading-2">{{$item->tieu_de}}</h3>
								<p class="tom-tat">{{$item->loi_dan}}</p>
								<a class="button" href="{{asset('giayphep/'.$item->slug)}}"style="color: #fff;">
									<i class="fas fa-angle-double-right"></i> Xem chi tiết
									
								</a>
							</div>
						</div>	
						@endforeach

					</div>

					
				</div>
				<div id="click">
					<!-- Left and right controls -->
					<a class="left" href="#myCarousel" data-slide="prev">
						<div class="button-up">
							<img src="../images/icon-up.png">
						</div>
					</a>
					<a class="right" href="#myCarousel" data-slide="next">				
						<div class="button-down">
							<img src="../images/icon-down.png">
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div id="content-3">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-12">
						<div class="full-images-2 headline" style="background: url('../images/{{$kieu_3->anh}}') no-repeat center/cover;">
							
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-12 headline">
						<div id="phong-chay">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_3->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_3->loi_dan}}</p>
							<a class="button" href="{{asset('giayphep/'.$kieu_3->slug)}}">
								<i class="fas fa-angle-double-right"></i> Xem chi tiết
								
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div id="content-4">
			<div class="container-fluid headline">
				<div id="content-4-left">
					<span class="span">VNG LAW 2018</span>
					<h3 class="heading-2">{{$kieu_4->tieu_de}}</h3>
					<p class="tom-tat">{{$kieu_4->loi_dan}}</p>
					<a class="button" href="{{asset('giayphep/'.$kieu_4->slug)}}" style="color: #fff;">
						<i class="fas fa-angle-double-right"></i> Xem chi tiết

					</a>
				</div>
				<div id="content-4-right">
					<div class="full-images-4">
						<img src="../images/{{$kieu_4->anh}}">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="content-5">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-12 headline">
						<div id="du-hoc">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_5->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_5->loi_dan}}</p>
							<a class="button" href="{{asset('giayphep/'.$kieu_5->slug)}}">								
								<i class="fas fa-angle-double-right"></i> Xem chi tiết							
							</a>
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-12 headline">
						<div class="full-images-5">
							<div style="background: url('../images/{{$kieu_5->anh}}') no-repeat center/cover; width: 90%;height: 100%;margin-left: 10%;"></div>
							<div id="bg-5"></div>
						</div>
					</div>
				</div>
			</div>
			
		</div> 
	</section>
</div>
@stop