<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardTag extends Model
{
    use HasFactory;

    protected $table = 'boards_tags';

    public function board(){
        return $this->belongsTo('');
    }
}
