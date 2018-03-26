<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imposition extends Model 
{

    protected $table = 'impositions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('press_id', 'impose_type_id', 'finished_size_id', 'sheet_size_id', 'duplex', 'orientation', 'rows', 'columns', 'bleed_x', 'bleed_y', 'gutter', 'marks');
    protected $visible = array('press_id', 'impose_type_id', 'finished_size_id', 'sheet_size_id', 'duplex', 'orientation', 'rows', 'columns', 'bleed_x', 'bleed_y', 'gutter', 'marks');

    public function press()
    {
        return $this->belongsTo('Press', 'press_id');
    }

    public function finished_size()
    {
        return $this->belongsTo('Size', 'finished_size_id');
    }

    public function sheet_size()
    {
        return $this->belongsTo('Size', 'sheet_size_id');
    }

    public function type()
    {
        return $this->belongsTo('Impose_type');
    }

    public function quotes()
    {
        return $this->hasMany('Quote');
    }

}