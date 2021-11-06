<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
       'title',
        'old_price',
        'new_price',
        'details',
        'whatsapp',
        'instagram',
        'email',
        'notif',
        'sanp_pixel',
        'facebook_pixel'
    ];

    function images(){
        return $this->hasMany(Image::class);
    }

    function colors(){
        return $this->hasMany(Attrubite::class);
    }
}
