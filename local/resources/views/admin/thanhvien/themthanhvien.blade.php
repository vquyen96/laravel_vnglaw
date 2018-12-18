@extends('admin.quantri')
@section('main')

<h1 class="page-header">Thêm Thành Viên</h1>
<div id="main">
	@include('errors.note')
	
	<form  onsubmit="return checkPw(this)" method="post" action="{{asset('quanlythanhvien/postadd')}}">
		<h3>Tên Đăng Nhập</h3>
		<input type="email" name="email" required="" class="form-control">
		<h3>Mật khẩu</h3>
		<span style="font-style: italic;">Mật khẩu có độ dài từ 8 kí tự trở lên!</span><br/>
		<input type="password" name="password" class="form-control"></br>
		<h3>Xác nhận lại mật khẩu</h3>
		<input type="password" name="checkpassword" class="form-control"></br>
		<h3>Level</h3>
		<select name="level" class="form-control">
			<option>1</option>
			<option>2</option>
		</select>
	</br>
	<input class="btn btn-primary" type="submit" name="" value="Thêm">
	{{csrf_field()}}
</form>
</div>

@section('script')
<SCRIPT LANGUAGE="JavaScript">


<!-- Begin
function checkPw(form) {
	pw1 = form.password.value;
	pw2 = form.checkpassword.value;

	if (pw1 != pw2) {
		alert ("Mật khẩu xác nhận không chính xác")
		return false;
	}
	else return true;
}
// End -->
</script>
@stop

@stop