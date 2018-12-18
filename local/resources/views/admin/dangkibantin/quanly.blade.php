@extends('admin.quantri')
@section('main')

@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Khách Hàng Đăng Kí Nhận Bản Tin</h1>

<div id="main">
	
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">Email</p></th>
			<th><p class="tieu-de">Xóa</p></th>
		</tr>
		</thead>
	
		<tbody>
			@foreach($dang_ki as $item)
			<tr>
				

				
				<td>
					<div>
						<span>{{$item->email}}</span>
					</div>
				</td>
				
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('dangkinhanbantin/delete/'.$item->id)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	
</div>
@stop