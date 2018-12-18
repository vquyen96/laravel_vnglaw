@extends('admin.quantri')
@section('main')

<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Sửa Baner</h1>
<div id="main">
	<form method="post" action="{{asset('banerdoanhnghiep/postedit/'.$baner->id)}}" enctype="multipart/form-data">
		<div class="row">
			<div id="content-left" class="col-md-6">

				<h3>Tiêu Đề</h3>
				<input type="text" name="tieu_de" required="" class="form-control" value="{{$baner->tieu_de}}">

				
				
			</div>
			<div id="content-right" class="col-md-6">
				<h3>Ảnh Tiêu Đề</h3>
				<input class="img" type="file" name="anh" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
				<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px" src="../images/{{$baner->anh}}">
			</div>
		</div>
		
	<input class="btn btn-primary" type="submit" name="" value="Cập Nhật">
	{{csrf_field()}}
</form>
</div>

@stop
@section('script')
<script type="text/javascript">
	function changeImg(input){
         //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
         if(input.files && input.files[0]){
         	var reader = new FileReader();
             //Sự kiện file đã được load vào website
             reader.onload = function(e){
                 //Thay đổi đường dẫn ảnh
                 $('.avatar').attr('src',e.target.result);
             }
             reader.readAsDataURL(input.files[0]);
         }
     }
     $(document).ready(function() {
     	$('.avatar').click(function(){
     		$('.img').click();
     	});         
     });
 </script>
 @stop