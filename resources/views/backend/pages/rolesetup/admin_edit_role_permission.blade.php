@extends('admin.admin_dashboard')
@section('pageTitle', 'Admin Edit Role Permission')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .form-check-label{
        text-transform: capitalize;
    }
</style>


     <div class="page-content">

        
        <div class="row profile-body">
       
          <!-- right basic form start -->
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Role in Permission</h6>
                        <form id="myForm" class="forms-sample" action="{{route('admin.update.role.permission', $role->id)}}" method="post">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="name" class="form-label"> Name</label>
                               <h3>{{$role->name}}</h3>                          
                            </div>  
                            <div class="form-check mb-3">
                                <input class="form-check-input me-1" type="checkbox" id="checkDefaultmain" value="">
                                <label class="form-check-label" for="checkDefaultmain">
                                    Permission All 
                                </label>
                            </div>
                            <hr>
                            @foreach($permission_groups as $group)
                            
                            <div class="row">
                                <div class="col-3">
                                @php
                                    $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                @endphp

                                     <div class="form-check mb-3">
                                        <input class="form-check-input me-1" type="checkbox" id="checkDefault" {{App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="checkDefault">
                                            {{$group->group_name}}
                                        </label>
                                    </div>
                                </div>                               
                               
                                <div class="col-9">
                                
                                    
                                    @foreach($permissions as $permission)
                                     <div class="form-check mb-3">
                                        <input class="form-check-input me-1" name="permission[]" type="checkbox" id="checkDefault{{$permission->id}}" value="{{$permission->id}}" {{$role->hasPermissionTo($permission->name) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="checkDefault{{$permission->id}}">
                                            {{$permission->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                     <br>
                                </div>
                            </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
          <!-- right basic form wrapper end -->
        </div>

    </div>

    <script type="text/javascript">
        $('#checkDefaultmain').click(function(){
            if($(this).is(':checked')){
                $('input[ type = checkbox ]').prop('checked', true);
            }else{
                $('input[ type = checkbox ]').prop('checked', false);
            }
        });  
    </script>




@endsection