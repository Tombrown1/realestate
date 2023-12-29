<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Imports\PermissionImport;
use App\Exports\PermissioonExport;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use DB;

class RolePermissionController extends Controller
{
    public function AllPermission()
    {
        $permissions = Permission::all();
        return view('backend.pages.permissions.all_permission', compact('permissions'));
    }

    public function AddPermission()
    {
       return view('backend.pages.permissions.add_permission');
    }
    
    public function StorePermission(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'group_name' => 'required'
        ]);
        
        Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);
        
        $notification = [
            'message' => 'Permission is Created Successfully',
            'alert-type' => 'success'
        ];
        
        return redirect()->route('all.permission')->with($notification);
    }

    public function EditPermission($id)
    {
        $edit_permission = Permission::findOrFail($id);

        return view('backend.pages.permissions.edit_permission', compact('edit_permission'));
    }

    public function UpdatePermission(Request $request)  
    {
        $PR_id = $request->id;
        Permission::findOrFail($PR_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = [
            'message' => 'Permission is Updated Successfully',
            'alert-type' => 'success'
        ];
        
        return redirect()->route('all.permission')->with($notification);
    }

    public function DeletePermission($id)
    {
        Permission::findOrFail($id)->delete();

        $notification = [
            'message' => 'Permission is Deleted Successfully',
            'alert-type' => 'success'
        ];
        
        return redirect()->back()->with($notification);
    }


    public function ImportPermission(){
        
        return view('backend.pages.permissions.import_permission');
    }

    public function Export()
    {
       return Excel::download(new PermissioonExport, 'permission.xlsx');
    }

    public function Import(Request $request)
    {
        Excel::import(new PermissionImport, $request->file('import_file'));

         $notification = [
            'message' => 'Permission data is Imported Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }


    // Roles Method Begins Here

    public function AllRole()
    {
        $roles = Role::all();
        return view('backend/pages/role/all_role', compact('roles'));
    }

    public function AddRole()
    {
        return view('backend/pages/role/add_role');
    }

    public function StoreRole(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Role::create([
            'name' => $request->name
        ]);

        $notification = [
            'message' => 'Role Created Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->route('all.role')->with($notification);
    }

    public function EditRole($id)
    {
        $edit_role = Role::findOrFail($id);
       
        return view('backend/pages/role/edit_role', compact('edit_role'));
    }

    public function UpdateRole(Request $request)
    {
        $Role_id = $request->id;
        Role::findOrFail($Role_id)->update([
            'name' => $request->name
        ]);

        $notification = [
            'message' => 'Role Updated Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->route('all.role')->with($notification);

    }// End Method

    public function DeleteRole($id)
    {
        Role::findOrFail($id)->delete();

        $notification = [
            'message' => 'Role Deleted Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->back()->with($notification);

    }// End Method



    public function AddRolePermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend/pages/rolesetup/add_role_permission', compact('permissions', 'roles', 'permission_groups'));
    }// End Method


    public function RolePermissionStore(Request $request)
    {
        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;
            
            DB::table('role_has_permissions')->insert($data);
        };


        $notification = [
            'message' => 'Role Permission Added Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->route('all.role.permission')->with($notification);
    }// End Method

    public function AllRolePermission()
    {
        $roles = Role::all();
        return view('backend.pages.rolesetup.all_role_permission', compact('roles'));
    }// End Method

    public function AdminEditRolePermission($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('backend/pages/rolesetup/admin_edit_role_permission', compact('role', 'permissions', 'permission_groups'));
    }// End Method

    public function AdminUpdateRolePermission(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission;
        if(!empty($permissions)){
            $role->syncPermissions($permissions);
        }
        $notification = [
            'message' => 'Role Permission Updated Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->route('all.role.permission')->with($notification);

    }// End Method

    public function AdminDeleteRolePermission($id)
    {
        $role = Role::findOrFail($id);
        if(!is_null($role)){
            $role->delete();
        }

         $notification = [
            'message' => 'Role Permission Deleted Successfully',
            'alert_type' => 'success'
        ];

        return redirect()->back()->with($notification);
        
    }// End Method
}
