<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principes extends Model
{
    protected $table = 'principes';
    use HasFactory;
    protected $fillable=['subtitle'];
}
