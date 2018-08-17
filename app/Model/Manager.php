<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    protected $table = 'admin';

    //使用trait
    use Authenticatable;
}
