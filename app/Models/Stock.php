<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model 
{

    protected $table = 'stocks';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'size_id', 'weight', 'cost_per_k', 'supplier_id');
    protected $visible = array('name', 'size_id', 'weight', 'cost_per_k', 'supplier_id');

    public function size()
    {
        return $this->belongsTo('Size', 'size_id');
    }

    public function supplier()
    {
        return $this->belongsTo('Supplier', 'supplier_id');
    }

    public function quotes()
    {
        return $this->hasMany('Quote');
    }

}