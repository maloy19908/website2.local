<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apple extends Model
{
    use HasFactory;
    protected $fillable = [
        'color',
        'appearance',
        'fall',
        'status',
        'much_eat',
        'size',
    ];
    protected $table = 'apples';
    public $timestamps = false;
}
