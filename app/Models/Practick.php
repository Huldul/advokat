<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practick extends Model
{
    
    protected $table = 'practick';
    use HasFactory;
    protected $fillable=['title', 'author', 'image', 'main', 'subtitle'];
}
