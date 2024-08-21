<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'all_kinds', 
        'total_buyers', 
        'fish_package', 
        'delivery'
    ];
}
