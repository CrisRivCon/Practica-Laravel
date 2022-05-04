<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['email', 'ciudad', 'fruta', 'mensaje'];
    //use HasFactory;
}
