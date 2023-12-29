@extends('admin.admin_dashboard')
@section('pageTitle', 'Edit Type')
@section('content')

     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Property Type</h6>
                        <form class="forms-sample" action="{{route('update.type')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$editType->id}}">
                            <div class="mb-3">
                                <label for="type_name" class="form-label">Type Name</label>
                                <input type="text" class="form-control @error('type_name') is-invalid @enderror" name="type_name" value="{{$editType->type_name}}">
                                @error('type_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type_icon" class="form-label">Type Icon</label>
                                <input type="text" class="form-control @error('type_icon') is-invalid @enderror" name="type_icon" value="{{$editType->type_icon}}">
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