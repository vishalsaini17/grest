<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
// use Auth;
use Laravel\Socialite\Facades\Socialite; // as FacadesSocialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function credentials(Request $request)
    {
        return ['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'user'];
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirect($provider)
    {
        // dd($provider);
     return Socialite::driver($provider)->redirect();
    }
 
    public function Callback($provider){
        // dd($provider);
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $searchUser =   User::where(['email' => $userSocial->getEmail()])->first();
        dd($userSocial);
        if($searchUser){
            Auth::login($searchUser);
            return redirect('/')->with('success','You are login from '.$provider);
        }else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                // 'user_id'       => ,
                'provider'      => $provider,
            ]);
            Auth::login($user);
         return redirect()->route('home');
        }
    }
}
