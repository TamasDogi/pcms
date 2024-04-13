<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        
        $message = 'Hello mindenki. Jol vagytok?';
        $sender_name = 'Tamas Dogi';
        $sender_email = 'tamas@tamas.hu';
        $sender_phone = '0234234234';
        $type = 'message';



        return response()->json($message);
    }
}
