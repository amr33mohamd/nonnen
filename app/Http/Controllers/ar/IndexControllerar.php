<?php

namespace App\Http\Controllers\ar;
use Illuminate\Support\Facades\Auth;
use Redirect;

use Illuminate\Http\Request;
use App\Models\User;
class IndexControllerar extends Controller
{
    public function index(Request $request){
      return view('ar.welcome');
    }

    public function quiz(Request $request){
      return view('ar.quiz');
    }


    public function gallery(Request $request){
      return view('ar.Gallery');
    }


}
