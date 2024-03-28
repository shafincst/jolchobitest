<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\classes;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class CourseController extends Controller
{
    public function index(){
        return view('admin.addcourse');
    }
    

    public function added_course(Request $request){
        $request->validate([
            'title' =>  'required',
            'description' =>  'required',
            'duration' =>  'required',
            'total_classes' =>  'required',
            'total_seat' =>  'required',
            'image' =>  'required',   
        ]);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'),$image_name);
            $img_url = 'upload/' . $image_name;

            $date = Carbon::now();

            classes::insert([
                'title' => $request->title,
                'description' => $request->description,
                'duration' => $request->duration,
                'total_class' => $request->total_classes,
                'total_seat' => $request->total_seat,
                'date' => $date,
                'image' => $img_url,
            ]);

            return view('admin.addcourse');
    }

    public function allcourse(){
        $detailsCourse = classes::latest()->get();
        return view('admin.allcourse', compact('detailsCourse'));
    }

    public function editcourse(Request $request, $id){
        // dd($request->all());
        $editcourse = classes::findOrFail($id);
        return view('admin.editcourse', compact('editcourse'));
    }
    
    public function updatecourse(Request $request, $id) {
    
    $request->validate([
       'title' =>  'required',
            'description' =>  'required',
            'duration' =>  'required',
            'total_classes' =>  'required',
            'total_seat' =>  'required',
            // 'image' =>  'required',  
    ]);

    // $image = $request->file('image');
    // $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    // $image->move(public_path('upload'), $image_name);
    // $img_url = 'upload/' . $image_name;

    $date = now();

    // Using DB::update() to execute the update query
    DB::table('classes')
        ->where('id', $id)
        ->update([
            'title' => $request->title,
                'description' => $request->description,
                'duration' => $request->duration,
                'total_class' => $request->total_classes,
                'total_seat' => $request->total_seat,
                // 'date' => $date,
                // 'image' => $img_url,
        ]);

    // Redirect to the page where you want to go after the update (e.g., all blog page)
    return redirect()->route('allcourse')->with('success', 'Class Updated Successfully');
}


   public function deletecourse($id){
            classes::findOrFail($id)->delete();
            return redirect()->route('allcourse');
        }

            

            


    
}
