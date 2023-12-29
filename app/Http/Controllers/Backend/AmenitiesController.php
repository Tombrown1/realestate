<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function allAmenities()
    {
        $all_amenities = Amenities::latest()->get();
        return view('backend.amenities.all_amenities', compact('all_amenities'));
    }

    public function addAmenities()
    {       
        return view('backend.amenities.add_amenities');
    }

    public function storeAmenities(Request $request)
    {
        $request->validate([
            'amenities_name' => 'required|unique:Amenities|max:200'
        ]);

       
        Amenities::insert([
            'amenities_name' => $request->amenities_name
        ]);

        $notification = [
            'message' => 'Amenities is Created Succcessfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.amenities')->with($notification);
    }

    public function editAmenities($id)
    {
        $edit_amenities = Amenities::findOrFail($id);
        return view('backend.amenities.edit_amenities', compact('edit_amenities'));
    }

    public function updateAmenities(Request $request)       
    {
        $A_id = $request->id;
        Amenities::findOrFail($A_id)->update([
            'amenities_name' => $request->amenities_name
        ]);

        $notification = [
            'message' => 'Amenities is Updated Succcessfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.amenities')->with($notification);

    }

    public function deleteAmenities($id)
    {
        Amenities::findOrFail($id)->delete();

        $notification = [
            'message' => 'Amenities is Deleted Succcessfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    
}
