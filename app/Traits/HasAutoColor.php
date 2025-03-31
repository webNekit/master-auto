<?php

namespace App\Traits;

trait HasAutoColor
{
    protected static function bootHasAutoColor()
    {
        static::creating(function ($model) {
            $model->color_code = '#' . str_pad(
                dechex(mt_rand(0, 0xFFFFFF)),
                6,
                '0',
                STR_PAD_LEFT
            );
        });
    }
}
