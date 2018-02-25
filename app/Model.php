<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2018/2/4
 * Time: 15:54
 */

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    protected $guarded = [];//不可注入的字段
}