<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guarded = [
        'id', 'created_at', 'update_at'
    ];
}
