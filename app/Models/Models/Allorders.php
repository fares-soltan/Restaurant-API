<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allorders extends Model
{
    protected $table = 'allorders';
    public $timestamps = false;
    protected  $fillable = [
        'id','user_id','mealData','tb_num','total_price'
    ];
}
