<?php

namespace App\Models;

use App\Traits\HasAutoColor;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasAutoColor;
    protected $table = 'feedback';

    protected $guarded = ['color_code'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
