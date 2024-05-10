<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use App\Mail\sendEmailMatthias;

class EmailController extends Controller
{
    /*public function sendEmail(Request $request): \Illuminate\Http\JsonResponse
    {
        $toEmail = "info@tamasdogi.eu";
        $message = "Welcome to Marton Cleaning!";
        $subject = "Welcome email in laravel!";

        $response = Mail::to($toEmail)->send(new sendEmail($message, $subject));        
        return response()->json($response);
    }*/

    public function sendEmailMate(Request $request): \Illuminate\Http\JsonResponse
    {
        $ccEmail = "dogiweb@gmail.com";
        $toEmail = $request->email;
        $phone = $request->phone;
        $name = $request->name;
        $message = $request->message;
        $subject = "Neue Nachricht";
        $response = Mail::to($toEmail)->bcc($ccEmail)->send(new sendEmailMatthias($subject, $message, $toEmail, $phone, $name));        

        $msg = Messages::create([
            'message_text' => $request->message,
            'siteID' =>$request->siteID,
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name]);   

        return response()->json($response);
    }

}
