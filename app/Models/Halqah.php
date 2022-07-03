<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halqah extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'induk_id',
        'hname',
        'hnotes',
    ];


    public function jemaah()
    {
        return $this->hasMany('App\Models\Jemaah');
    }      

    public function induk()
    {
        return $this->belongsTo('App\Models\Induk','induk_id','id');
    }      

    public function markaz()
    {
        return $this->belongsTo('App\Models\Markaz','markaz_id','induk_id');
    }       

    public function teritory()
    {
        return $this->belongsTo('App\Models\Teritory','teritory_id','markaz_id');
    }       

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id','teritory_id');
    }   

}
