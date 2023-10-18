<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = false;
    protected $table = 'person';
    protected $primaryKey = 'id';
}
