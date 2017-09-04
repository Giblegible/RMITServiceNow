<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'ticket_id',
    ];

    public function customer_queries() {
        return $this->belongsTo('App\CustomerQuery', 'ticket_id');
    }
}
