<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
protected $table = 'products';

protected $fillable = [
    'email',
    'username',
    'number',
];
}
