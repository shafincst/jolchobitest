<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\TainnerController;
use App\Http\Controllers\admin\FeaturedController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AdmissionAdd;
use App\Http\Controllers\HomeController;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/admission-form', function () {
//     return view('admission-form');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/course-list', function () {
//     return view('course-list');
// });
Route::controller(HomeController::class)->group(function(){
   
    Route::get('/blog_list', 'blog_list')->name('blog_list');
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/course_list', 'course_list')->name('course_list');
    Route::get('/trainer', 'trainer')->name('trainer');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/blog_list', 'blog_list')->name('blog_list');
    Route::get('/admission_form', 'admission_form')->name('admission_form');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/blog_view/{id}/{slug}', 'blog_view')->name('blog_view');
});
// Route::get('/blog-list', function () {updateblog
//     return view('blog-list');
// });
// Route::get('/testimonial', function () {
//     return view('testimonial');
// });
// Route::get('/trainer', function () {
//     return view('trainer');
// });
// Route::get('/blog-details', function () {
//     return view('blog-details');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(BlogController::class)->group(function(){
    Route::get('/addblog', 'index')->name('addblog');
    Route::post('/added_blog', 'added_blog')->name('added_blog');
    Route::get('/allblog', 'allblog')->name('allblog');
    Route::get('/editblog/{id}', 'editblog')->name('editblog');
    Route::post('/updateblog/{id}', 'updateblog')->name('updateblog'); // Adjusted route definition
    Route::get('/deleteblog/{id}', 'deleteblog')->name('deleteblog');
});


    Route::controller(CourseController::class)->group(function(){
        Route::get('/addcourse', 'index')->name('addcourse');
        Route::post('/added_course', 'added_course')->name('added_course');
        Route::get('/allcourse', 'allcourse')->name('allcourse');
        Route::get('/editcourse/{id}', 'editcourse')->name('editcourse');
        Route::post('/updatecourse/{id}', 'updatecourse')->name('updatecourse'); 
        Route::get('/deletecourse/{id}', 'deletecourse')->name('deletecourse');
    });

    Route::controller(FeaturedController::class)->group(function(){
        Route::get('/addfeatured', 'index')->name('addfeatured');
        Route::get('/allfeatured', 'allfeatured')->name('allfeatured');
    });

    Route::controller(TainnerController::class)->group(function(){
        Route::get('/addtainner', 'index')->name('addtainner');
        Route::get('/alltainner', 'alltainner')->name('alltainner');
    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/users', 'index')->name('users');
        Route::get('/profile_view/{id}','Profileview')->name('profileview');
        Route::get('/deleteuser/{id}', 'deleteuser')->name('deleteuser');

    });
   
    Route::controller(AdmissionAdd::class)->group(function(){
        Route::post('/admission-form','storeAdmission')->name('storeadmission');
        Route::get('/admission-form','admissionform')->name('admission-form');
    });
    
});

require __DIR__.'/auth.php';
