@extends('manage.manage-master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tác Giả</h1>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- /.card -->
				<div class="card">
					<div class="card-header">
                        <div class="row">
                            <div class="col-sm-8">@include('partials.alerts')</div>
                            <div class="col-sm-4" style="float:right">
                                <a class="btn btn-app col-sm-12" href="{{route('manage.author.create')}}">
                                    <i class="fas fa-folder-plus"></i> Thêm Tác Giả
                                </a>
                            </div>
                        </div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach($authors as $author)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$author->name}}</td>
                                    <td class="text-center py-0 align-middle">
                                        <a href="{{route('manage.author.edit',$author->id)}}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
                                        <a href="{{route('manage.author.destroy',$author->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th class="text-center">Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
@endsection
