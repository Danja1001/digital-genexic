<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeToParagraph extends Model
{
    protected $fillable = ['home_page_id', 'paragraph_id'];
    protected $table = 'home_to_paragraphs';
    public $timestamps = false;
}
