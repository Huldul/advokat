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
        return view('EditPractickPage',[
            'product' => $product,
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
        return view('EditRewiewsPage',[
            'product' => $product,
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
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка на изображение
    ]);

    if ($validator->fails()) {
        return redirect('/admin/addRewiews')
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
    Rewiews::create([
        'title' => $request->input('title'),
        'main' => $request->input('main'),
        'subtitle' => $request->input('subtitle'),
        'image' => $fileName,
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
        return view('EditBlogPage',[
            'product' => $blog,
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
        return view('EditContactPage',[
            'product' => $blog,
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
        $contact->inst_title = $request->input('isnt_title');
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
        ]);
    }
    public function EditIndex(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
        ]);
    
        $product = IndexPage::findOrFail(1);
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->consultation = $request->input('consultation');
        $product->subtitle2 = $request->input('subtitle2');
        $product->quote = $request->input('quote');
        $product->revtitle = $request->input('revtitle');
        $product->practitle = $request->input('practitle');
        $product->blogtitle = $request->input('blogtitle');

    
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
    Advantages::create([
        'subtitle' => $request->input('subtitle'),
    ]);

    return redirect('/admin/EditIndexPage')->with('success', 'Принцип успешно добавлен');
}

    public function DeletePrincipe($id){

        $product = Advantages::find($id);

        // Проверяем, найден ли товар
        if (!$product) {
            return redirect('/admin/EditIndexPage')->with('error', 'Принцип не найден');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin/EditIndexPage')->with('success', 'Принцип успешно удален');
    }


    public function EditAboutPage(){
        $indexpage = AboutPage::find(1);
        $sertificates = Sertificate::all();
        return view('EditAboutPage',[
            'aboutPage' => $indexpage,
            'sertificates' => $sertificates,
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
        return view('EditServicePage',[
            'product' => $blog,
        ]);
    }
    public function EditService(Request $request, $id){
    
        $product = Services::findOrFail($id);
    
        // Обновляем данные товара
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
    
    
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
            return redirect('/admin')->with('error', 'Форма не найдена');
        }

        // Удаляем товар
        $product->delete();
        
        return redirect('/admin')->with('success', 'Форма успешно удалена');
    }
}

