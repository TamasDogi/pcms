<?php

namespace App\Http\Controllers;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request): \Illuminate\Http\JsonResponse
    {        
        $msg = Messages::create([
            'message_text' => $request->message,
            'siteID' =>$request->siteID,
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name]);   
        return response()->json($msg);
    }

    public function mlist(): \Illuminate\Http\JsonResponse
    {        
        $msg = Messages::get();   
        return response()->json($msg);
    }    
}
