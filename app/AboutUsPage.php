<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'read_more_btn_title', 'footer_title', 'footer_btn_title'];

    public function lang()
    {
        return $this->belongsTo(Lang::class, 'lang_id');
    }

    public function icons()
    {
        return $this->hasManyThrough(
            Image::class,
            AboutToImage::class,
            'about_us_page_id',
            'id',
            'id',
            'image_id'
        );
    }

    public function paragraphs()
    {
        return $this->hasManyThrough(
            Paragraph::class,
            AboutToParagraph::class,
            'about_us_page_id',
            'id',
            'id',
            'paragraph_id'
        );
    }
}
