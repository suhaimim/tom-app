<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markaz extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'teritory_id',
        // 'zonal_id',
        'mname',
        'mnotes',
    ];

    public function teritory()
    {
        return $this->belongsTo('App\Models\Teritory','teritory_id','id');
    }    

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id','teritory_id');
    }    

}
