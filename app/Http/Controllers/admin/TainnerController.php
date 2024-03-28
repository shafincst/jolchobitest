<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TainnerController extends Controller
{
    public function index(){
        return view('admin.addtainner');
    }

    public function alltainner(){
        return view('admin.alltainner');
    }
}
