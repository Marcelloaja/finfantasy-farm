<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [        
        'type_package', 
        'price_package', 
        'first_package', 
        'second_package',
        'third_package',
        'buy_now',
    ];
}
