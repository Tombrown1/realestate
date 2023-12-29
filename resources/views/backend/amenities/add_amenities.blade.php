@extends('admin.admin_dashboard')
@section('pageTitle', 'Add Amenities')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Amenities</h6>
                        <form id="myForm" class="forms-sample" action="{{route('store.amenities')}}" method="post">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="amenities_name"  class="form-label">Amenities Name</label>
                                <input type="text"      id="amenities_name" name="amenities_name" class="form-control">
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
                amenities_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenities_name: {
                    required : 'Please Enter Amenities Name',
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