<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teritory extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'country_id',
        'tname',
        'tnotes',
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id','id');
    }  
    
    public function zonal()
    {
        return $this->hasMany('App\Models\Zonal');
    }       

    public function markaz()
    {
        return $this->hasMany('App\Models\Markaz');
    }   

}
