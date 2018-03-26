<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model 
{

    protected $table = 'quotes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'qty1', 'qty2', 'qty3', 'q1_waste', 'q2_waste', 'q3_waste', 'originals', 'setup_mins', 'job_type_id', 'press_id', 'colour', 'stock_id', 'imposition_id', 'guillotine_id', 'packaging_id');
    protected $visible = array('user_id', 'qty1', 'qty2', 'qty3', 'q1_waste', 'q2_waste', 'q3_waste', 'originals', 'setup_mins', 'job_type_id', 'press_id', 'colour', 'stock_id', 'imposition_id', 'guillotine_id', 'packaging_id');

    public function type()
    {
        return $this->belongsTo('Job_types');
    }

    public function press()
    {
        return $this->belongsTo('Press');
    }

    public function stock()
    {
        return $this->hasMany('Stock');
    }

    public function imposition()
    {
        return $this->belongsTo('Imposition');
    }

    public function guillotine()
    {
        return $this->belongsTo('Guillotine');
    }

    public function packaging()
    {
        return $this->belongsTo('Packaging');
    }

}