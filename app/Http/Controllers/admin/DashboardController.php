<?php

namespace App\Http\Controllers\admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\blog;
use App\Models\admission_form;
use App\Models\advisor;
use App\Models\classes;
use App\Models\Media;
use App\Models\testimonials;
use Illuminate\Foundation\Auth\User as AuthUser;

class DashboardController extends Controller
{
    public function index(){
        $count = blog::count();
        $count_user = admission_form::count();
        $count_course = classes::count();
        $count_adviser = advisor::count();
        $count_testimonial = testimonials::count();
        $count_media = Media::count();
        return view('admin.dashboard' , compact('count','count_user','count_course','count_adviser','count_testimonial','count_media'));
    }
    
}
