<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    public $timestamps=true;
    protected $guarded=[];
    protected $table='view_counts';
}
