<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use RatkoR\Crate\Eloquent\Model AS Eloquent;

class ArrayTest extends Eloquent
{
    protected   $connection = 'crate';
    protected   $table      = 'laracrate.array_tests';

    protected   $primaryKey = 'id';
    public      $timestamps = false;

    protected $guarded = [];
}
