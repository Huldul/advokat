<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertificate extends Model
{
    use HasFactory;
    protected $table ='sertificate';
    protected $fillable = ['image'];
}
