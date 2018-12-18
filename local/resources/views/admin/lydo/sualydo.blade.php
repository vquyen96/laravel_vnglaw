@extends('admin.quantri')
@section('main')
@section('css')
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Sửa lý do</h1>
<div id="main">
	<form method="post" action="{{asset('lydo/postedit/'.$ly_do->id)}}" enctype="multipart/form-data">
		<h3>Tiêu đề</h3>
		<input class="form-control" type="text" name="tieu_de" required="" value="{{$ly_do->tieu_de}}"> </br>

		<h3>Nội dung</h3>

		<textarea class="form-control" name="noi_dung">{{$ly_do->noi_dung}}</textarea>

		<h3>Ảnh mô tả</h3>

		<input class="img" type="file" name="anh" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
		<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="300px" src="../images/{{$ly_do->anh}}"> <br/> <br/>
		

		<input class="btn btn-primary" style="margin-bottom: 50px;" type="submit" name="" value="Cập Nhật">
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

