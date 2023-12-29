@extends('admin.admin_dashboard')
@section('pageTitle', 'Import Permission')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


     <div class="page-content">
        <nav class="page-breadcrumb">
			<ol class="breadcrumb">				
				<a href="{{route('export')}}" class="btn btn-inverse-danger">Download Xlsx</a>
			</ol>
		</nav>
        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Import Permission</h6>
                        <form id="myForm" class="forms-sample" action="{{route('import')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label">Xlsx File Import</label>
                                <input type="file" class="form-control" name="import_file">
                                
                            </div>
                          
                                               
                             
                            <button type="submit" class="btn btn-inverse-success me-2">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
          <!-- right basic form wrapper end -->
        </div>

    </div>

  



@endsection