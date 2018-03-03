<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = ['spec', 'firstname', 'lastname', 'firstname', 'distinction', 'center', 'high_school'];

}
