<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'conversation_id',
    ];

    public function customer_queries() {
        return $this->belongsTo('App\CustomerQuery', 'conversation_id');
    }
}
