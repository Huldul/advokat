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
use App\Models\Contact;
use App\Models\IndexPage;


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
    public function blog($url){
        $blog = Blog::Where('url', $url)->first();
        $contact = Contact::find(1);
        $indexPage = IndexPage::find(1);
        return view('blog-single', [
            'blog'=>$blog,
            'contact'=>$contact,
            'indexPage'=>$indexPage
        ]);
    }
    public function sendRequest(Request $request){
        Form::Create([
            'name' => $request->input('name'),
            'number' => $request->input('number'),
        ]);

        return redirect()->back()->with('success', 'Ваше сообщение отправлено');

    
}

}

