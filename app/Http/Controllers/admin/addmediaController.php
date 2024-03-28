<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addmediaController extends Controller
{
    public function index(){
        return view('admin.addmedia');
    }

    public function allmedia(){
        return view('admin.allmedia');
    }
}
