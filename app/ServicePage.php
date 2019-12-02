<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'read_more_btn_title', 'footer_title', 'footer_btn_title'];

    public function paragraphs()
    {
        return $this->hasManyThrough(
            Paragraph::class,
            ServiceToParagraph::class,
            'service_page_id',
            'id',
            'id',
            'paragraph_id'
        );
    }
}
