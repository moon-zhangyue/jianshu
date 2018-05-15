<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 16:09
 * Module: AdminUser.php
 * Please No Garbage Code!
 */

namespace App;

use App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $rememberTokenName = '';
}