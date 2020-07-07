<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        FacadesAuth::logout();
        return redirect('/login');
    }

    public function loginAndroid(request $request)
    {
        $email = $request->emailUser;
        $pass = $request->passUser;
        
        $login = DB::select("SELECT * FROM `users` WHERE email='" . $email."'" );
        // $login = DB::select("SELECT * FROM `users`");

        $data = [];
        $ada = 0;
        foreach($login as $item){
            if (Hash::check($pass ,$item->password)) {
                return $data = [
                    'ada' => true,
                    'id' => $item->id,
                    'name' => $item->name,
                    'status' => $item->status
                ];
            }else{
                return $data = [
                    'ada' => false,
                    'id' => $item->id,
                    'name' => $item->name,
                    'status' => $item->status
                ];
            }
        }

        
    }
}
