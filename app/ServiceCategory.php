<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title'];

    public function lang()
    {
        return $this->belongsTo(Lang::class, 'lang_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'service_category_id');
    }
}
