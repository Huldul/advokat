<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Bridge\Mailgun\Transport\MailgunTransportFactory;
use Exception;
use App\Models\Form;


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
        try{
            $name = $request->input('name');
            $number = $request->input('number');
        }catch (Exception $e) {
            // Обработка ошибки
            
        }

        Form::Create([
            'name' => $request->input('name'),
            'number' => $request->input('number'),
        ]);

        return redirect()->back()->with('success', 'Ваше сообщение отправлено');

    
}

}

