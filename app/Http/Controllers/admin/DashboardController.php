<?php

namespace App\Http\Controllers\admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\blog;
use App\Models\admission_form;
use Illuminate\Foundation\Auth\User as AuthUser;

class DashboardController extends Controller
{
    public function index(){
        $count = blog::count();
        $count_user = admission_form::count();
        return view('admin.dashboard' , compact('count','count_user'));
    }
    
}
