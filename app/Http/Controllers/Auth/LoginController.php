<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Theme;
use Alert;

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
    var $theme = 'admin';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /* override login */
    public function showLoginForm()
    {
        Theme::init($this->theme);
        Alert::success('Good job!');
        $page_title = "general.text.welcome";
        $page_description = "This is the welcome page";  
        return view('login', compact('page_title'));
    }

    /* override logout */
    public function logout()
    {
        $this->guard()->logout();
        return redirect('/login');
    }
}
