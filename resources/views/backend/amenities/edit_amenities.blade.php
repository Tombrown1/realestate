@extends('admin.admin_dashboard')
@section('pageTitle', 'Edit Amenities')
@section('content')

     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Amenities</h6>
                        <form class="forms-sample" action="{{route('update.amenities')}}" method="post">
                            @csrf

                            <input type="hidden" name="id" value="{{$edit_amenities->id}}">
                            <div class="mb-3">
                                <label for="amenities_name" class="form-label">Amenities Name</label>
                                <input type="text" class="form-control @error('amenities_name') is-invalid @enderror" name="amenities_name" value="{{$edit_amenities->amenities_name}}">
                                @error('amenities_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
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