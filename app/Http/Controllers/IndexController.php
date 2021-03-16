<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Redirect;

use Illuminate\Http\Request;
use App\Models\User;
class IndexController extends Controller
{
    public function index(Request $request){
      return view('welcome');
    }

    public function quiz(Request $request){
      return view('quiz');
    }


    public function gallery(Request $request){
      return view('Gallery');
    }


}
