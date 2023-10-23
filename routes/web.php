<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Models\Practick;
use App\Models\Blog;
use App\Models\Rewiews;
use App\Models\Contact;


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



Route::middleware('admin')->group(function () {
    Route::get('admin', [AdminController::class, "AdminPage"]);
    Route::get('admin/editPractick/{id}', [AdminController::class, "EditPractickPage"]);
    Route::get('admin/addPractick', [AdminController::class, "AddPractickPage"]);
    Route::post('admin/editPractick/{id}', [AdminController::class, "EditPractick"]);
    Route::post('admin/addPractick', [AdminController::class, "AddPractick"]);
    Route::get('admin/deletePractick/{id}', [AdminController::class, "DeletePractick"]);

    Route::get('admin/editRewiews/{id}', [AdminController::class, "EditRewiewsPage"]);
    Route::get('admin/addRewiews', [AdminController::class, "AddRewiewsPage"]);
    Route::post('admin/editRewiews/{id}', [AdminController::class, "EditRewiews"]);
    Route::post('admin/addRewiews', [AdminController::class, "AddRewiews"]);
    Route::get('admin/deleteRewiews/{id}', [AdminController::class, "DeleteRewiews"]);

    Route::get('admin/editBlog/{id}', [AdminController::class, "EditBlogPage"]);
    Route::get('admin/addBlog', [AdminController::class, "AddBlogPage"]);
    Route::post('admin/editBlog/{id}', [AdminController::class, "EditBlog"]);
    Route::post('admin/addBlog', [AdminController::class, "AddBlog"]);
    Route::get('admin/deleteBlog/{id}', [AdminController::class, "DeleteBlog"]);

    Route::get('admin/editContact', [AdminController::class, "EditContactPage"]);
    Route::post('admin/editContact', [AdminController::class, "EditContact"]);

    Route::get('admin/changePswd', [AdminController::class, "ChangePswd"]);
    Route::post('admin/change', [AdminController::class, "Change"]);
});
Route::get('/login', [PageController::class, "LoginPage"])->name('login');
Route::post('login/checkPswd', [PageController::class, "CheckPswd"]);

Route::get('/', function(){
    $contact = Contact::find(1);
    $rewiews = Rewiews::paginate(3);
    return view('index', [
        'contact'=>$contact,
        'rewiews'=> $rewiews
    ]);
});
Route::get('/about', function(){
    $contact = Contact::find(1);
    return view('about',[
        'contact'=>$contact,
    ]);
});
Route::get('/services', function(){
    $contact = Contact::find(1);
    return view('services',[
        'contact'=>$contact,
    ]);
});
Route::get('/practics', function(){
    $contact = Contact::find(1);
    $practicks = Practick::paginate(9);
    return view('practics',[
        'contact'=>$contact,
        'practicks'=> $practicks
    ]);
});
Route::get('/reviews', function(){
    $contact = Contact::find(1);
    $rewiews = Rewiews::paginate(9);
    return view('reviews', [
        'contact'=>$contact,
        'rewiews'=> $rewiews
    ]);
});
Route::get('/blog', function(){
    $contact = Contact::find(1);
    $blogs = Blog::paginate(9);
    return view('blog', [
        'contact'=>$contact,
        'blogs'=> $blogs
    ]);
});
Route::get('/contacts', function(){
    $contact = Contact::find(1);
    return view('contacts',[
        'contact'=>$contact,
    ]);
});
Route::get('/blog-single/{id}', [PageController::class, "blog"]);
Route::post('/sendmail', [PageController::class, "sendRequest"]);
