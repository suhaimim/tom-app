<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaah extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'karkun_name',
        'halqah_id',
        'karkun_id',
        'karkun_notes',
        'bj_jenis',        
        'bj_no',        
        'bj_route',        
        'bj_dateout',        
        'bj_datereport',
        'bj_datedismiss',        
        'bj_notes',
    ];


    public function karkun()
    {
        return $this->belongsTo('App\Models\Karkun','karkun_id','kkid');
    }  

    public function halqah()
    {
        return $this->belongsTo('App\Models\Halqah','halqah_id','id');
    }  

}
