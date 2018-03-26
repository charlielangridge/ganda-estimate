<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model 
{

    protected $table = 'sizes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'dim_x', 'dim_y');
    protected $visible = array('name', 'dim_x', 'dim_y');

}