<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tafakut extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'karkun_name',
        'mohallah_id',
        'karkun_id',
        'karkun_phone',
        'bt_address',
        'bt_duration',
        'bt_checkin',
        'bt_leaves',
        'bt_expenses',
        'bt_experiences',
        'bt_lastyear',
        'bt_lastyroute',
        'bt_last2year',
        'bt_last2yroute',
        'bt_amm_fh',
        'bt_amm_2j',
        'bt_amm_tm',
        'bt_amm_g1',
        'bt_amm_g2',
        'bt_amm_3h',
        'bt_job',
        'bt_pasport',
        'bt_marital',
        'bt_language',
        'bt_mexp',
        'bt_mexp_date',
        'bt_mexp_route',
        'bt_mexp_relation',
        'bt_mexp_notes',
        'bt_appr1_name',
        'bt_appr1_date',
        'bt_appr1_rem',
        'bt_appr2_name',
        'bt_appr2_date',
        'bt_appr2_rem',
        'bt_notes',
    ];


    public function karkun()
    {
        return $this->belongsTo('App\Models\Karkun','karkun_id','id');
    }

    public function mohallah()
    {
        return $this->belongsTo('App\Models\Mohallah','mohallah_id','id');
    }


}
