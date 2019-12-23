<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutToParagraph extends Model
{
    protected $fillable = ['about_us_page_id', 'paragraph_id'];
    protected $table = 'about_to_paragraphs';
    public $timestamps = false;
}
