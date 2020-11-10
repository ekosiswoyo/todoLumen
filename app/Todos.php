<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Todos extends Eloquent
{
    protected $connection = 'mongodb';

    protected $table = 'todo';

    protected $fillable = [
        'activity',
        'description'
    ]; 
}