<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\testimonials;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TainnerController extends Controller
{
    public function addtainner(){
        return view('admin.addtainner');
    }

    

    public function added_tainner(Request $request){
        
        $request->validate([
            'name' =>  'required',
            'designation' =>  'required',
            'testimonial' =>  'required',
            'status' =>  'required',
            'image' =>  'required',   
        ]);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'),$image_name);
            $img_url = 'upload/' . $image_name;

            $date = Carbon::now();

            testimonials::insert([
                'name' => $request->name,
                'designation' => $request->designation,
                'testimonial' => $request->testimonial,
                'status' => $request->status,
                'date' => $date,
                'image' => $img_url,
            ]);

            return view('admin.addtainner');
    }

    public function alltainner(){
        $detailstainner = testimonials::latest()->get();
        return view('admin.alltainner', compact('detailstainner'));
    }
    public function edittainner(Request $request, $id){
        // dd($request->all());
        $edittainner = testimonials::findOrFail($id);
        return view('admin.edittainner', compact('edittainner'));
    }


    public function updatetainner(Request $request, $id) {
    
        $request->validate([
            'name' =>  'required',
            'designation' =>  'required',
            'testimonial' =>  'required',
            'status' =>  'required',
            // 'image' =>  'required',  
        ]);
    
        // $image = $request->file('image');
        // $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('upload'), $image_name);
        // $img_url = 'upload/' . $image_name;
    
        $date = now();
    
        // Using DB::update() to execute the update query
        DB::table('testimonials')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'testimonial' => $request->testimonial,
                'status' => $request->status,
                    // 'date' => $date,
                    // 'image' => $img_url,
            ]);
    
        // Redirect to the page where you want to go after the update (e.g., all blog page)
        return redirect()->route('alltainner')->with('success', 'Class Updated Successfully');
    }
    



   public function deletetainner($id){
             testimonials::findOrFail($id)->delete();
            return redirect()->route('allcourse');
        }

            

}
