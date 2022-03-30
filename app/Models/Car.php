<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name_uz',
        'name_ru',
        'phone',
        'fio',
        'chairs',
        'type',
        'images',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
