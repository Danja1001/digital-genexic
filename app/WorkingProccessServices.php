<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingProccessServices extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['working_process_id', 'lang_id', 'name', 'text'];

    public function workingProcess()
    {
        return $this->belongsTo(WorkingProccess::class, 'working_process_id');
    }
}
