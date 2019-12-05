<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'subtitle', 'name', 'footer_title', 'footer_btn_title'];

    public function images()
    {
        return $this->hasManyThrough(
            Image::class,
            PortfolioProjectToImage::class,
            'port_proj_id',
            'id',
            'id',
            'image_id'
        );
    }

    public function paragraphs()
    {
        return $this->hasManyThrough(
            Paragraph::class,
            PortfolioProjectToParagraph::class,
            'pproj_id',
            'id',
            'id',
            'paragraph_id'
        );
    }
}
