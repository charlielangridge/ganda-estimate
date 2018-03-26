<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_types extends Model 
{

    protected $table = 'job_types';
    public $timestamps = true;
    protected $fillable = array('name', 'booklet');
    protected $visible = array('name', 'booklet');

    public function quotes()
    {
        return $this->hasMany('Quote');
    }

}