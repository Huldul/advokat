<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Practick;
use App\Models\Rewiews;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\IndexPage;
use App\Models\Advantages;
use App\Models\Principes;
use App\Models\AboutPage;
use App\Models\Sertificate;
use App\Models\Services;
use App\Models\Sub_services;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function AdminPage()
    {
        $services = Services::All();
        $product = Practick::All();
        $blogs = Blog::All();
        $rewiews = Rewiews::All();
        $forms = Form::All();
        return view('user-management',[
            'products' => $product,
            'blogs' => $blogs,
            'rewiews' => $rewiews,
            'services' => $services,
            'forms' => $forms
        ]);
    }
    public function EditPractickPage($id){
        $product = Practick::find($id);
        $indexpage = IndexPage::find(1);
        return view('EditPractickPage',[
            'product' => $product,
            'indexpage'=> $indexpage,
        ]);
    }
    public function EditPractick(Request $request, $id){
        // Проверка, было ли загружено новое изображение
        if ($request->hasFile('image')) {
            // Если файл изображения загружен, тогда проводим валидацию
            $request->validate([
                'title' => 'required|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка на изображение
            ]);
        } else {
            // Если файл изображения не загружен, просто проводим валидацию для остальных полей
            $request->validate([
                'title' => 'required|max:255',
            ]);
        }
    
        // Находим товар
        $product = Practick::findOrFail($id);
    
        // Обновляем данные товара
        $product->title = $request->input('title');
        $product->author = $request->input('author');
        $product->main = $request->input('main');
        $product->subtitle = $request->input('subtitle');
    
        // Обрабатываем изображение, если оно было загружено
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName(); // Создаем уникальное имя
            $file = $request->file('image');
            $product->image = $imageName; // Обновляем путь к изображению
            $file->move(public_path('images'), $imageName);
        }
    
        // Сохраняем изменения
        $product->save();
    
        return redirect('/admin')->with('success', 'Практика успешно обновлен');
    }
    
    public function AddPractickPage(){
        return view('AddPractickPage');
    }
    public function addPractick(Request $request){
    // Валидация данных
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка на изображение
    ]);

    if ($validator->fails()) {
        return redirect('/admin/addPractick')
                    ->withErrors($validator)
                    ->withInput();
    }

    // Обработка изображения

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
    }

    // Создание нового товара
    Practick::create([
        'title' => $request->input('title'),
        'author' => $request->input('author'),
        'main' => $request->input('main'),
        'subtitle' => $request->input('subtitle'),
        'image' => $fileName,
    ]);

    return redirect('/admin')->with('success', 'Практика успешно добавлен');
}

    public function DeletePractick($id){

        $product = Practick::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin')->with('error', 'Практика не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin')->with('success', 'Практика успешно удален');
    }
    public function ChangePswd(){
        return view('ChangePswd');
    }
    public function Change(Request $request){
        // dd($request);
        $admin = User::find(1)->first();
        $realPswd = User::find(1)->first()->pswd;
        if($request->old != $realPswd){
            return redirect('/admin/changePswd')->with('error', "Неверный старый пароль");
        }
        if($request->new != $request->conf){
            return redirect('/admin/changePswd')->with('error', "Пароли не совпадают");
        }
        $admin->pswd = $request->new;
        $admin->save();

        return redirect('/admin')->with('success', "Пароль успешно изменен");
    }



    public function EditRewiewsPage($id){
        $product = Rewiews::find($id);
        $indexpage = IndexPage::find(1);
        return view('EditRewiewsPage',[
            'product' => $product,
            'indexpage'=> $indexpage,
        ]);
    }
    public function EditRewiews(Request $request, $id){
        // Проверка, было ли загружено новое изображение
        if ($request->hasFile('image')) {
            // Если файл изображения загружен, тогда проводим валидацию
            $request->validate([
                'title' => 'required|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка на изображение
            ]);
        } else {
            // Если файл изображения не загружен, просто проводим валидацию для остальных полей
            $request->validate([
                'title' => 'required|max:255',
            ]);
        }
    
        // Находим товар
        $product = Rewiews::findOrFail($id);
    
        // Обновляем данные товара
        $product->title = $request->input('title');
        $product->author = $request->input('author');
        $product->main = $request->input('main');
        $product->subtitle = $request->input('subtitle');
    
        // Обрабатываем изображение, если оно было загружено
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName(); // Создаем уникальное имя
            $file = $request->file('image');
            $product->image = $imageName; // Обновляем путь к изображению
            $file->move(public_path('images'), $imageName);
        }
    
        // Сохраняем изменения
        $product->save();
    
        return redirect('/admin')->with('success', 'Отзыв успешно обновлен');
    }
    
    public function AddRewiewsPage(){
        return view('AddRewiewsPage');
    }
    public function addRewiews(Request $request){
    // Валидация данных

    // Обработка изображения
    $fileName = null;

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
    }

    
    // Создание нового товара
    Rewiews::create([
        'title' => $request->input('title'),
        'main' => $request->input('main'),
        'subtitle' => $request->input('subtitle'),
        'image' => $fileName,
        'author'=>$request->input('author'),
    ]);

    return redirect('/admin')->with('success', 'Отзыв успешно добавлен');
}

    public function DeleteRewiews($id){

        $product = Rewiews::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin')->with('error', 'Отзыв не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin')->with('success', 'Отзыв успешно удален');
    }








    public function EditBlogPage($id){
        $blog = Blog::find($id);
        $indexpage = IndexPage::find(1);
        return view('EditBlogPage',[
            'product' => $blog,
            'indexpage'=> $indexpage,
        ]);
    }
    public function EditBlog(Request $request, $id){
        // Проверка, было ли загружено новое изображение
        if ($request->hasFile('image')) {
            // Если файл изображения загружен, тогда проводим валидацию
            $request->validate([
                'title' => 'required|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка на изображение
            ]);
        } else {
            // Если файл изображения не загружен, просто проводим валидацию для остальных полей
            $request->validate([
                'title' => 'required|max:255',
            ]);
        }
    
        // Находим товар
        $product = Blog::findOrFail($id);
    
        // Обновляем данные товара
        $product->title = $request->input('title');
        $product->main = $request->input('main');
        $product->subtitle = $request->input('subtitle');
        $product->url= Str::slug($request->input('title'), '-');
    
        // Обрабатываем изображение, если оно было загружено
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName(); // Создаем уникальное имя
            $file = $request->file('image');
            $product->image = $imageName; // Обновляем путь к изображению
            $file->move(public_path('images'), $imageName);
        }
    
        // Сохраняем изменения
        $product->save();
    
        return redirect('/admin')->with('success', 'Блог успешно обновлен');
    }
    
    public function AddBlogPage(){
        return view('AddBlogPage');
    }
    public function addBlog(Request $request){
    // Валидация данных
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка на изображение
    ]);

    if ($validator->fails()) {
        return redirect('/admin/addBlog')
                    ->withErrors($validator)
                    ->withInput();
    }

    // Обработка изображения

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
    }

    // Создание нового товара
    Blog::create([
        'title' => $request->input('title'),
        'author' => $request->input('author'),
        'main' => $request->input('main'),
        'subtitle' => $request->input('subtitle'),
        'image' => $fileName,
        'url'=>Str::slug($request->input('title'), '-')
    ]);

    return redirect('/admin')->with('success', 'Блог успешно добавлен');
}

    public function DeleteBlog($id){

        $product = Blog::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin')->with('error', 'Блог не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin')->with('success', 'Блог успешно удален');
    }
    public function EditContactPage(){
        $blog = Contact::find(1);
        $indexpage = IndexPage::find(1);
        return view('EditContactPage',[
            'product' => $blog,
            'indexpage'=> $indexpage,
        ]);
    }
    public function EditContact(Request $request){

    
        // Находим товар
        $contact = Contact::findOrFail(1);
    
        // Обновляем данные товара
        $contact->adress = $request->input('adress');
        $contact->shortadress = $request->input('shortadress');
        $contact->number = $request->input('number');
        $contact->email = $request->input('email');
        $contact->whatsapp = $request->input('wa');
        $contact->facebook = $request->input('face');
        $contact->instagram = $request->input('inst');
        $contact->title = $request->input('title');
        $contact->subtitle = $request->input('subtitle');
        $contact->inst_title = $request->input('inst_title');
        $contact->inst_subtitle = $request->input('inst_subtitle');
        $contact->licenze = $request->input('licenze');
    
        // Обрабатываем изображение, если оно было загружено
    
        // Сохраняем изменения
        $contact->save();
    
        return redirect('/admin')->with('success', 'Контакты успешно обновлены');
    }





    public function EditIndexPage(){
        $indexpage = IndexPage::find(1);
        $advantages = Advantages::all();
        $principes = Principes::all();
        return view('EditIndexPage',[
            'product' => $indexpage,
            'advantages' => $advantages,
            'principes' => $principes,
            'indexpage'=> $indexpage,
            'title'=>$indexpage,
        ]);
    }
    public function EditIndex(Request $request) {
        
    
        $product = IndexPage::findOrFail(1);
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->consultation = $request->input('consultation');
        $product->subtitle2 = $request->input('subtitle2');
        $product->quote = $request->input('quote');

    
        for ($i = 1; $i <= 5; $i++) {
            $fieldName = 'image'.$i;
    
            if ($request->hasFile($fieldName)) {
                $imageName = time() . '_' . $request->file($fieldName)->getClientOriginalName();
                $file = $request->file($fieldName);
                $product->$fieldName = $imageName;
                $file->move(public_path('images'), $imageName);
            }
        }
    
        $product->save();
    
        return redirect('/admin/EditIndexPage')->with('success', 'Главная страница успешно обновлена');
    } 

    public function AddAdvantagePage(){
        return view('AddAdvantagesPage');
    }
    public function addAdvantage(Request $request){
    // Валидация данных
    // Создание нового товара
    Advantages::create([
        'subtitle' => $request->input('subtitle'),
    ]);

    return redirect('/admin/EditIndexPage')->with('success', 'Приемущество успешно добавлено');
}

    public function DeleteAdvantage($id){

        $product = Advantages::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin/EditIndexPage')->with('error', 'Приемущество не найдено');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin/EditIndexPage')->with('success', 'Приемущество успешно удалено');
    }

    public function AddPrincipePage(){
        return view('AddPrincipesPage');
    }
    public function addPrincipe(Request $request){
    // Валидация данных
    // Создание нового товара
    Principes::create([
        'subtitle' => $request->input('subtitle'),
    ]);

    return redirect('/admin/EditIndexPage')->with('success', 'Принцип успешно добавлен');
}

    public function DeletePrincipe($id){

        $product = Principes::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin/EditIndexPage')->with('error', 'Принцип не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin/EditIndexPage')->with('success', 'Принцип успешно удален');
    }


    public function EditAboutPage(){
        $indexpage1 = IndexPage::find(1);
        $indexpage = AboutPage::find(1);
        $sertificates = Sertificate::all();
        return view('EditAboutPage',[
            'aboutPage' => $indexpage,
            'sertificates' => $sertificates,
            'indexpage'=> $indexpage1,
            'title'=>$indexpage,
        ]);
    }
    public function EditAbout(Request $request) {
    
        $product = AboutPage::findOrFail(1);
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->subtitle2 = $request->input('subtitle2');
    
        for ($i = 1; $i <= 2; $i++) {
            $fieldName = 'image'.$i;
    
            if ($request->hasFile($fieldName)) {
                $imageName = time() . '_' . $request->file($fieldName)->getClientOriginalName();
                $file = $request->file($fieldName);
                $product->$fieldName = $imageName;
                $file->move(public_path('images'), $imageName);
            }
        }
    
        $product->save();
    
        return redirect('/admin')->with('success', 'Страница о мне успешно обновлена');
    }
    public function AddSertificatePage(){
        return view('AddSertificatePage');
    }
    public function addSertificate(Request $request){
    $imageName = time() . '_' . $request->file('image')->getClientOriginalName(); // Создаем уникальное имя
    $file = $request->file('image');
    $file->move(public_path('images'), $imageName);
    Sertificate::create([
        'image' => $imageName,
    ]);

    return redirect('/admin/EditAboutPage')->with('success', 'Принцип успешно добавлен');
}

    public function DeleteSertificate($id){

        $product = Advantages::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin/EditAboutPage')->with('error', 'Принцип не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin/EditAboutPage')->with('success', 'Принцип успешно удален');
    }



    public function EditServicePage($id){
        $blog = Services::find($id);
        $indexpage = IndexPage::find(1);
        return view('EditServicePage',[
            'product' => $blog,
            'indexpage'=> $indexpage,
        ]);
    }
    public function EditService(Request $request, $id){
    
        $product = Services::findOrFail($id);
    
        // Обновляем данные товара
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->url = Str::slug($request->input('title'), '-');
    
    
        // Сохраняем изменения
        $product->save();
    
        return redirect('/admin')->with('success', 'Сервис успешно обновлен');
    }
    
    public function AddServicePage(){
        return view('AddServicePage');
    }
    public function addService(Request $request){

    // Создание нового товара
    Services::create([
        'title' => $request->input('title'),
        'subtitle' => $request->input('subtitle'),
        'url'=> Str::slug($request->input('title'), '-')
    ]);

    return redirect('/admin')->with('success', 'Сервис успешно добавлен');
}

    public function DeleteService($id){

        $product = Services::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin')->with('error', 'Сервис не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin')->with('success', 'Сервис успешно удален');
    }
    
    public function AddSubServicePage($id){
        $service = Services::find($id);
        return view('AddSubServicePage',[
            'service' => $service,
        ]);
    }
    public function addSubService(Request $request, $id){
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
        }
    // Создание нового товара
        
        Sub_services::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $fileName,
            'services_id' => $id,
            'services_url' => Services::find($id)->url,

        ]);

        return redirect('/admin')->with('success', 'Подсервис успешно добавлен');
}

    public function DeleteSubServicePage($id){
        $service = Services::find($id);
        return view('DeleteSubServicePage',[
          'service' => $service,
        ]);
    }
    public function DeleteSubService(Request $request){

        $subservice = Sub_services::find($request->input('id'));

        // Проверяем, найден ли товар
        if (!$subservice) {
            return redirect('/admin')->with('error', 'Подсервис не найден');
        }

        // Удаляем товар
        $subservice->delete();
        
        return redirect('/admin')->with('success', 'Подсервис успешно удален');
    }
    public function DeleteForm($id){

        $product = Form::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin')->with('error', 'Заявка не найдена');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin')->with('success', 'Заявка успешно удалена');
    }


    public function EditServicePage1(){
        $services = Services::All();
        $product = Practick::All();
        $blogs = Blog::All();
        $rewiews = Rewiews::All();
        $forms = Form::All();
        $indexpage = IndexPage::find(1);
        return view('EditServicePage1',[
            'products' => $product,
            'blogs' => $blogs,
            'rewiews' => $rewiews,
            'services' => $services,
            'indexpage'=> $indexpage,
            'title'=>$indexpage,
            'forms' => $forms
        ]);
    }
    public function EditBlogPage1(){
        $services = Services::All();
        $product = Practick::All();
        $blogs = Blog::All();
        $title= IndexPage::find(1);
        $rewiews = Rewiews::All();
        $forms = Form::All();
        $indexpage = IndexPage::find(1);
        return view('EditBlogPage1',[
            'title'=>$title,
            'products' => $product,
            'indexpage'=> $indexpage,
            'blogs' => $blogs,
            'rewiews' => $rewiews,
            'services' => $services,
            'forms' => $forms
        ]);
    }
    public function EditRewiewsPage1(){
        $services = Services::All();
        $product = Practick::All();
        $blogs = Blog::All();
        $rewiews = Rewiews::All();
        $title= IndexPage::find(1);
        $forms = Form::All();
        $indexpage = IndexPage::find(1);
        return view('EditRewiewsPage1',[
            'products' => $product,
            'blogs' => $rewiews,
            'rewiews' => $rewiews,
            'title'=>$title,
            'services' => $services,
            'indexpage'=> $indexpage,
            'forms' => $forms
        ]);
    }
    public function EditPractickPage1(){
        $services = Services::All();
        $product = Practick::All();
        $blogs = Blog::All();
        $title= IndexPage::find(1);
        $rewiews = Rewiews::All();
        $forms = Form::All();
        $indexpage = IndexPage::find(1);
        return view('EditPractickPage1',[
            'products' => $product,
            'blogs' => $blogs,
            'title'=>$title,
            'rewiews' => $rewiews,
            'services' => $services,
            'indexpage'=> $indexpage,
            'forms' => $forms
        ]);
    }
    public function FormsPage1(){
        $services = Services::All();
        $product = Practick::All();
        $blogs = Blog::All();
        $title= IndexPage::find(1);
        $rewiews = Rewiews::All();
        $forms = Form::All();
        return view('FormsPage1',[
            'products' => $product,
            'blogs' => $blogs,
            'rewiews' => $rewiews,
            'title'=>$title,
            'services' => $services,
            'forms' => $forms
        ]);
    }
    public function EditBlogTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->blogtitle = $request->input('blogtitle');

        $product->save();
    
        return redirect('/admin/EditBlogPage1')->with('success', 'Название успешно обновлено');
    }
    public function EditPractickTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->practitle = $request->input('practitle');

        $product->save();
    
        return redirect('/admin/EditPractickPage1')->with('success', 'Название успешно обновлено');
    }
    public function EditRewiewsTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->revtitle = $request->input('revtitle');

        $product->save();
    
        return redirect('/admin/EditRewiewsPage1')->with('success', 'Название успешно обновлено');
    }
    public function EditIndexTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->indextitle = $request->input('blogtitle');

        $product->save();
    
        return redirect('/admin/EditRewiewsPage1')->with('success', 'Название успешно обновлено');
    }   
    public function EditAboutTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->abouttitle = $request->input('blogtitle');

        $product->save();
    
        return redirect('/admin/EditRewiewsPage1')->with('success', 'Название успешно обновлено');
    }      

    public function EditServiceTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->servicetitle = $request->input('servicetitle');

        $product->save();
    
        return redirect('/admin/EditServicePage1')->with('success', 'Название успешно обновлено');
    } 
    public function EditContactTitle(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->contacttitle = $request->input('contacttitle');

        $product->save();
    
        return redirect('/admin/EditContactPage')->with('success', 'Название успешно обновлено');
    } 


    public function EditSEOAbout(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitleabout = $request->input('title');
        $product->metakeyabout = $request->input('key');
        $product->metadescriptionabout = $request->input('desc');

        $product->save();

        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEOPractick(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitlepractick = $request->input('title');
        $product->metakeypractick = $request->input('key');
        $product->metadescriptionpractick = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEORewiew(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitlerewiew = $request->input('title');
        $product->metakeyrewiew = $request->input('key');
        $product->metadescriptionrewiew = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEOBlog(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitleblog = $request->input('title');
        $product->metakeyblog = $request->input('key');
        $product->metadescriptionblog = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEOService(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitleservice = $request->input('title');
        $product->metakeyservice = $request->input('key');
        $product->metadescriptionservice = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEOContact(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitlecontact = $request->input('title');
        $product->metakeycontact = $request->input('key');
        $product->metadescriptioncontact = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEOIndex(Request $request){
        $product = IndexPage::findOrFail(1);
        $product->metatitleindex = $request->input('title');
        $product->metakeyindex = $request->input('key');
        $product->metadescriptionindex = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }

    public function EditSEOBlog1(Request $request, $id){
        $product = Blog::find($id);
        $product->metatitle = $request->input('title');
        $product->metakey = $request->input('key');
        $product->metadescription = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }
    public function EditSEOService1(Request $request, $id){
        $product = Services::find($id);
        $product->metatitle = $request->input('title');
        $product->metakey = $request->input('key');
        $product->metadescription = $request->input('desc');

        $product->save();
        return redirect('/admin')->with('success', 'meta успешно измененны');
    }

    public function EditPrincipes(Request $request, $id) {
        
    
        $product = Principes::Find($id);
        $product->subtitle = $request->input('subtitle');
    
        $product->save();
    
        return redirect('/admin')->with('success', 'Успешно обновлен');
    } 
    public function EditAdv(Request $request, $id) {
        
    
        $product = Advantages::Find($id);
        $product->subtitle = $request->input('subtitle');
    
        $product->save();
    
        return redirect('/admin')->with('success', 'Успешно обновлен');
    } 
    public function EditPrincipesPage($id){
        $blog = Principes::find($id);
        return view('EditPrincipes',[
            'product' => $blog,
        ]);
    }
    public function EditAdvPage($id){
        $blog = Advantages::find($id);
        return view('EditAdv',[
            'product' => $blog,
        ]);
    }
}

