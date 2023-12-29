@extends('admin.admin_dashboard')
@section('pageTitle', 'Add Permission')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Permission</h6>
                        <form id="myForm" class="forms-sample" action="{{route('store.permission')}}" method="post">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label"> Name</label>
                                <input type="text" class="form-control" name="name">
                                
                            </div>
                            <div class="mb-3 form-group">
                                <select name="group_name" id="" class="form-control">
                                    <option>Select Type</option>
                                    <option value="type">Property Type</option>
                                    <option value="state">State</option>
                                    <option value="agent">Agent</option>
                                    <option value="amenities">Amenities</option>
                                    <option value="property">Property</option>
                                    <option value="history">Package History</option> 
                                    <option value="message">Property Message</option>
                                    <option value="testimonials">Testimonials</option>
                                    <option value="agent">Manage Agent</option>
                                    <option value="blog_cat">Blog Category</option>
                                    <option value="blog_post">Blog Post</option>
                                    <option value="smtp">SMTP Setting</option>
                                    <option value="agent">Site Setting</option>
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