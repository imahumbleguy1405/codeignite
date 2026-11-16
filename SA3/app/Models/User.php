<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'username',
        'full_name',
        'email',
    ];
}
