<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogProjectToImage extends Model
{
    protected $fillable = ['blog_project_id', 'image_id'];
    protected $table = 'blog_project_to_images';
    public $timestamps = false;
}
