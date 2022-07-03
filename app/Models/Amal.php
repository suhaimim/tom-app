<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amal extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'aabbr',
        'aname',
        'anotes',
    ];


    public function abadimasjid()
    {
        return $this->hasMany('App\Models\AbadiMasjid');
    }       

}
