<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_services extends Model
{
    protected $table ='sub_services';
    protected $fillable = ['services_id', 'title', 'image', 'description', 'url', 'services_url'];

    public function service()
    {
        return $this->belongsTo(Services::class);
    }
}
