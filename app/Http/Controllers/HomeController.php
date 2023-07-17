<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\UserService;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class HomeController extends Controller
{

    private UserService $userService;
    public function __construct()
    {
        $this->userService = new UserService;
    }

    /**
     * GET Home Page, Web Profile
     */
    public function index(){
        return view('Home/login-page');
    }

    /**
     * GET Login Page
     */
    public function login(){
        return view('Home/login-page');
    }

    /**
     * POST Login Page
     */
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try{
            if($this->userService->loginService($request)){
                die('sukses login ' . Auth::user()->role);
            }else{
                return redirect()->back()->withErrors([
                    'error' => 'Email or Password is Wrong'
                ])->withInput();
            }
        }catch (Exception $ex){
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }

    /**
     * GET Register Page
     */
    public function register(){
        return view('Home/register-page');
    }

    /**
     * POST Register Page
     */
    public function postRegister(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'string', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        event(new Registered($user));

        auth()->login($user);

        return redirect()->route('verification.notice');
    }

    /**
     * GET Forget Password Page
     */
    public function forgetPassword(){
        return view('Home/forgot-password');
    }
    
    /**
     * POST Forget Password
     */
    public function postForgetPassword(Request $request){
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status ? view('Home/forgot-password-notif') : redirect()->back()->withErrors(['email' => __($status)]);
    }

    /**
     * GET Reset Password
     */
    public function resetPassword(){

    }

    /**
     * POST Rest Password
     */
    public function postResetPassword(Request $request){

    }
}
