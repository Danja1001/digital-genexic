<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceToParagraph extends Model
{
    protected $fillable = ['service_id', 'paragraph_id'];
    protected $table = 'service_to_paragraphs';
    public $timestamps = false;
}
