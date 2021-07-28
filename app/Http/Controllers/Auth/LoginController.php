<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




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

    // redirect after logout

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/admin_dashboard';

    // redirect user based on role 
    public function redirectTo() {

        $role = Auth::user()->role; 
        switch ($role) {
          case 'admin_user':
            return '/admin_dashboard';
            break;
          case 'normal_user':
            return '/user_dashboard';
            break; 
      
          default:
            return '/'; 
          break;
        }
      }
      


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
