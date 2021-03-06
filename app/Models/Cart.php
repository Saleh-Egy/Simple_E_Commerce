<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'quantity','product_id','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
