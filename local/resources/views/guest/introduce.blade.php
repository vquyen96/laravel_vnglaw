@extends('guest.master')
@section('title')
<title>Giới thiệu</title>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="css/introduce.css">
@stop

@section('main')
<div id="main">
	<section id="bg-main-top">
		<div class="container">
			<div id="main-top">
				<p class="text-1">Vnlaw - đồng hành cùng quý khách</p>
				<h2 class="heading-1">Văn phòng luật sư<br/> VNG Việt Nam</h2>
				<p class="text-1">Vng law là một công ty hàng đầu về các dịch vụ luật. Chúng tôi cung cấp các dịch vụ hoàn thiện</p>
			</div>
		</div>
	</section>

	<section class="bg-f5">
		<div id="content-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-12">
						<div id="gioi-thieu">
							<h3>Văn hóa Vng luật</h3>
							<p>VNG Law luôn là doanh nghiệp có bản sắc văn hóa riêng, với môi trường làm việc hiện đại và khoa học, coi trọng và khích lệ sự phát huy năng lực của mỗi thành viên nhằm đạt được sự phát triển vượt trội trong ngành. VNG Law thực sự là một gia đình hội tụ của những thành viên tâm đức và tài năng, cùng cống hiến và thụ hưởng một cuộc sống đầy đủ về vật chất, phong phú về tinh thần. Văn hóa VNG Law được xây dựng trên nền tảng của giá trị cốt lõi</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-12">
						<div id="chi-tiet">
							<p>Mọi thành viên đều là người Nhiệt huyết</p>
							<p>Mọi hành động đều thể hiện Linh hoạt</p>
							<p>Mọi dịch vụ đều đạt tới Chuyên nghiệp</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div id="content-2">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12 col-12">
						<div id="full-images-1" class="headline">
							<img  src="../images/helena-lopes-461808-unsplash.png">
							<div id="bg-img"></div>
						</div>
					</div>
					<div class="col-md-7 col-sm-12 col-12 headline">
						<div id="content-right">
							<span class="span">VNG LAW 2018</span>

							<h3 class="heading-2">Vng luật Việt Nam</h3>

							<p class="title">Văn phòng luật sư VNG Việt Nam (Luật VNG) được thành lập từ năm 2009, là tổ chức hành nghề pháp lý uy tín chuyên cung cấp các dịch vụ: Tư vấn pháp lý thường xuyên cho doanh nghiệp; Tư vấn thành lập, thay đổi đăng ký kinh doanh; Dịch vụ làm sổ đỏ; Tư vấn đầu tư – dự án, sở hữu trí tuệ; Dịch vụ luật sư....</p>

							<p class="tom-tat">Thế mạnh làm nên thương hiệu Luật VNG khác biệt chính là: Sự chuyên môn hóa trong từng lĩnh vực, tính trách nhiệm cao cùng những Luật sư, Chuyên viên pháp lý giàu kinh nghiệm và hệ thống nhân viên tư vấn chăm sóc khách hàng chu đáo, tận tình nhằm mang đến những dịch vụ pháp lý chuyên nghiệp, thời gian thực hiện đảm bảo, chi phí dịch vụ hợp lý nhất, đáp ứng yêu cầu và nhu cầu khác nhau của khách hàng.</p>

							<p class="tom-tat">Sự tin tưởng của khách hàng trong suốt thời gian qua là nguồn động viên to lớn trên bước đường phát triển của Văn phòng luật sư VNG Việt Nam.</p>

							<p class="tom-tat">Chúng tôi cam kết sẽ luôn nỗ lực cả về nhân lực, vật lực, xây dựng uy tín thương hiệu, nhằm tiếp tục thực hiện phương châm “ phát triển bền vững” và trở thành người bạn đồng hành pháp lý đáng tin cậy của mọi khách hàng.</p>

							<p class="bottom">Hãy liên hệ với chúng tôi để được tư vấn đầy đủ và chính xác nhất!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-f5 vng-section">
		<div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-12 headline">
						<h3 class="heading-2-xs">Đội ngũ chuyên nghiệp</h3>
						<div id="gioi-thieu-2">
							<span class="span">Đội ngũ chuyên nghiệp</span>
							<h3 class="heading-2">Chuyên viên tư vấn</h3>
							<p class="tom-tat">Với đội ngũ Luật sư và Chuyên viên pháp lý giàu kinh nghiệm Văn phòng luật sư VNG Việt Nam luôn đi đầu trong việc cập nhật quy định pháp luật mới để nâng cao chất lượng dịch vụ, hướng tới tiêu chí ba nhất: CHẤT LƯỢNG CAO NHẤT - CHI PHÍ THẤP NHẤT - DỊCH VỤ CHUYÊN NGHIỆP NHẤT Với đội ngũ Luật sư và Chuyên viên pháp lý giàu kinh nghiệm Văn phòng luật sư VNG Việt Nam luôn đi đầu trong việc cập nhật quy định pháp luật</p>
						</div>
					</div>
					@foreach($nhan_vien as $item)
					<div class="col-md-6 col-sm-6 col-12 headline">
						<div class="staff">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-6">
									<div class="img">
										<img src="../images/{{$item->anh}}">
										<div class="name-staff">
											<p>{{$item->ten_nv}}</p>
											<span>({{$item->chuc_vu}})</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6">
									<div class="thong-tin">
										<p>{{cut_string($item->thong_tin, 280)}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach	
				</div>
			</div>
		</div>
	</section>
</div>

@stop