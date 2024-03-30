<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            'Featured' =>  'required',
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
                'Featured' => $request->Featured,
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

    public function alltainner(){
        $detailstainner = Media::latest()->get();
        return view('admin.alltainner', compact('detailstainner'));
    }


   public function deletetainner($id){
             Media::findOrFail($id)->delete();
            return redirect()->route('allcourse');
        }

            
}
