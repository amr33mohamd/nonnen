<?php

namespace App\Http\Controllers\ar;
use Illuminate\Support\Facades\Auth;
use Redirect;

use Illuminate\Http\Request;
use App\Models\User;
class UserControllerar extends Controller
{
    public function register(Request $request){
      return view('ar.Auth.Register');
    }
    public function registerDesigner(Request $request){
      return view('ar.Auth.RegisterDesigner');
    }
    public function register_user(Request $request){
      $validatedData = $request->validate([
        'email' => 'required|unique:users|max:255|email',
        'password' => 'required|min:6',
    ]);



    $user = User::create([
         'email'    => $request->email,
         'password' => bcrypt($request->password),
     ]);
  //      $user->sendEmailVerificationNotification();

        return redirect()->back();
    }
    public  function Login(Request $request)
    {
      $auth = Auth::user();

      return view('ar.Auth.Login',['auth'=>$auth,'page'=>'none']);

    }
    public function login_response()
    {
      $credentials = request(['email', 'password']);

      if (! $token = auth()->attempt($credentials)) {
        return Redirect::back()->withErrors(['message'=>'البريد الالكتروني او كلمه السر خطا']);
      }else {
        return redirect()->intended();
      }

    }

    public function logout(){
      Auth::logout();

    return Redirect::back();
    }

}
