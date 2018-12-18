@extends('admin.quantri')
@section('main')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@section('css')
<link rel="stylesheet" type="text/css" href="css/admin.css">
@stop
<h1 class="page-header">Tin Tức</h1>

<div id="main">
	<div id="button" class="btn btn-primary">
		<a href="{{asset('quanlytintuc/add')}}" style="color: #fff;text-decoration: none;">Thêm Mới</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">Tiêu đề</p></th>
			<th><p class="tieu-de">Lời dẫn</p></th>
			<th><p class="tieu-de">Loại tin tức</p></th>
			<th><p class="tieu-de">Chi tiết</p></th>
			<th><p class="tieu-de">Xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($tin_tuc as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->tieu_de}}</span>
					</div>
				</td>

				
				<td>
					<div>
						<span>{!!$item->loi_dan!!}</span>
					</div>
				</td>
				<td >
					<div>
						<span>{{$item->loaitintuc->ten_lt}}</span>
					</div>
				</td>
				<td>
					<div>
						<a href="{{asset('quanlytintuc/show/'.$item->id_tt)}}">Chi tiết</a>
					</div>
				</td>
				
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlytintuc/delete/'.$item->id_tt)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
		{{$tin_tuc->links()}}

	</table>
	
	
</div>
@stop