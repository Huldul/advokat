<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function LoginPage(){
        return view('LoginPage');
    }
    public function CheckPswd(Request $request){
        $post = $request->all();
        $admin = User::find(1);
    
        if($post['email'] == $admin->email and $post['pswd'] == $admin->pswd){
            Auth::login($admin); // Аутентифицируем пользователя
            return redirect('/admin');
        } else {
            return redirect('/login')->with('error', 'Неверные учетные данные');
        }
    }
    public function blog($id){
        $blog = Blog::find($id);
        return view('blog-single', compact('blog'));
    }
    public function sendRequest(Request $request){
    $name = $request->input('name');
    $number = $request->input('number');

    Mail::send('email.request', ['name' => $name, 'number' => $number], function ($message) {
        $message->to('email.example.com', 'Админ')->subject('Новая заявка');
    });

    return redirect()->back()->with('success', 'Ваша заявка успешно отправлена!');
}

}

