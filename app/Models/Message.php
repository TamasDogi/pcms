<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'message', 'sender_name', 'sender_email', 'sender_phone', 'type'];

}
