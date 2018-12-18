@extends('admin.quantri')
@section('main')
@section('css')

@stop
<h1 class="page-header">Các Dịch Vụ Tư Vấn</h1>

<div id="main">
	<div id="button" class="btn btn-primary">
		<a href="{{asset('quanlydichvu/add')}}" style="color: #fff;text-decoration: none;">Thêm Mới</a>
	</div>
	<table data-toggle="table" data-search="true">
		<thead>
		<tr>
			<th><p class="tieu-de">Tiêu đề</p></th>
			<th><p class="tieu-de">Lời dẫn</p></th>
			<th><p class="tieu-de">baner</p></th>
			<th><p class="tieu-de">Chi tiết</p></th>
			<th><p class="tieu-de">Xóa</p></th>
		</tr>
		</thead>
		
		<tbody>
			@foreach($dich_vu as $item)
			<tr>
				<td>
					<div>
						<span>{{$item->tieu_de}}</span>
					</div>
				</td>

				
				<td>
					<div>
						<span>{{$item->loi_dan}}</span>
					</div>
				</td>
				<td >
					<div class="anh-demo">
						<img src="../images/{{$item->anh}}" width="200px" height="200px">
					</div>
				</td>
				<td>
					<div>
						<a href="{{asset('quanlydichvu/edit/'.$item->id)}}">Chi tiết</a>
					</div>
				</td>
				
				<td>
					<div class="icon">
						<a onclick="return Xoa();" href="{{asset('quanlydichvu/delete/'.$item->id)}}"><img src="../images/210_img1.png" width="40px" height="40px"></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	
</div>
@stop