<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function message(Request $request): \Illuminate\Http\JsonResponse
    {        
        $ccEmail = "dogiweb@gmail.com";
        $toEmail = $request->email;
        $phone = $request->phone;
        $name = $request->name;
        $message = $request->message;
        $subject = "Neue Nachricht";
        $response = Mail::to($toEmail)->bcc($ccEmail)->send(new sendEmail($subject, $message, $toEmail, $phone, $name));        

        $msg = Messages::create([
            'message_text' => $request->message,
            'siteID' =>$request->siteID,
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name]);   

        return response()->json($response);
    }

    public function mlist(): \Illuminate\Http\JsonResponse
    {        
        $msg = Messages::get();   
        return response()->json($msg);
    }    

    public function messagelist()
    {        
        $user = Auth::user();
        $msg = Messages::where('siteID', $user->siteID)->paginate(5);   
        return view('pages/messages', compact('msg'));
    }  
    public function view($id)
    {        
        $user = Auth::user();
        $msg = Messages::where(['siteID' => $user->siteID, 'id' => $id])->get();   
        return view('pages/messageView', compact('msg'));
    }  

    
}
