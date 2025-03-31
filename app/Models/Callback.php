<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    protected $table = 'callbacks';

    protected $guarded = [];

    protected $casts = [
        'is_resolved' => 'boolean',
    ];
}
