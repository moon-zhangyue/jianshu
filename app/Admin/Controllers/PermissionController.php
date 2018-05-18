<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/17 18:42
 * Module: PermissionController.php
 * Please No Garbage Code!
 */

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /*
     * 权限列表页面
     */
    public function index()
    {
        $permissions = \App\AdminPermission::paginate(10);
        return view('/admin/permission/index', compact('permissions'));
    }

    /*
     * 创建权限页面
     */
    public function create()
    {
        return view('/admin/permission/add');
    }

    /*
     * 储存创建权限
     * */
    public function store()
    {
        $this->validate(request(), [
            'name'        => 'required|min:3',
            'description' => 'required'
        ]);

        \App\AdminPermission::create(request(['name', 'description']));
        return redirect('/admin/permissions');
    }
}