@extends('admin.quantri')
@section('main')
@section('css')
@stop
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<h1 class="page-header">Sửa Ý Kiến</h1>
<div id="main">
	<form method="post" action="{{asset('ykienkhachhang/postedit/'.$y_kien_cu->id)}}" enctype="multipart/form-data">
		<h3>Tên khách hàng</h3>
		<input class="form-control" type="text" name="ten_kh" required="" value="{{$y_kien_cu->ten_kh}}"> </br>

		<h3>Chức vụ</h3>

		<input type="text" name="chuc_vu" class="form-control" value="{{$y_kien_cu->chuc_vu}}"></br>

		<h3>Y kiến</h3>

		<textarea class="form-control" name="y_kien">{{$y_kien_cu->y_kien}}</textarea>

		<h3>Ảnh đại diện</h3>

		<input class="img" type="file" name="anh" class="cssInput " onchange="changeImg(this)" style="display: none;!important;">
		<img style="cursor: pointer;" class="avatar" class="cssInput thumbnail tableImgAvatar" width="340px" height="300px" src="../images/{{$y_kien_cu->anh}}"> <br/> <br/>
		

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

