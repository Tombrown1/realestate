@extends('admin.admin_dashboard')
@section('pageTitle', 'Edit Permission')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Permission</h6>
                        <form id="myForm" class="forms-sample" action="{{route('update.permission')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit_permission->id}}">
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" class="form-control" name="name" value="{{$edit_permission->name}}">
                                
                            </div>
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label"> Select Group</label>
                                <select name="group_name" class="form-control">
                                    <option value="type" {{$edit_permission->group_name == 'type' ? 'selected' : ''}}>Property Type</option>
                                    <option value="state" {{$edit_permission->group_name == 'state' ? 'selected' : ''}}>State</option>
                                    <option value="amenities" {{$edit_permission->group_name == 'amenities' ? 'selected' : ''}}>Amenities</option>
                                    <option value="property" {{$edit_permission->group_name == 'property' ? 'selected' : ''}}>Property</option>
                                    <option value="history" {{$edit_permission->group_name == 'history' ? 'selected' : ''}}>Package History</option>
                                    <option value="message" {{$edit_permission->group_name == 'message' ? 'selected' : ''}}>Property Message</option>
                                    <option value="testimonials" {{$edit_permission->group_name == 'testimonials' ? 'selected' : ''}}>Testimonials</option>
                                    <option value="agent" {{$edit_permission->group_name == 'agent' ? 'selected' : ''}}>Manage Agent</option>
                                    <option value="blog_cat" {{$edit_permission->group_name == 'blog_cat' ? 'selected' : ''}}>Blog Category</option>
                                    <option value="blog_post" {{$edit_permission->group_name == 'blog_post' ? 'selected' : ''}}>Blog Post</option>
                                    <option value="smtp" {{$edit_permission->group_name == 'smtp' ? 'selected' : ''}}>SMTP Setting</option>
                                    <option value="site" {{$edit_permission->group_name == 'site' ? 'selected' : ''}}>Site Setting</option>
                                </select>
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
                name: {
                    required : true,
                }, 

                 group_name: {
                    required : true,
                }, 
                
            },
            messages :{
                name: {
                    required : 'Please Enter Permission Name',
                },
                group_name: {
                    required : 'Please Enter Permission Group Name',
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