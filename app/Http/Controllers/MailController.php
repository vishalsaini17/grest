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
        $data = [
            'name'=>'name',
            'msg'=>'msg'
        ];
        Mail::to('shiv@gmail.com')->send(new WelcomeMail());
        return new WelcomeMail();
        // return redirect('/');
    }
}