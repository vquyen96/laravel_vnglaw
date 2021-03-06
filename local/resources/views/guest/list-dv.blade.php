@extends('guest.master')
@section('title')
<title>Thành Lập Doanh Nghiệp</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/list-news.css">
@stop

@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p>Vnlaw - đồng hành cùng quý khách</p>
				<h2>Dịch vụ thành lập doanh nghiệp</h2>
				<p>Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
			</div>
		</div>
	</section>
	<div class="container">
		<div id="content">
			<div class="row">
				@foreach($tin_tuc as $item)
				<div class="col-md-4 col-sm-6 col-xs-12 headline">
					<div class="news">
						<div class="full-images">
							<a href="{{asset('thanh-lap-doanh-nghiep/'.$item->slug)}}">
								<img src="../images/{{$item->anh}}">
							</a>
						</div>
						<div class="title">
							<p>{{cut_string($item->tieu_de,120)}}</p>
						</div>
						<div class="date-time">
							<p>{{$item->updated_at}}</p>
						</div>
						<div class="summary">
							<p>{!!cut_string($item->loi_dan,120)!!}</p>
						</div>
						<a class="button" href="{{asset('thanh-lap-doanh-nghiep/'.$item->slug)}}">
							<img src="../images/button.png" width="12px" height="10px">
							<p>Xem chi tiết</p>
						</a>
					</div>
				</div>
				@endforeach



			</div>
			{{$tin_tuc->links()}}
			
		</div>
	</div>
	<section>
		
	</section>
</div>
@stop