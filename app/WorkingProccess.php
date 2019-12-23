<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingProccess extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lang_id', 'title'];

    public function services()
    {
        return $this->hasMany(WorkingProccessServices::class, 'working_process_id');
    }
}
