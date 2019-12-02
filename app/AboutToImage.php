<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutToImage extends Model
{
    protected $fillable = ['home_page_id', 'image_id'];
    protected $table = 'about_to_images';
    public $timestamps = false;
}
