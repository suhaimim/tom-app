<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Induk extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'markaz_id',
        'iname',
        'inotes',
    ];


    public function markaz()
    {
        return $this->belongsTo('App\Models\Markaz','markaz_id','id');
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