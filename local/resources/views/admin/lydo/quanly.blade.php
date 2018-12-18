@extends('admin.quantri')
@section('main')

@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Lý Do Lựa Chọn VNG-GROUP</h1>

<div id="main">
	<div id="button" class="btn btn-primary">
		<a href="{{asset('lydo/add')}}" style="color: #fff;text-decoration: none;">Thêm Mới</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">Tiêu đề</p></th>		
			<th><p class="tieu-de">Nội dung</p></th>
			<th><p class="tieu-de">Ảnh</p></th>
			<th><p class="tieu-de">Sửa</p></th>
			<th><p class="tieu-de">Xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($ly_do as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->tieu_de}}</span>
					</div>
				</td>

				
				<td>
					<div>
						<span>{{$item->noi_dung}}</span>
					</div>
				</td>
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh}}" width="200px" height="200px">
					</div>
				</td>
				
				<td>
					<div class="icon">
						<a " href="{{asset('lydo/edit/'.$item->id)}}"><img src="../images/icon-server.png" width="40px" height="40px"></a>
					</div>
				</td>
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('lydo/delete/'.$item->id)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	
</div>
@stop