<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang_id', 'service_category_id', 'head_title', 'name', 'title',
        'text', 'footer_title', 'footer_btn_title'
    ];

    public function lang()
    {
        return $this->belongsTo(Lang::class, 'lang_id');
    }

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}
