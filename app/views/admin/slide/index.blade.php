@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý slide' }}
@stop

@section('content')

	<div class="row margin-bottom">
		<div class="col-xs-12">
			<a href="{{ action('SlideController@create') }}" class="btn btn-primary">Thêm</a>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách @if(isset($type)){{ Common::labelSlide($type) }}@endif</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>ID</th>
							<th>Ảnh</th>
							<th>Tiêu đề</th>
							<th>Tiêu đề 2</th>
							<th>Loại</th>
							<th>Đường dẫn</th>
							<th>Ngày sửa</th>
							<th style="width:300px;">Action</th>
						</tr>
						@foreach($data as $key => $value)
						<tr>
							<td><img src="{{ $value->image }}" style="width:70px; max-height: 70px;" /></td>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->name2 }}</td>
							<td>{{ Common::labelSlide($value->type) }}</td>
							<td>{{ $value->url }}</td>
							<td>{{ $value->updated_at }}</td>
							<td>
								<a href="{{ action('SlideController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
								{{ Form::open(array('method'=>'DELETE', 'action' => array('SlideController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
								<button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
								{{ Form::close() }}
							</td>
						</tr>
						@endforeach
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			{{ $data->appends(Request::except('page'))->links() }}
		</div>
	</div>

@stop
