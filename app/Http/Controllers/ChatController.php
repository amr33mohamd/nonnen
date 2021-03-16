<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Redirect;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;
use App\Events\SendMessage;

class ChatController extends Controller
{
    public function index(Request $request){
      $user =   Auth::user();
      return view('chat',['user'=>$user]);
    }

    public function addMessage(Request $request){
      $user = Auth::user();
      $message = Messages::create([
        'from_id'=>$request->from_id,
        'message'=>$request->message,
        'to_id'=>$request->to_id,
        'type'=>0,
        'project_id'=>$request->project_id

      ]);
      event(new SendMessage([
        'from_id'=>$request->from_id,
        'message'=>$request->message,
        'to_id'=>$request->to_id,
        'type'=>0,
        'project_id'=>$request->project_id

      ]));

      return response()->json(['message'=>$message]);
    }


    public function gallery(Request $request){
      return view('Gallery');
    }


}
