<?php

namespace App;

use Eloquent;

/**
 * Class Frequency.
 */
class Frequency extends Eloquent
{
    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
