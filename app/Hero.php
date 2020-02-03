<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['suname','relname','birthplace','superpowers','phrase'];
}
