<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerQuery extends Model
{
    protected $fillable = [
        'serviceArea', 'workArea', 'problemDescription', 'problemStatus',
        'problemSeverity', 'hardwareType', 'softwareType',
    ];

    public function customer() {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment', 'id');
    }
}
