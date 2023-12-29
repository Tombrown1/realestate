@extends('admin.admin_dashboard')
@section('pageTitle', 'All Role')
@section('content')

	<div class="page-content">
		<nav class="page-breadcrumb">
			<ol class="breadcrumb">
				<a href="{{route('add.role')}}" class="btn btn-inverse-info">Add Role</a>
				
			</ol>
		</nav>
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				<h6 class="card-title">All Role</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
					<thead>
						<tr>
						<th>S/N</th>
						<th>Name</th>						
						<th>Action</th>		                       
						</tr>
					</thead>
					<tbody>
					
					@forelse($roles as $key => $item)
						<tr>
							<td>{{ $key +1}}</td>
							<td>{{ $item->name}}</td>
							<td><a href="{{route('edit.role', ['id' => $item->id])}}" type="button" class="btn btn-inverse-warning">Edit</a>
							<a href="{{route('delete.role', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
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

