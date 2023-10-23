<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    use HasFactory;
    protected $fillable=['adress', 'shortadress', 'number', 'email', 'instagram', 'facebook', 'whatsapp'];
}
