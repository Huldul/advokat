<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Practick;
use App\Models\Rewiews;
use App\Models\Blog;
use App\Models\Contact;

class AdminController extends Controller
{
    public function AdminPage()
    {
        $product = Practick::All();
        $blogs = Blog::All();
        $rewiews = Rewiews::All();
        return view('user-management',[
            'products' => $product,
            'blogs' => $blogs,
            'rewiews' => $rewiews   ,
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
    
        // Обрабатываем изображение, если оно было загружено
    
        // Сохраняем изменения
        $contact->save();
    
        return redirect('/admin')->with('success', 'Контакты успешно обновлены');
    }
}

