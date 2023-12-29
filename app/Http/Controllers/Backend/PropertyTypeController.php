<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function allType()
    {
        $all_types = PropertyType::latest()->get();
        return view('backend.type.all_type', compact('all_types'));
    }

    public function addType()
    {
        return view('backend.type.add_type');
    }


    public function storeType(Request $request)         
    {
       $request->validate([
        'type_name' => 'required|unique:property_types|max:200',
        'type_icon' => 'required',
       ]);

       PropertyType::insert([
        'type_name' => $request->type_name,
        'type_icon' => $request->type_icon,
       ]);

       $notification = array(
        'message' => 'Property Type Created Successfully!',
        'alert-type' => 'success',
       );

       return redirect()->route('all.type')->with($notification);
    }


    public function editType($id)
    {
        $editType = PropertyType::findOrFail($id);
       return view('backend.type.edit_type', compact('editType')); 
    }

    public function updateType(Request $request)
    {       
        $P_id = $request->id;

        PropertyType::findOrFail($P_id)->update([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = [
            'message' => 'Property Type is Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.type')->with($notification);
    }

    public function deleteType($id)
    {
        PropertyType::findOrFail($id)->delete();

        $notification = [
            'message' => 'Property Type is Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
    
   
}
