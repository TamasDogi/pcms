<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\sendEmail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return \response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('your_email@gmail.com')->send(new sendEmail($mailData));
           
        dd("Email is sent successfully.");
    }
}