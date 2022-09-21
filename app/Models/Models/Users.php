<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 */
class Users extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected  $fillable = [
        'id', 'user_name', 'user_email','status','user_points', 'user_phone', 'user_add', 'user_password'
    ];
}
