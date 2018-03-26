<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imposition extends Model
{
    use CrudTrait;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'impositions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'press_id', 
        'impose_type_id', 
        'finished_size_id', 
        'sheet_size_id', 
        'duplex', 
        'orientation', 
        'rows', 
        'columns', 
        'bleed_x', 
        'bleed_y', 
        'gutter', 
        'marks'
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
    public function press()
    {
        return $this->belongsTo('App\Models\Press', 'press_id');
    }

    public function finished_size()
    {
        return $this->belongsTo('App\Models\Size', 'finished_size_id');
    }

    public function sheet_size()
    {
        return $this->belongsTo('App\Models\Size', 'sheet_size_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Impose_type', 'impose_type_id');
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
