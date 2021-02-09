<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $attributes = [
        'name' => 'error',
        'belong' => 0,
        'detail' => '紹介文が入力されていません'
    ];

    protected $fillable = [
        'name',
        'tepra_number',
        'belong',
        'photo_path',
        'detail'
    ];
}
