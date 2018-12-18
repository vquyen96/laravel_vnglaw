@extends('admin.quantri')
@section('main')

@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Ý Kiến Khách Hàng</h1>

<div id="main">
	<div id="button" class="btn btn-primary">
		<a href="{{asset('ykienkhachhang/add')}}" style="color: #fff;text-decoration: none;">Thêm Mới</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">Tên khách hàng</p></th>
			
			<th><p class="tieu-de">Chức vụ</p></th>
			<th><p class="tieu-de">Ảnh</p></th>
			<th><p class="tieu-de">Ý Kiến</p></th>
			<th><p class="tieu-de">Sửa</p></th>
			<th><p class="tieu-de">Xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($y_kien as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->ten_kh}}</span>
					</div>
				</td>

				
				<td>
					<div>
						<span>{{$item->chuc_vu}}</span>
					</div>
				</td>
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh}}" width="200px" height="200px">
					</div>
				</td>
				<td>
					<div>
						<span>{{$item->y_kien}}</span>
					</div>
				</td>
				<td>
					<div class="icon">
						<a " href="{{asset('ykienkhachhang/edit/'.$item->id)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('ykienkhachhang/delete/'.$item->id)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	
</div>
@stop