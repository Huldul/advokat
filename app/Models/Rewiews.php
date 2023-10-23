<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewiews extends Model
{
    protected $table = 'rewiews';
    use HasFactory;
    protected $fillable=['title', 'author', 'image', 'main', 'subtitle'];
}
