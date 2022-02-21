<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Mail\WelcomeMail;
use App\Mail\NewMessage;
use Illuminate\Support\Facades\Mail;
use Auth;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function welcome(){
        $data = [
            'name'=>'name',
            'msg'=>'msg',
            'email'=>'email',
        ];
        Mail::to(email)->send(new WelcomeMail());
        return new WelcomeMail();
        // return redirect('/');
    }
    public function test(){
        $data = ['name'=>'Shiv','data'=>'Helo Vishal'];
        $user['to'] = 'sh901@gmail.com';
        Mail::to('sh901@gmail.com')->send(new NewMessage());

    // }
}