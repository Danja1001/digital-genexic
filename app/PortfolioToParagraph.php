<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioToParagraph extends Model
{
    protected $fillable = ['portfolio_page_id', 'paragraph_id'];
    protected $table = 'portfolio_to_paragraphs';
    public $timestamps = false;
}
