<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impose_type extends Model 
{

    protected $table = 'impose_types';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');
    protected $visible = array('name');

    public function impositions()
    {
        return $this->belongsTo('Imposition');
    }

}