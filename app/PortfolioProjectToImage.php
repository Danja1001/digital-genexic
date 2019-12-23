<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioProjectToImage extends Model
{
    protected $fillable = ['port_proj_id', 'image_id'];
    protected $table = 'portfolio_project_to_images';
    public $timestamps = false;
}
