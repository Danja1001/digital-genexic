<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioPage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'subtitle', 'subtitle_text', 'footer_title', 'footer_btn_text', 'read_more_btn'];

    public function paragraphs()
    {
        return $this->hasManyThrough(
            Paragraph::class,
            PortfolioToParagraph::class,
            'portfolio_page_id',
            'id',
            'id',
            'paragraph_id'
        );
    }
}
