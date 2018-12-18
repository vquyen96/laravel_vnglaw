@extends('guest.master')
@section('title')
<title>Liên Hệ</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/contact.css">
@stop

@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p>Vnlaw - đồng hành cùng quý khách</p>
				<h2>Liên hệ</h2>
				<p>Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div id="form-contact">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div id="form">
							<h3>Hãy gửi tin nhắn đến cho chúng tôi để được nhận tư vấn một cách nhanh nhất</h3>
							<form method="post" action="{{asset('tuvankhachhang/add')}}">
								<input type="text"  required="" placeholder="Họ và tên" name="ho_ten"><br/>
								<input type="email"  required="" placeholder="Email" name="email"><br/>
								<textarea required="" placeholder="Nội dung" name="noi_dung"></textarea><br/>
								<input type="submit" value="GỬI">
								{{csrf_field()}}
							</form>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div id="brochure">
							<h3>Brochure</h3>
							<p>Download brochure để tìm hiểu chi tiết về công ty của chúng tôi</p>
							<img src="../images/brochure-folded.png">
							<a href="{{asset('downloadprofile')}}">
								<div id="download">
									<img src="../images/btdownload.png" width="10px" height="10px">
									<p>Download</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@stop
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		var height = $('#form-contact').height()
		console.log(height);

		$('#brochure').height(height-65);
	});
</script>
@stop