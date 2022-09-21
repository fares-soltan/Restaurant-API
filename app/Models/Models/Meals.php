<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    protected $table = 'meals';
    public $timestamps = false;
    protected  $fillable = [
        'meal_name','meal_price','meal_description','meal_cost','meal_point','meal_cat','meal_image'
    ];
}
