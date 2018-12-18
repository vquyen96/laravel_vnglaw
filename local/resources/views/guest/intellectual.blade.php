@extends('guest.master')
@section('title')
<title>Sở Hữu Trí Tuệ</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/intellectual.css">
@stop
@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p class="text-1">Vnlaw - đồng hành cùng quý khách</p>
				<h2 class="heading-1">Sở hữu trí tuệ</h2>
				<p class="text-1">Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
			</div>
		</div>
	</section>

	<div id="bg-main">
		@foreach($tri_tue as $key=>$item)
		@if($key%2 == 0)
		<section>
			<div class="content-1">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-7 col-xs-12 headline">
							<div class="gioi-thieu-1">
								<span class="span">VNG LAW 2018</span>
								<h3 class="heading-2">{{$item->tieu_de}}</h3>
								<p class="tom-tat">{{cut_string($item->loi_dan, 250)}}</p>
								<a class="button" href="{{asset('sohuutritue/'.$item->slug)}}">								
										<i class="fas fa-angle-double-right"></i> Xem chi tiết						
								</a>
							</div>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12 headline">
							<div class="full-images-1" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
								
							</div>
						</div>
					</div>
				</div>
				<div class="bg-content-1"></div>
			</div>
		</section>
		@else

		<section class="bg-f5 vng-section">
			<div class="content-2">
				<div class="container">
					<div class="row">
						
						<div class="col-md-5 col-sm-5 col-xs-12 headline">
							<div class="full-images-1" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">				
							</div>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-12 headline">
							<div class="gioi-thieu-2">
								<span class="span">VNG LAW 2018</span>
								<h3 class="heading-2">{{$item->tieu_de}}</h3>
								<p class="tom-tat">{{cut_string($item->loi_dan, 250)}}</p>
								<a class="button" href="{{asset('sohuutritue/'.$item->slug)}}">
										<i class="fas fa-angle-double-right"></i> Xem chi tiết						
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-content-2"></div>
			</div>
		</section>
		@endif
		@endforeach

		
	</div>
</div>
@stop