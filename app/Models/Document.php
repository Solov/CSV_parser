<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = false;

    protected $fillable = [
            'code',
            'name',
            'level_1',
            'level_2',
            'level_3',
            'price',
            'JP_price',
            'qty',
            'properties',
            'joint_purchases',
            'UoM',
            'img',
            'brief',
            'description',
    ];
}
