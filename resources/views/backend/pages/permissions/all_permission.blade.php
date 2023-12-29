@extends('admin.admin_dashboard')
@section('pageTitle', 'All Permission')
@section('content')

	<div class="page-content">

		<nav class="page-breadcrumb">
			<ol class="breadcrumb">
				<a href="{{route('add.permission')}}" class="btn btn-inverse-info">Add Permission</a>
				&nbsp;&nbsp;&nbsp;				
				<a href="{{route('import.permission')}}" class="btn btn-inverse-warning">Import Permission</a>
				&nbsp;&nbsp;&nbsp;	
				<a href="{{route('export')}}" class="btn btn-inverse-danger">Export Permission</a>
			</ol>
		</nav>

		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				<h6 class="card-title">All Permission</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
					<thead>
						<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Group Name</th>
						<th>Action</th>		                       
						</tr>
					</thead>
					<tbody>
					
					@forelse($permissions as $key => $item)
						<tr>
							<td>{{ $key +1}}</td>
							<td>{{ $item->name}}</td>
							<td>{{ $item->group_name}}</td>
							<td><a href="{{route('edit.permission', ['id' => $item->id])}}" type="button" class="btn btn-inverse-warning">Edit</a>
							<a href="{{route('delete.permission', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
							</td>
						</tr>
					@empty

					@endforelse
						
						
						
					</tbody>
					</table>
				</div>
				</div>
			</div>
			</div>
		</div>

	</div>

@endsection

