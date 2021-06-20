<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Auth;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function welcome(){
        // dd('email');
        $data = [
            'name'=>'name',
            'msg'=>'msg'
        ];
        Mail::to('shiv@gmail.com')->send(new WelcomeMail());
        return new WelcomeMail();
        // return redirect('/');
    }
    public function test(){
        $data = ['name'=>'Shiv','data'=>'Helo Vishal'];
        $user['to'] = 'shivansh901@gmail.com';
        // Mail::send('emails.welcome', $data, function($message) use ($user){
        //     $message->to($user['to']);
        //     $message->subject('Hello Dev');
        // });
        Mail::to('shivansh901@gmail.com')->send(new WelcomeMail());

    }
}