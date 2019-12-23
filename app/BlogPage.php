<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title', 'search_btn_placeholder', 'footer_title', 'footer_btn_title'];
}
