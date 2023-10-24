<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexPage extends Model
{
    protected $table = 'indexpage';
    use HasFactory;
    protected $fillable=['title', 'subtitle', 'name', 'description', 'consultation','subtitle2', 'quote', 'image1', 'image2', 'image3', 'image4', 'image5', 'practitle','revtitle', 'blogtitle'];
}
