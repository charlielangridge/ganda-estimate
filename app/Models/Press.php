<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Press extends Model 
{

    protected $table = 'presses';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'print_method_id', 'click_black', 'click_colour', 'weight_min', 'weight_max', 'grip_top', 'grip_bottom', 'size_min_id', 'size_max_id');
    protected $visible = array('name', 'print_method_id', 'click_black', 'click_colour', 'weight_min', 'weight_max', 'grip_top', 'grip_bottom', 'size_min_id', 'size_max_id');

    public function method()
    {
        return $this->belongsTo('Print_method', 'print_method_id');
    }

    public function size_min()
    {
        return $this->belongsTo('Size', 'size_min_id');
    }

    public function size_max()
    {
        return $this->belongsTo('Size', 'size_max_id');
    }

    public function stocks()
    {
        return $this->hasMany('Stock');
    }

    public function impositions()
    {
        return $this->hasMany('Imposition');
    }

    public function quotes()
    {
        return $this->hasMany('Quote');
    }

}