<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Orders extends Eloquent
{
    protected $collection = 'orders';
    //
    protected $fillable = [
        'orderNumber', 'amount', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];
}
