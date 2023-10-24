<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Models\Practick;
use App\Models\Blog;
use App\Models\Rewiews;
use App\Models\Contact;
use App\Models\IndexPage;
use App\Models\Advantages;
use App\Models\Principes;
use App\Models\AboutPage;
use App\Models\Sertificate;
use App\Models\Services;
use App\Models\Sub_services;

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


    Route::get('admin/EditIndexPage', [AdminController::class, "EditIndexPage"]);
    Route::post('admin/editIndex', [AdminController::class, "EditIndex"]);

    Route::get('admin/addAdvantage', [AdminController::class, "AddAdvantagePage"]);
    Route::post('admin/addAdvantage', [AdminController::class, "AddAdvantage"]);
    Route::get('admin/deleteAdvantage/{id}', [AdminController::class, "DeleteAdvantage"]);
    

    Route::get('admin/addPrincipe', [AdminController::class, "AddPrincipePage"]);
    Route::post('admin/addPrincipe', [AdminController::class, "AddPrincipe"]);
    Route::get('admin/deletePrincipe/{id}', [AdminController::class, "DeletePrincipe"]);


    Route::get('admin/EditAboutPage', [AdminController::class, "EditAboutPage"]);
    Route::post('admin/editAbout', [AdminController::class, "EditAbout"]);

    Route::get('admin/addSertificate', [AdminController::class, "AddSertificatePage"]);
    Route::post('admin/addSertificate', [AdminController::class, "AddSertificate"]);
    Route::get('admin/deleteSertificate/{id}', [AdminController::class, "DeleteSertificate"]);

    Route::get('admin/editService/{id}', [AdminController::class, "EditServicePage"]);
    Route::get('admin/addService', [AdminController::class, "AddServicePage"]);
    Route::post('admin/editService/{id}', [AdminController::class, "EditService"]);
    Route::post('admin/addService', [AdminController::class, "AddService"]);
    Route::get('admin/deleteService/{id}', [AdminController::class, "DeleteService"]);

    Route::get('admin/editSubService/{id}', [AdminController::class, "EditSubServicePage"]);
    Route::get('admin/AddSubService/{id}', [AdminController::class, "AddSubServicePage"]);
    Route::post('admin/editSubService/{id}', [AdminController::class, "EditSubService"]);
    Route::post('admin/addSubService/{id}', [AdminController::class, "AddSubService"]);
    Route::post('admin/DeleteSubService', [AdminController::class, "DeleteSubService"]);
    Route::get('admin/deleteSubServicePage/{id}', [AdminController::class, "DeleteSubServicePage"]);

    Route::get('admin/deleteForm/{id}', [AdminController::class, "DeleteForm"]);

});
Route::get('/login', [PageController::class, "LoginPage"])->name('login');
Route::post('login/checkPswd', [PageController::class, "CheckPswd"]);

Route::get('/', function(){
    $contact = Contact::find(1);
    $indexPage = IndexPage::find(1);
    $advantages = Advantages::All();
    $principes = Principes::All();
    $services = Services::all();
    $rewiews = Rewiews::paginate(3);
    return view('index', [
        'contact'=>$contact,
        'rewiews'=> $rewiews,
        'indexPage' => $indexPage,
        'advantages' => $advantages,
        'principes' => $principes,
        'services'=> $services
    ]);
});
Route::get('/about', function(){
    $contact = Contact::find(1);
    $indexPage = IndexPage::find(1);
    $aboutPage = AboutPage::find(1);
    $sertifications = Sertificate::all();
    return view('about',[
        'contact'=>$contact,
        'indexPage' => $indexPage,
        'aboutPage'=>$aboutPage,
        'sertificates' => $sertifications
    ]);
});
Route::get('/services', function(){
    $contact = Contact::find(1);
    $indexPage = IndexPage::find(1);
    $services = Services::all();
    return view('services',[
        'contact'=>$contact,
        'indexPage' => $indexPage,
        'services'=> $services
    ]);
});
Route::get('/services-single-2/{id}', function($id){
    $contact = Contact::find(1);
    $indexPage = IndexPage::find(1);
    $subservices = Sub_services::Where('services_id', $id)->get();
    $services = Services::find($id);
    return view('services-single-2',[
        'contact'=>$contact,
        'indexPage' => $indexPage,
        'subservices'=> $subservices,
        'services'=> $services
    ]);
});
Route::get('/practics', function(){
    $contact = Contact::find(1);
    $practicks = Practick::paginate(9);
    $indexPage = IndexPage::find(1);
    return view('practics',[
        'contact'=>$contact,
        'indexPage' => $indexPage,
        'practicks'=> $practicks
    ]);
});
Route::get('/reviews', function(){
    $contact = Contact::find(1);
    $rewiews = Rewiews::paginate(9);
    $indexPage = IndexPage::find(1);
    return view('reviews', [
        'contact'=>$contact,
        'indexPage' => $indexPage,
        'rewiews'=> $rewiews
    ]);
});
Route::get('/blog', function(){
    $contact = Contact::find(1);
    $blogs = Blog::paginate(9);
    $indexPage = IndexPage::find(1);
    return view('blog', [
        'contact'=>$contact,
        'indexPage' => $indexPage,
        'blogs'=> $blogs
    ]);
});
Route::get('/contacts', function(){
    $contact = Contact::find(1);
    $indexPage = IndexPage::find(1);
    return view('contacts',[
        'contact'=>$contact,
        'indexPage' => $indexPage,
    ]);
});
Route::get('/blog-single/{id}', [PageController::class, "blog"]);
Route::post('/sendmail', [PageController::class, "sendRequest"]);
