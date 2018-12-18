@extends('admin.quantri')
@section('main')
@section('css')
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Thêm lý do</h1>
<div id="main">
	<form method="post" action="{{asset('lydo/postadd')}}" enctype="multipart/form-data">
		<h3>Tiêu đề</h3>
		<input class="form-control" type="text" name="tieu_de" required=""> </br>

		<h3>Nội dung</h3>

		<textarea class="form-control" name="noi_dung"></textarea>

		<h3>Ảnh mô tả</h3>

		<input class="img" type="file" name="anh" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
		<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="300px" src="../images/29541772703_6ed8b50c47_b.jpg"> <br/> <br/>
		

		<input class="btn btn-primary" style="margin-bottom: 50px;" type="submit" name="" value="Thêm">
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

