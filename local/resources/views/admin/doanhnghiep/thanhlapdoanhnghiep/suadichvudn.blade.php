@extends('admin.quantri')
@section('main')

<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Sửa Lĩnh Vực</h1>
<div id="main">
	<form method="post" action="{{asset('dichvudoanhnghiep/postedit/'.$dich_vu->id)}}" enctype="multipart/form-data">
		<div class="row">
			<div id="content-left" class="col-md-6">

				<h3>Tiêu Đề</h3>
				<input type="text" name="tieu_de" required="" class="form-control" value="{{$dich_vu->tieu_de}}">

				<h3>Lời dẫn</h3>
				<textarea name="loi_dan" required="" class="form-control" style="height: 150px;">{{$dich_vu->loi_dan}}</textarea>
				<br/>
			
				
			</div>
			<div id="content-right" class="col-md-6">
				<h3>Ảnh Tiêu Đề</h3>
				<input class="img" type="file" name="anh" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
				<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="330px" src="../images/{{$dich_vu->anh}}">
			</div>
		</div>
		<h3>Nội Dung Chi Tiết</h3>
				<textarea name="noi_dung" required="" col="20" style="width: 300px;">{{$dich_vu->noi_dung}}</textarea>
				<script>
					CKEDITOR.replace( 'noi_dung', {
						filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
						filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
						filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
						filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
						filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
						filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
					} );
				</script>
	</br>
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