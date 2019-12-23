<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioProjectToParagraph extends Model
{
    protected $fillable = ['pproj_id', 'paragraph_id'];
    protected $table = 'portfolio_project_to_paragraphs';
    public $timestamps = false;
}
