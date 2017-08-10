<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'comment', 'customer_id', 'ticket_id',
    ];
    public function ticket_id() {
        return $this->belongsTo('App\CustomerQuery');
    }
}
