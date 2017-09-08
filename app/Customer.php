<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'phoneNum', 'program',
    ];

    public function customer_queries() {
        return $this->hasMany('App\CustomerQuery', 'id');
    }
}
