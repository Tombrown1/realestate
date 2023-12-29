<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.index');
    }

     public function adminlogout(Request $request)
     {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    
    public function adminLogin()
    {
        return view('admin.admin_login');
    }


    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile', compact('profileData'));
    }    
    
    
    public function adminProfileStore(Request $request)
    {
       $id = Auth::user()->id;
       $storeData = User::find($id);

       $storeData->name = $request->name;
       $storeData->username = $request->username;
       $storeData->email = $request->email;
       $storeData->phone = $request->phone;
       $storeData->address = $request->address;

       if($request->file('photo')){
        $file = $request->file('photo');
        @unlink(public_path('uploads/images/'.$storeData->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploads/images'), $filename);
        $storeData['photo'] = $filename;
       }

       $storeData->save();

       $notifcation = array(
        'message' => 'Admin Profile Update Successfully',
        'alert-type' => 'success'
       );

       return redirect()->back()->with($notifcation);
        
    }

    public function adminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    }

    public function adminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]); 

        // return $request;

        // Check if Old Password Match with the Existing One
        if(!Hash::check($request->old_password, auth::user()->password)){
            $notifcation = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notifcation);
        }
        // Update Password

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notifcation = array([
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        ]);

        return back()->with($notifcation);
    }// End Method

    public function AllAgent()
    {       
        $allagent = User::where('role','agent')->get();
        return view('backend/agentuser/all_agent', compact('allagent', ));
    }

    public function AddAgent(Request $request)
    {
         $roles = Role::all();
        return view('backend/agentuser/add_agent', compact('roles'));
    }

    public function StoreAgent(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'name' => 'required|string',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required|string|max:255',
            'password' => 'required'
        ]);

        if($request->file('image')){
          $file =  $request->file('image');
          $filename = date('YdmHi').$file->getClientOriginalName();
          $file->move(public_path('uploads/images'), $filename);

        }

       $StoreAgent = new User;
            $StoreAgent->username = $request->username;
            $StoreAgent->name = $request->name;
            $StoreAgent->email = $request->email;
            $StoreAgent->phone = $request->phone;
            $StoreAgent->address = $request->address;
            $StoreAgent->password = $request->password;
            $StoreAgent->password = Hash::make($request->password);
            $StoreAgent->role = 'agent';
            $StoreAgent->status = 'active';
            $StoreAgent->photo = $filename;

             $StoreAgent->save();

        if($request->roles){
            $StoreAgent->assignRole($request->roles);
          }

        $notifcation = array(
        'message' => 'Agent Added Successfully',
        'alert-type' => 'success'
       );

       return redirect()->route('all.agent')->with($notifcation);
    }

    public function EditAgent($id)
    {
        $agentData = User::findOrFail($id);
        $roles = Role::all();
       return view('backend/agentuser/edit_agent', compact('agentData', 'roles'));

    }// End Method

    public function UpdateAgent(Request $request)
    {
        $AgentID = $request->id;
       
        $UpdateAgent = User::findOrFail($AgentID);

        $UpdateAgent->username = $request->username;
        $UpdateAgent->name = $request->name;
        $UpdateAgent->email = $request->email;
        $UpdateAgent->phone = $request->phone;
        $UpdateAgent->address = $request->address;
        $UpdateAgent->password = Hash::make($request->password);
        $UpdateAgent->role = 'agent';
        $UpdateAgent->status = 'active';       
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/images/'.$UpdateAgent->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $filename); 
            $UpdateAgent['photo'] = $filename;
        }

        $UpdateAgent->save(); 

            $UpdateAgent->roles()->detach();
          if($request->roles){
            $UpdateAgent->assignRole($request->roles);
          }

        $notifcation = array(
        'message' => 'Agent Data Updated Successfully',
        'alert-type' => 'success'
       );

       return redirect()->route('all.agent')->with($notifcation);

     } // End Method

    public function DeleteAgent($id)
    {
        User::findOrFail($id)->delete();
        $notifcation = array(
        'message' => 'Agent Deleted Successfully',
        'alert-type' => 'success'
       );

       return redirect()->route('all.agent')->with($notifcation);

    }// End Method


    public function AllAdmin(){
        $alladmin = User::where('role', 'admin')->get();
        // return $alladmin;

        return view('backend/pages/admin/all_admin', compact('alladmin'));

    }// End Method

    public function AddAdmin()
    {
        $roles = Role::all();
        return view('backend/pages/admin/add_admin', compact('roles'));

    }// End Method


    public function StoreAdmin(Request $request)
    {
       $request->validate([
        'username' => 'required|string',
        'name' => 'required|string',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required|string|max:255',
        'password' => 'required' 
       ]);

       if($request->file('image')){
        $file = $request->file('image');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploads/images'), $filename);
       }

       

       $addAdmin = new User;
       $addAdmin->username = $request->username;
       $addAdmin->name = $request->name;
       $addAdmin->email = $request->email;
       $addAdmin->phone = $request->phone;
       $addAdmin->address = $request->address;
       $addAdmin->password = Hash::make($request->password);
       $addAdmin->role = 'admin';
       $addAdmin->status = 'active';
       $addAdmin->photo = $filename;
       $addAdmin->save();

       if($request->roles){
        $addAdmin->assignRole($request->roles);
       }

       $notifcation = [
        'message' => 'Admin is created successfully',
        'alert-type' => 'success',
       ];

       return redirect()->route('all.admin')->with($notifcation);

    }// End Method

    public function EditAdmin($id)
    {
        $adminData = User::findOrFail($id);
        $roles = Role::all();
        return view('backend/pages/admin/edit_admin', compact('adminData', 'roles'));
    }

    public function UpdateAdmin(Request $request)
    {
       $adminId = $request->id;
       $updateAdmin = User::findOrFail($adminId);
       $updateAdmin->username = $request->username;
       $updateAdmin->name = $request->name;
       $updateAdmin->email = $request->email;
       $updateAdmin->phone = $request->phone;
       $updateAdmin->address = $request->address;
       $updateAdmin->role = 'admin';
       $updateAdmin->status = 'active';  

       if($request->file('image')){
        $file = $request->file('image');
        @unlink(public_path('uploads/images/'.$updateAdmin->photo));
        $filename = $file->getClientOriginalName();
        $file->move(public_path('uploads/images'), $filename);
        $updateAdmin['photo'] = $filename;

       }
       $updateAdmin->save();

       $updateAdmin->roles()->detach();
       if($request->roles){
        $updateAdmin->assignRole($request->roles);
       }

       $notifcation = [
        'message' => 'Admin Record Updated Successfully!',
        'alert-type' => 'success'
       ];

       return redirect()->route('all.admin')->with($notifcation);


    }// End Method

    public function DeleteAdmin($id)
    {
        $deleteAdmin = User::findOrFail($id);
        $deleteAdmin->delete();
        
         $notifcation = [
        'message' => 'Admin Record Deleted Successfully!',
        'alert-type' => 'success'
       ];
       return redirect()->route('all.admin')->with($notifcation);

    }// End Method
    
    
}
