<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbadiMasjid extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'mohallah_id',
        'amal_id',
        'karkun_id',
        'notes',
    ];

    public function mohallah()
    {
        return $this->belongsTo('App\Models\Mohallah','mohallah_id','id');
    }  

    public function amal()
    {
        return $this->belongsTo('App\Models\Amal','amal_id','id');
    }  

    public function karkun()
    {
        return $this->belongsTo('App\Models\Karkun','karkun_id','id');
    }  


}
