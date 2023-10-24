<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    use HasFactory;
    protected $fillable=['licenze' ,'inst_title', 'inst_subtitle','title', 'subtitle', 'adress', 'shortadress', 'number', 'email', 'instagram', 'facebook', 'whatsapp'];
}
