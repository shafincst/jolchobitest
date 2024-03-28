<?php

namespace App\Http\Controllers;

use App\Models\admission_form;
use Illuminate\Http\Request;

class AdmissionAdd extends Controller
{

    public function admissionform(){
        return view('admission-form');
    }
   
    public function StoreAdmission(Request $request){
        $request->validate([
            'name' =>  'required',
            'date_of_birth' =>  'required',
            'school' =>  'required',
            'class' =>  'required',
            'mother_name' =>  'required',
            'mother_number' =>  'required',
            'father_name' =>  'required',
            'guardian' =>  'required',
            'guardian_number' =>  'required',
            'divisions' =>  'required',
            'distric' =>  'required',
            'polic_sta' =>  'required',
            'road_house' =>  'required',
            'email' =>  'required',
            'course' =>  'required',
            'reference' =>  'required',
            'reference_number' =>  'required',
            'image' =>  'required',
            'hobby' =>  'required',
            'checkbox' =>  'required',
            
        ]);
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
            $request->image->move(public_path('upload'),$image_name);
            $img_url = 'upload/' . $image_name;


        admission_form::insert([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'school' => $request->school,
            'class' => $request->class,
            'mother_name' => $request->mother_name,
            'mother_number' => $request->mother_number,
            'father_name' => $request->father_name,
            'father_number' => $request->father_number,
            'guardian' => $request->guardian,
            'guardian_number' => $request->guardian_number,
            'divisions' => $request->divisions,
            'distric' => $request->distric,
            'polic_sta' => $request->polic_sta,
            'road_house' => $request->road_house,
            'email' => $request->email,
            'course' => $request->course,
            'reference' => $request->reference,
            'reference_number' => $request->reference_number,
            'image' =>  $img_url,
            'hobby' => json_encode($request->hobby) ,
            'checkbox' => $request->checkbox,
        ]);
        //  return view('admission-form')->with('message','Admission Successfully!');
        return redirect()->route('admission-form')->with('message','Admission Successfully!');
    }
}
