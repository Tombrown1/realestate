@extends('admin.admin_dashboard')
@section('pageTitle', 'Add Type')
@section('content')

     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Property Type</h6>
                        <form class="forms-sample" action="{{route('store.type')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="type_name" class="form-label">Type Name</label>
                                <input type="text" class="form-control @error('type_name') is-invalid @enderror" name="type_name">
                                @error('type_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type_icon" class="form-label">Type Icon</label>
                                <input type="text" class="form-control @error('type_icon') is-invalid @enderror" name="type_icon">
                                @error('type_icon')
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