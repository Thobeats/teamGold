<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subscription',
        'plan',
        'cost'
    ];
}
