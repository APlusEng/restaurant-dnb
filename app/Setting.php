<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'org_name',
        'address',
        'latest_news',
        'video'
    ];
}
