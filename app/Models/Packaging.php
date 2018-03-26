<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Packaging extends Model 
{

    protected $table = 'packagings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');
    protected $visible = array('name');

    public function quotes()
    {
        return $this->hasMany('Quote');
    }

}