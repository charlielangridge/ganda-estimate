<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guillotine extends Model 
{

    protected $table = 'guillotines';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'max_width', 'max_depth', 'min_depth');
    protected $visible = array('name', 'max_width', 'max_depth', 'min_depth');

    public function quotes()
    {
        return $this->hasMany('Quote');
    }

}