<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogProjectToParagraph extends Model
{
    protected $fillable = ['blog_proj_id', 'paragraph_id'];
    protected $table = 'blog_project_to_paragraphs';
    public $timestamps = false;
}
