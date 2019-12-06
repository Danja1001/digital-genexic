<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogProject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'subtitle_text', 'keep_reading', 'footer_title', 'footer_btn_title'];

    public function images()
    {
        return $this->hasManyThrough(
            Image::class,
            BlogProjectToImage::class,
            'blog_project_id',
            'id',
            'id',
            'image_id'
        );
    }
}
