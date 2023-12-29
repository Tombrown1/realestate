@extends('admin.admin_dashboard')
@section('pageTitle', 'Edit Role')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Role</h6>
                        <form id="myForm" class="forms-sample" action="{{route('update.role')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit_role->id}}">
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" class="form-control" name="name" value="{{$edit_role->name}}">
                                
                            </div>  
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
          <!-- right basic form wrapper end -->
        </div>

    </div>

  

@endsection