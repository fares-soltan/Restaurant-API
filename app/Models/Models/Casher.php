<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casher extends Model
{
    protected $table = 'casher';
    public $timestamps = false;
    protected  $fillable = [
        'id','user_id','mealData','tb_num','total_price'
    ];
}
