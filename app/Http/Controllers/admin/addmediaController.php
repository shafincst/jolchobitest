<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addmediaController extends Controller
{
    public function index(){
        return view('admin.addmedia');
    }

    public function added_media(Request $request){
        
        $request->validate([
            'titlename' =>  'required',
            'autometedslug' =>  'required',
            'description' =>  'required',
            'quality' =>  'required',
            'media' =>  'required',
            'Watermarked' =>  'required',
            'author' =>  'required',
            'status' =>  'required',
            'image' =>  'required',   
        ]);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'),$image_name);
            $img_url = 'upload/' . $image_name;

            $date = Carbon::now();

            Media::insert([
                'titlename' => $request->titlename,
                'autometedslug' => $request->autometedslug,
                'description' => $request->description,
                'quality' => $request->quality,
                'media' => $request->media,
                'Watermarked' => $request->Watermarked,
                'author' => $request->author,
                'status' => $request->status,
                'date' => $date,
                'image' => $img_url,
            ]);

            return view('admin.addtainner');
    }
    public function allmedia(){
        $detailsmedia = Media::latest()->get();
        return view('admin.allmedia', compact('detailsmedia'));
    }

    public function editmedia(Request $request, $id){
        // dd($request->all());
        $editmedia = Media::findOrFail($id);
        return view('admin.editmedia', compact('editmedia'));   
    }
    

    public function updatemedia(Request $request, $id) {
    
        $request->validate([
            'titlename' =>  'required',
            'autometedslug' =>  'required',
            'description' =>  'required',
            'quality' =>  'required',
            'Watermarked' =>  'required',
            'author' =>  'required',
            'status' =>  'required',
            // 'image' =>  'required',  
        ]);
    
        // $image = $request->file('image');
        // $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('upload'), $image_name);
        // $img_url = 'upload/' . $image_name;
    
        $date = now();
    
        // Using DB::update() to execute the update query
        DB::table('media')
            ->where('id', $id)
            ->update([
                'titlename' => $request->titlename,
                'autometedslug' => $request->autometedslug,
                'description' => $request->description,
                'quality' => $request->quality,
                'Watermarked' => $request->Watermarked,
                'author' => $request->author,
                'status' => $request->status,
                    // 'date' => $date,
                    // 'image' => $img_url,
            ]);
    
        // Redirect to the page where you want to go after the update (e.g., all blog page)
        return redirect()->route('allmedia')->with('success', 'Class Updated Successfully');
    }
    

   public function deletemedia($id){
             Media::findOrFail($id)->delete();
            return redirect()->route('allmedia');
        }

            
}
