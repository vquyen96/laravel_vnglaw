@extends('guest.master')
@section('title')
<title>Doanh Nghiệp</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/enterprise.css">
@stop

@section('main')
<div id="main">
	<section id="main-top">
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					@foreach($kieu_0 as $key=>$item)
					
					<div class="carousel-item @if($key==0) active @endif ">
						<div class="bg-main-top" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
							<div class="container content-top">
								<p class="text-1">Vnlaw - đồng hành cùng quý khách</p>
								<h2 class="heading-1">{{$item->tieu_de}}</h2>
								<p class="text-1">Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
								<a class="button-1" href="{{asset('doanh-nghiep/'.$item->slug)}}">						
									<i class="fas fa-angle-double-right"></i> Xem chi tiết		
								</a>
							</div>
						</div>
					</div>
					
					@endforeach


				</div>

				<!-- Left and right controls -->
				<div class="slide-sm">
					<div class="container slide-button">
						<div id="slide">
							<a  href="#myCarousel" data-slide="prev">
								<i  class="fas fa-angle-left left"></i>
							</a>
							<a   href="#myCarousel" data-slide="next">
								<i class="fas fa-angle-right right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div id="content-1">
			<div class="container">
				<div class="row">
					@foreach($dv_doanh_nghiep as $key=>$item)
					@if($key==0)
					<div class="col-md-4 col-sm-12 col-12 headline">
						<a href="{{asset('thanh-lap-doanh-nghiep/'.$item->slug)}}">
							<div class="full-images-1" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
								
								<div class="title-img">
									<p>{{cut_string($item->tieu_de, 50)}}</p>
									<span>{{$item->updated_at}}</span>
								</div>
							</div>
						</a>
					</div>
					@else
					<div class="col-md-4 col-sm-4 col-12 content-1-sm headline">
						<a href="{{asset('thanh-lap-doanh-nghiep/'.$item->slug)}}">
							<div class="full-images-1" style="background: url('../images/{{$item->anh}}') no-repeat center/cover;">
								<div class="title-img">
									<p>{{$item->tieu_de}}</p>
									<span>{{$item->updated_at}}</span>
								</div>
							</div>
						</a>
					</div>
					@endif

					@endforeach
					<div class="col-md-4 col-sm-12 col-12 headline">
						<span class="span">VNG LAW 2018</span>
						<h3 class="heading-2">Dịch vụ thành lập doanh nghiệp</h3>
						<p class="tom-tat">Chuẩn bị hồ sơ là bước quan trọng không thể bỏ qua và là tiền đề để thực hiện thủ tục đăng ký thành lập doanh nghiệp tại cơ quan nhà nước có thẩm quyền.</p>
						<a class="button" href="{{asset('thanh-lap-doanh-nghiep')}}">
							<i class="fas fa-angle-double-right"></i> Xem chi tiết
						</a>
					</div>
				</div>
			</div>
			<div id="bg-content-1">
				
			</div>
		</div>
	</section>

	<section  class="bg-f5">
		<div id="content-2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-12 content-2-show">
						<div class="text-2 headline">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_1->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_1->loi_dan}}</p>
							<a class="button" href="{{asset('doanh-nghiep/'.$kieu_1->slug)}}">	
								<i class="fas fa-angle-double-right"></i> Xem chi tiết
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-12 headline">			
						<div class="full-images-2" style="background: url('../images/{{$kieu_1->anh}}') no-repeat center/cover;">					
						</div>	
						<div id="bg-content-2-top-sm"></div>
						<div id="bg-content-2-bt-sm"></div>		
					</div>
					<div class="col-md-6 col-sm-6 col-12 content-2-hide headline">
						<div class="text-2">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">{{$kieu_1->tieu_de}}</h3>
							<p class="tom-tat">{{$kieu_1->loi_dan}}</p>
							<a class="button" href="{{asset('doanh-nghiep/'.$kieu_1->slug)}}">	
								<i class="fas fa-angle-double-right"></i> Xem chi tiết
							</a>
						</div>
					</div>					
				</div>
			</div>
			<div id="bg-content-2-top"></div>
			<div id="bg-content-2-bt"></div>
		</div>
	</section>

	<section>
		<div id="content-3">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-12 content-3-hide headline">
						<div class="tu-van-phap-ly">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">Tư vấn pháp lý</h3>
							<p class="tom-tat">Là đơn vị tư vấn pháp luật chuyên nghiệp, Văn phòng luật sư VNG Việt Nam sẽ hỗ trợ quý khách hàng tổng thể các vấn đề liên quan đến hoạt động của doanh nghiệp.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 headline">
						<div class="phap-ly">
							<h4>Tư vấn pháp luật sở hữu trí tuệ</h4>
							<p>Tư vấn về đăng ký nhãn hiệu, bảo hộ thương hiệu, logo, đăng ký bản quyền tác giả, kiểu dáng công nghiệp, sáng chế, giải pháp hữu ích, giải quyết tranh chấp liên quan đến thương hiệu, quyền sở hữu trí tuệ, xử lý vi phạm liên quan đến quyền sở hữu trí tuệ.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 headline">
						<div class="phap-ly">
							<h4>Tư vấn pháp luật đầu tư</h4>
							<p> Hỗ trợ doanh nghiệp trong việc lập dự án đầu tư, thủ tục đầu tư, xây dựng phương án đầu tư, xúc tiến đầu tư cho doanh nghiệp trong và ngoài nước. Tìm hiểu thị trường đầu tư cho doanh nghiệp và tư vấn các thủ tục liên quan đến hoạt động đầu tư của doanh nghiệp.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 content-3-show headline">
						<div class="tu-van-phap-ly">
							<span class="span">VNG LAW 2018</span>
							<h3 class="heading-2">Tư vấn pháp lý</h3>
							<p class="tom-tat">Là đơn vị tư vấn pháp luật chuyên nghiệp, Văn phòng luật sư VNG Việt Nam sẽ hỗ trợ quý khách hàng tổng thể các vấn đề liên quan đến hoạt động của doanh nghiệp.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 headline">
						<div class="phap-ly">
							<h4>Tư vấn pháp luật lao động, bảo hiểm xã hội</h4>
							<p>Tư vấn giúp doanh nghiệp trong vấn đề tuyển dụng lao động, ký kết hợp đồng lao động, các chế độ cho người lao động, các qui định về pháp luật lao động và bảo hiểm xã hội cho người lao động.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 headline">
						<div class="phap-ly">
							<h4>Tư vấn pháp luật thuế và tài chính doanh nghiệp</h4>
							<p>Văn phòng luật sư VNG Việt Nam tư vấn các quy định pháp luật về thuế, các thủ tục kê khai thuế doanh nghiệp phải thực hiện trong quá trình hoạt động; Ttư vấn cho doanh nghiệp tổng thể các vấn đề liên quan đến tài chính doanh nghiệp, hạch toán kinh doanh.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12 headline">
						<div class="phap-ly">
							<h4>Tư vấn pháp luật chuyên ngành liên quan đến hoạt động của doanh nghiệp</h4>
							<p>Mỗi doanh nghiệp hoạt động đều có những quy định pháp luật đặc thù riêng liên quan đến lĩnh vực hoạt động của mình. Văn phòng luật sư VNG Việt Nam sẽ tư vấn, hỗ trợ pháp các quy định pháp luật đặc thù, các giấy phép con trong quá trình hoạt động của doanh nghiệp.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="content-4">
			<div class="container headline">
				<div id="exit">
					<div class="full-images-4" style="background:url('../images/{{$kieu_2->anh}}') no-repeat center/cover;">
						
					</div>
					<div id="thay-doi">
						<span class="span">VNG LAW 2018</span>
						<h3>{{$kieu_2->tieu_de}}</h3>
						<a class="button-1" href="{{asset('doanh-nghiep/'.$kieu_2->slug)}}">
							<i class="fas fa-angle-double-right"></i> Xem chi tiết				
						</a>
					</div>
				</div>
			</div>
			<div id="bg-content-4"></div>
		</div>
	</section>
	
</div>
@stop
