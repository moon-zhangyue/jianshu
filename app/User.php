<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2018/2/25
 * Time: 16:34
 */

namespace App;

use App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name','email','password'
    ];
}