<nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
            Arecent<span>Realestate</span>
            </a>
            <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">RealEstate</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#propertyType" role="button" aria-expanded="false" aria-controls="propertyType">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Property Type</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="propertyType">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{route('all.type')}}" class="nav-link">All Type</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('add.type')}}" class="nav-link">Add Type</a>
                    </li>                   
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Amenities</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="amenities">
                <ul class="nav sub-menu">                    
                    <li class="nav-item">
                    <a href="{{route('all.amenities')}}" class="nav-link">All Amenities</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('add.amenities')}}" class="nav-link">Add Amenities</a>
                    </li>
                                      
                </ul>
                </div>
            </li>         
            
            <li class="nav-item nav-category">User All Function</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#manageagent" role="button" aria-expanded="false" aria-controls="manageagent">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Manage Agent</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="manageagent">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{route('all.agent')}}" class="nav-link">All Agent</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('add.agent')}}" class="nav-link">Add Agent</a>
                    </li>
                    
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                <i class="link-icon" data-feather="anchor"></i>
                <span class="link-title">Advanced UI</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                    </li>
                </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Role & Permission</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#role_permission" role="button" aria-expanded="false" aria-controls="role_permission">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Role & Permission</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="role_permission">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{route('all.permission')}}" class="nav-link">All Permission</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('add.permission')}}" class="nav-link">Add Permission</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('all.role')}}" class="nav-link">All Roles</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('add_role_permission')}}" class="nav-link">Add Role in Permission</a>
                    <a href="{{route('all.role.permission')}}" class="nav-link">All Role Permission</a>
                    
                    </li>
                </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#manage_admin" role="button" aria-expanded="false" aria-controls="manage_admin">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Manage Admin</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="manage_admin">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{route('all.admin')}}" class="nav-link">All Admin</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('add.admin')}}" class="nav-link">Add Admin</a>
                    </li>
                   
                </ul>
                </div>
            </li>
           
            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="#" target="_blank" class="nav-link">
                <i class="link-icon" data-feather="hash"></i>
                <span class="link-title">Documentation</span>
                </a>
            </li>
            </ul>
        </div>
    </nav>