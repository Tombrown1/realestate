@extends('admin.admin_dashboard')
@section('pageTitle', 'Edit Agent')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Agent</h6>
                        <form id="myForm" class="forms-sample" action="{{route('update.agent')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$agentData->id}}">
                            <div class="mb-3 form-group">
                                <label for="username"  class="form-label">Agent Username</label>
                                <input type="text" value="{{$agentData->username}}" name="username" class="form-control">
                            </div>
                             <div class="mb-3 form-group">
                                <label for="name"  class="form-label">Agent Name</label>
                                <input type="text" value="{{$agentData->name}}" name="name" class="form-control">
                            </div>   
                            <div class="mb-3 form-group">
                                <label for="email"  class="form-label">Email</label>
                                <input type="email" id="email" name="email" value="{{$agentData->email}}"class="form-control">
                            </div> 
                            <div class="mb-3 form-group">
                                <label for="phone"  class="form-label">Phone</label>
                                <input type="text" id="phone" name="phone" value="{{$agentData->phone}}" class="form-control">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="address"  class="form-label">Address</label>
                                <input type="text" id="address" name="address" value="{{$agentData->address}}" class="form-control">
                            </div>
                             <div class="mb-3 form-group">
                                <label for="roles"  class="form-label">Select Role</label>
                                <select name="roles" id="roles" class="form-control">
                                    <option value="disable">Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" {{ $agentData->hasRole($role->name) ? 'selected' : '' }}>{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>                                                    
                            <div class="mb-3 form-group">
                                <label for="image"  class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                            <div class="mb-3 form-group">
                                <img id="showimage" class="wd-80 rounded-circle" src="{{(!empty($agentData->photo)) ? url('uploads/images/'.$agentData->photo) : url('uploads/no-image.jpeg')}}" alt="">
                            </div>

                             
                            <button type="submit" class="btn btn-primary me-2">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
          <!-- right basic form wrapper end -->
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>





@endsection