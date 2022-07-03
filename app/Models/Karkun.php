<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karkun extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'kkname',
        'kkid',
        'kkphone',
        'kkemail',
        'kknotes',
    ];

    public function abadimasjid()
    {
        return $this->hasMany('App\Models\AbadiMasjid');
    }       

    public function tafakut()
    {
        return $this->hasMany('App\Models\Tafakut');
    }       

    public function jemaah()
    {
        return $this->hasMany('App\Models\Jemaah');
    }       



}
