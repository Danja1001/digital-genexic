<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'subtitle', 'header_btn_title', 'footer_title', 'footer_text', 'footer_btn_title'];

    public function lang()
    {
        return $this->belongsTo(Lang::class, 'lang_id');
    }

    public function icons()
    {
        return $this->hasManyThrough(
            Image::class,
            HomeToImage::class,
            'home_page_id',
            'id',
            'id',
            'image_id'
        );
    }

    public function paragraphs()
    {
        return $this->hasManyThrough(
            Paragraph::class,
            HomeToParagraph::class,
            'home_page_id',
            'id',
            'id',
            'paragraph_id'
        );
    }
}
