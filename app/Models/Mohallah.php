<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mohallah extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'halqah_id',
        'sname',
        'snotes',
    ];

     

    public function abadimasjid()
    {
        return $this->hasMany('App\Models\AbadiMasjid');
    }       

    public function halqah()
    {
        return $this->belongsTo('App\Models\Halqah','halqah_id','id');
    }      

    public function induk()
    {
        return $this->belongsTo('App\Models\Induk','induk_id','halqah_id');
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
