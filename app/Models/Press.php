<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Press extends Model
{
    use CrudTrait;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'presses';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'name', 
        'print_method_id', 
        'click_black', 
        'click_colour', 
        'weight_min', 
        'weight_max', 
        'grip_top', 
        'grip_bottom', 
        'grip_sides', 
        'size_min_id', 
        'size_max_id'
    ];
    // protected $hidden = [];
    protected $dates = ['deleted_at'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function printMethod()
    {
        return $this->belongsTo('App\Models\Print_method');
    }

    public function sizeMin()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function sizeMax()
    {
        return $this->belongsTo('App\Models\Size');
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
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
