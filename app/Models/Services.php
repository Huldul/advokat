<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table ='services';
    protected $fillable = ['title', 'subtitle'];

    public function subServices()
    {
        return $this->hasMany(Sub_services::class);
    }
}
