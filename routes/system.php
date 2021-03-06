<?php
//------------------------账号模块----------------------------

$app->group(['middleware' => 'auth:account-manager'], function () use ($app) {
    
    //账号列表（分页）
    $app->get('admin/search', 'AdminController@getAdmins');

    //删除账号
    $app->delete('admin/delete', 'AdminController@deleteAdmin');

    //更新账号
    $app->put('admin/update', 'AdminController@changeAdmin');

    //添加账号
    $app->post('admin/add', 'AdminController@addAdmin');

    //获取账号角色下拉列表
    $app->get('role/options', 'RoleController@getRolesOptions');

});

//------------------------角色模块----------------------------

$app->group(['middleware' => 'auth:role-manager'], function () use ($app) {
        
    //角色列表（分页）
    $app->get('role/search', 'RoleController@getRoles');

    //删除角色
    $app->delete('role/delete', 'RoleController@deleteRole');

    //更新角色
    $app->put('role/update', 'RoleController@changeRole');

    //添加角色
    $app->post('role/add', 'RoleController@addRole');

    //获取权限分配面板数据
    $app->get('role/permissions', 'PermissionController@getAllPermissionAndModel');

});

//------------------------菜单模块----------------------------

$app->group(['middleware' => 'auth:menu-manager'], function () use ($app) {
    
    //获取所有菜单（层级分组）
    $app->get('menu/group', 'MenuController@getAllMenu');

    //添加新菜单
    $app->post('menu/add', 'MenuController@addMenu');

    //删除菜单
    $app->delete('menu/delete', 'MenuController@deleteMenu');

    //更新菜单
    $app->put('menu/update', 'MenuController@updateMenu');

    //排序菜单
    $app->put('menu/sort', 'MenuController@sortMenu');

    //获取分配权限下拉数据
    $app->get('menu/permissions', 'PermissionController@getAllPermissionAndModel');

});

//------------------------权限模块----------------------------

$app->group(['middleware' => 'auth:permission-manager'], function () use ($app) {

    //获取权限列表&权限模块
    $app->get('permission/all', 'PermissionController@getAllPermissionAndModel');

    //添加权限
    $app->post('permission/add', 'PermissionController@addPermission');

    //删除权限
    $app->delete('permission/delete', 'PermissionController@deletePermission');

    //更新权限
    $app->put('permission/update', 'PermissionController@changePermission');

    //添加权限模块
    $app->post('permission/model/add', 'PermissionController@addPermissionModel');

    //删除权限模块
    $app->delete('permission/model/delete', 'PermissionController@deletePermissionModel');

    //更新权限模块
    $app->put('permission/model/update', 'PermissionController@changePermissionModel');

});