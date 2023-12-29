@extends('admin.admin_dashboard')
@section('pageTitle', 'Add Admin')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Admin</h6>
                        <form id="myForm" class="forms-sample" action="{{route('store.admin')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="username"  class="form-label">Admin Username</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                             <div class="mb-3 form-group">
                                <label for="name"  class="form-label">Admin Name</label>
                                <input type="text"      id="name" name="name" class="form-control">
                            </div>   
                            <div class="mb-3 form-group">
                                <label for="email"  class="form-label">Email</label>
                                <input type="email"      id="email" name="email" class="form-control">
                            </div> 
                            <div class="mb-3 form-group">
                                <label for="phone"  class="form-label">Phone</label>
                                <input type="text"      id="phone" name="phone" class="form-control">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="address"  class="form-label">Address</label>
                                <input type="text"      id="address" name="address" class="form-control">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password"  class="form-label">Admin Password</label>
                                <input type="password"      id="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label"> Name</label>
                                <select name="roles" id="roles" class="form-control">
                                    <option value="" disabled>Select Role</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>                                
                            </div>  
                            <div class="mb-3 form-group">
                                <label for="image"  class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>

                             
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
          <!-- right basic form wrapper end -->
        </div>

    </div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                username: {
                    required : true,
                },  
                name: {
                    required : true,
                },
                email: {
                    required : true,
                },
                phone: {
                    required : true,
                },
                address: {
                    required : true,
                },
                password: {
                    required : true,
                }, 
                roles: {
                    required : true,
                },
                
            },
            messages :{
                username: {
                    required : 'Please Enter Username Field',
                },
                name: {
                    required : 'Please Enter Name Field',
                },
                email: {
                    required : 'Please Enter Email Field',
                },
                phone: {
                    required : 'Please Enter Phone Field',
                },
                address: {
                    required : 'Please Enter Address Field',
                },
                password: {
                    required : 'Please Enter Password Field',
                }, 
                  roles: {
                    required : 'Please Select User Role',
                }, 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>




@endsection