<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeToImage extends Model
{
    protected $fillable = ['home_page_id', 'image_id'];
    protected $table = 'home_to_images';
    public $timestamps = false;
}
