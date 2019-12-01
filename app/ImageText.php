<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageText extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['image_id', 'lang_id', 'title', 'text'];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
