<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        return view('admin.addblog');
    }

    public function Added_blog(Request $request){
        $request->validate([
            'title' =>  'required',
            'short_des' =>  'required',
            'full_des' =>  'required',
            'categories' =>  'required',
            'unique_url' =>  'required',
            'author' =>  'required',
            'status' =>  'required',
            'image' =>  'required',   
        ]);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'),$image_name);
            $img_url = 'upload/' . $image_name;

            $date = Carbon::now();

            blog::insert([
                'title' => $request->title,
                'short_des' => $request->short_des,
                'full_des' => $request->full_des,
                'categories' => $request->categories,
                'unique_url' => $request->unique_url,
                'author' => $request->author,
                'status' => $request->status,
                'image' => $img_url,
                'created_at' => $date,
                'slug' => strtolower(str_replace(' ','-', $request->title)),
            ]);

        return view('admin.addblog')->with('success','Blog Add Successfully');
    }

    public function allblog(){
        $details = blog::latest()->get();
        return view('admin.allblog', compact('details'));
    }

    public function editblog(Request $request, $id){
        // dd($request->all());
        $editblog = blog::findOrFail($id);
        return view('admin.editblog', compact('editblog'));
    }




public function updateblog(Request $request, $id) {
    // dd($request->all());
    $request->validate([
        'title' => 'required',
        'short_des' => 'required',
        'full_des' => 'required',
        'categories' => 'required',
        // 'unique_url' => 'required',
        'author' => 'required',
        'status' => 'required',
        // 'image' => 'required',
    ]);

    // $image = $request->file('image');
    // $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    // $image->move(public_path('upload'), $image_name);
    // $img_url = 'upload/' . $image_name;

    $date = now();

    // Using DB::update() to execute the update query
    DB::table('blogs')
        ->where('id', $id)
        ->update([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'full_des' => $request->full_des,
            'categories' => $request->categories,
            // 'unique_url' => $request->unique_url,
            'author' => $request->author,
            'status' => $request->status,
            // 'image' => $img_url,
            // 'updated_at' => $date,
            // 'slug' => strtolower(str_replace(' ', '-', $request->title)),
        ]);

    // Redirect to the page where you want to go after the update (e.g., all blog page)
    return redirect()->route('allblog')->with('success', 'Blog Updated Successfully');
}


   public function deleteblog($id){
            blog::findOrFail($id)->delete();
            return redirect()->route('allblog');
        }



}
