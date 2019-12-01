<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['image', 'icon'];

    public function text($lang) 
    {
        $text = DB::table('image_texts')->where('image_id', $this->id)->where('lang_id', $lang)->first();

        return $text;
    }

    public function texts()
    {
        return $this->hasMany(ImageText::class, 'image_id');
    }
}
