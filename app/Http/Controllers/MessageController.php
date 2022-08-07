<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function submit(Request $request){

        $this->validate($request,[
            'name' => "required|regex:/^[a-zA-Z-' ]*$/",
            'email' => 'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'
        ]);

            // ! create new message
            $message = new Message();
            $message->name = $request->input("name");
            $message->email = $request->input("email");
            $message->message = $request->input("message");

            // save message  
            $message->save();

            // redirect

            return redirect("/")->with("success",'message sent');
        
    }

    public function getMessage(){

        $message = message::all();

        return view("messages")->with("messages",$message);
    }
}
