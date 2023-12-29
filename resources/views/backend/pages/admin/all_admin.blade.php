@extends('admin.admin_dashboard')
@section('pageTitle', 'All Admin')
@section('content')


    <div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<a href="{{route('add.admin')}}" class="btn btn-inverse-info">Add Admin</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
		            <div class="card">
		              <div class="card-body">
		                <h6 class="card-title">All Admin</h6>
		                <div class="table-responsive">
		                  <table id="dataTableExample" class="table">
		                    <thead>
		                      <tr>
		                        <th>S/N</th>
		                        <th>Image</th>
		                        <th>Name</th>
		                        <th>Email</th>
		                        <th>Phone</th>
		                        <th>Role</th>
		                        <th>Action</th>		                       
		                      </tr>
		                    </thead>
		                    <tbody>
		                    
                            @forelse($alladmin as $key => $item)
                                <tr>
                                    <td>{{ $key +1}}</td>
                                    <td>
										<img class="wd-100 rounded-circle" src="{{ (!empty($item->photo)) ? url('uploads/images/'.$item->photo) : url('uploads/no-image1.jpeg')}}" alt="profile">
									</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->phone}}</td>
                                    <td>
										@foreach($item->roles as $role)
										<span class="badge badge-pill bg-danger">{{$role->name}}</span>
										@endforeach
									</td>
                                   
                                    <td><a href="{{route('edit.admin', ['id' => $item->id])}}" type="button" class="btn btn-inverse-warning">Edit</a>
										<a href="{{route('delete.admin', $item->id)}}" type="button" class="btn btn-inverse-danger" id="delete">Delete</a>
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