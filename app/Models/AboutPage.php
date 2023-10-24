<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $table = 'aboutpage';
    use HasFactory;
    protected $fillable = [
        'title',
      'subtitle',
      'subtitle2',
        'image1',
    'image2'];
}
