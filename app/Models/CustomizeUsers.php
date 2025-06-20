<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomizeUsers extends Model
{
    protected $fillable = ['name', 'age', 'ethnicity'];
    protected $table = 'customize_users';
}
