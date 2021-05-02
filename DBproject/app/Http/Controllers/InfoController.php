<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request){
        $message = new Message();
        $message->fname = $request->fname;
        $message->lname = $request->lname;
        $message->mail = $request->mail;
        $message->message = $request->message;
        $message->photo = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/', $message->image);
        $message->save();
        return redirect()->route('main');
    }

}
