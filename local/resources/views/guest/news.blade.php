@extends('guest.master')
@section('title')
<title>{{$du_lieu->tieu_de}}</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/news.css">
@stop

@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p>Vnlaw - đồng hành cùng quý khách</p>
				<h2>{{$du_lieu->tieu_de}}</h2>
				<p>Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
			</div>
		</div>
	</section>
	<div class="container">
		

	</div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div id="content">
						<div id="title">
							<h2>{{$du_lieu->tieu_de}}</h2>
							<span>{{$du_lieu->updated_at}}</span>
						</div>
						<div id="content-news">
							{!! $du_lieu->noi_dung!!}
						</div>


						<div id="news-value">
							<div id="title-value">
								<h2>Tin bạn quan tâm</h2>
							</div>
							@foreach($tin_noi_bat as $item)
							<a href="{{asset('tin-tuc/'.$item->slug)}}">
								<div class="value">
									<div class="full-images-value">
										<img src="../images/{{$item->anh}}">
									</div>
									<div class="title">
										<p>{{cut_string($item->tieu_de, 100)}}</p>
									</div>
									<div class="date-time">
										<p>{{$item->updated_at}}</p>
									</div>
									<div class="summary">
										<p>{!!cut_string($item->loi_dan, 180)!!}</p>
									</div>
								</div>
							</a>
							@endforeach

							
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div id="side-bar">
						<h2>Tin mới nhất</h2>
						@foreach($tin_chung as $item)
						<a href="{{asset('tin-tuc/'.$item->slug)}}">
							<div class="news">
								<div class="full-images-news">
									<img src="../images/{{$item->anh}}">
								</div>
								<div class="title">
									<p>{{cut_string($item->tieu_de, 100)}}</p>
								</div>
								<div class="date-time">
									<p>{{$item->updated_at}}</p>
								</div>
								<div class="summary">
									<p>{!!cut_string($item->loi_dan, 180)!!}</p>
								</div>
							</div>
						</a>
						@endforeach
						
						<h2>Tin pháp luật</h2>
						@foreach($tin_phap_luat as $item)
						<a href="{{asset('tin-tuc/'.$item->slug)}}">
							<div class="news">
								<div class="full-images">
									<img src="../images/{{$item->anh}}">
								</div>
								<div class="title">
									<p>{{cut_string($item->tieu_de, 100)}}</p>
								</div>
								<div class="date-time">
									<p>{{$item->updated_at}}</p>
								</div>
								<div class="summary">
									<p>{!!cut_string($item->loi_dan, 180)!!}</p>
								</div>
							</div>
						</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop