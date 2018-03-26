<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Print_method extends Model 
{

    protected $table = 'print_methods';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');
    protected $visible = array('name');

    public function presses()
    {
        return $this->hasMany('Press');
    }

}