<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerQuery extends Model
{
    protected $fillable = [
        'serviceArea', 'workArea', 'problemDescription', 'problemStatus',
        'problemSeverity', 'comments', 'hardwareType', 'softwareType',
    ];
}
