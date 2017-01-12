<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = "thread";
    protected $fillable = array('name', 'desc');
}
