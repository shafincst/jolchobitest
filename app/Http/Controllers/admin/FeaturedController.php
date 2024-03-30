<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\advisor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeaturedController extends Controller
{
    public function index(){
        return view('admin.addfeatured');
    }

    

    public function added_featured(Request $request){
        
        $request->validate([
            'adviser_name' =>  'required',
            'designation' =>  'required',
            'bio_description' =>  'required',
            'status' =>  'required',
            'image' =>  'required',   
        ]);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'),$image_name);
            $img_url = 'upload/' . $image_name;

            $date = Carbon::now();

            advisor::insert([
                'adviser_name' => $request->adviser_name,
                'designation' => $request->designation,
                'bio_description' => $request->bio_description,
                'status' => $request->status,
                'date' => $date,
                'image' => $img_url,
            ]);

            return view('admin.addfeatured');
    }

    public function allfeatured(){
        $detailsfeatured = advisor::latest()->get();
        return view('admin.allfeatured', compact('detailsfeatured'));
    }

    public function editfeatured(Request $request, $id){
        // dd($request->all());
        $editfeatured = advisor::findOrFail($id);
        return view('admin.editfeatured', compact('editfeatured'));
    }
    
    public function updatefeatured(Request $request, $id) {
    
    $request->validate([
        'adviser_name' =>  'required',
        'designation' =>  'required',
        'bio_description' =>  'required',
        'status' =>  'required',
        // 'image' =>  'required',  
    ]);

    // $image = $request->file('image');
    // $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    // $image->move(public_path('upload'), $image_name);
    // $img_url = 'upload/' . $image_name;

    $date = now();

    // Using DB::update() to execute the update query
    DB::table('advisors')
        ->where('id', $id)
        ->update([
            'adviser_name' => $request->adviser_name,
                'designation' => $request->designation,
                'bio_description' => $request->bio_description,
                'status' => $request->status,
                // 'date' => $date,
                // 'image' => $img_url,
        ]);

    // Redirect to the page where you want to go after the update (e.g., all blog page)
    return redirect()->route('allfeatured')->with('success', 'Class Updated Successfully');
}


   public function deletefeaturad($id){
            advisor::findOrFail($id)->delete();
            return redirect()->route('allfeatured');
        }

            

          
}
