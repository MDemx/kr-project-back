<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'gamers';
    protected $connection = 'sqlite';
    protected $fillable = ['username',
        'email',
        'sex',
        'description',
        'lvl'];
}
