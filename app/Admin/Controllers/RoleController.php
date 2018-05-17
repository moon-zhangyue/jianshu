<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/17 18:38
 * Module: RoleController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use \App\AdminUser;

class RoleController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
        return view('/admin/role/index');
        $roles = \App\AdminRole::paginate(10);
        return view('/admin/role/index', compact('roles'));
    }

    /*
     * 创建角色
     */
    public function create()
    {
        return view('/admin/role/add');
    }
}