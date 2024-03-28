<?php

namespace App\Http\Controllers;

use App\Models\admin\blog;
use App\Models\classes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    
    public function trainer(){
        return view('trainer');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function blog_listc(){
        return view('blog_list');
    }
    public function admission_form(){
        return view('admission-form');
    }
    public function blog_list(){
        // $blogs = blog::latest()->get();
        $blogs = blog::where('status', 'Published')->latest()->get();
        $blogs_head = blog::where('status', 'Published')->take(1)->get();
        $blogs_limit = blog::where('status', 'Published')->skip(1)->take(3)->get();
        return view('blog-list', compact('blogs','blogs_limit','blogs_head',));
    }
    public function course_list(){
        $course = classes::latest()->get();
        return view('course-list',compact('course'));
    }

    public function blog_view($id, $slug){
        $view = blog::latest()->where('id', $id)->get();
        $blogs_limit = blog::take(3)->get();
        return view('blog_view', compact('view','blogs_limit'));
    }
    
}
