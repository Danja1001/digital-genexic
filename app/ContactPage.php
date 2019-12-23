<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang_id', 'title',
        'card_title', 'card_email', 'card_phone', 'card_city',
        'form_text', 'form_name', 'form_email', 'form_phone', 'form_btn',
        'footer_title',
        'footer_btn_title',
    ];
}
