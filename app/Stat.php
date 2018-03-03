<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = ['label', 'success_rate'];
}
