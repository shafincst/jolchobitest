<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admission_form;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $admissions = admission_form::latest()->get();
        return view('admin.users',compact('admissions'));
    }
    public function Profileview($id){
        $admissions_public = admission_form::findOrFail($id);

        return view('admin.profile_view',compact('admissions_public'));
    }
    public function deleteuser($id){
        admission_form::findOrFail($id)->delete();
        return redirect()->route('users');
    }
}
