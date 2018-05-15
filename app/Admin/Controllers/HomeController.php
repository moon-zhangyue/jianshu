<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 14:49
 * Module: HomeController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * 首页控制器
     * */
    public function index()
    {
        return view('/admin/home/index');
    }
}