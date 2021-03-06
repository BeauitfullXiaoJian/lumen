<?php

/**
 * @author xiaojian
 * @file AdminController.php
 * @info 系统账号控制器
 * @date 2017年8月23日
 */

namespace App\Api\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Api\Contracts\ApiContract;
use App\Api\Contracts\AuthContract;
use App\Api\Models\User;

// use App\Api\ErrorMessage\RoleErrorMessage as RetrunMessage;

class AdminController extends Controller
{
    private $api;

    private $admin;

    private $auth;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiContract $api, AuthContract $auth)
    {
        $this->api = $api;
        $this->auth = $auth;
        $this->admin = new User();
    }


    //获取账号列表（分页）
    function getAdmins()
    {

        //limit:限制数据条数，offset:查询游标
        $params = $this->api->getParams(['limit:integer', 'offset:integer']);

        if ($params['result']) {
            return $this->api->datas($this->admin->search($params['datas']));
        }
        else {
            return $params;
        }
    }

    /**
     * @name   删除指定账号
     * @author xiaojian
     * @return array[result:请求结果，message:操作信息]
     * @todo   账号被删除后，使用此账号...
     */
    function deleteAdmin()
    {

        //id:删除的账号id
        $param = $this->api->getParam('id:integer');

        if ($param['result']) {
            $result = $this->admin->destroy($param['datas']['id']);
            return $this->api->delete_message($result, 'admin delete success', 'admin not exist');
        }
        else {
            return $param;
        }
    }

    /**
     * @name   修改账号
     * @author xiaojian
     * @return array[result:请求结果，message:操作信息]
     */
    function changeAdmin()
    {

        $params = $this->api->getParams(['id:integer', 'name', 'email','roles'], ['password:min:8|max:20']);

        if ($params['result']) {
            $admin = $this->admin->find($params['datas']['id']);

            if (empty($admin)) {
                return $this->api->error('admin not found');
            }

            if (isset($params['datas']['password'])) {
  
                $params['datas']['password'] = $this->auth->secretPassword($params['datas']['password']);
            }

            if ($params['datas']['email'] == $admin->email) {
                $admin->where('id', $params['datas']['id'])->update($params['datas']);
                return $this->api->success('update admin success');
            }
            else {
                if (!empty($this->admin->findEmail($params['datas']['email']))) {
                    return $this->api->error('email is exist');
                }
                $admin->where('id', $params['datas']['id'])->update($params['datas']);
                return $this->api->success('update admin success');
            }

        }
        else {
            return $params;
        }
    }

    /**
     * @name   添加账号
     * @author xiaojian
     * @return array[result:请求结果，message:操作信息]
     */
    function addAdmin()
    {
  
        //必须参数[name:账号名称，parentid:上级账号ID，description:账号描述],可选参数[permissions:权限id串（1,2,3,4...）]
        $params = $this->api->getParams(['name', 'email', 'password:min:8|max:20','roles']);

        if ($params['result']) {

            $result = $this->auth->signup($params['datas']);

            if ($result == true) {
                return $this->api->insert_message($this->auth->info()->id, 'admin add success');
            }
            else {
                return $this->api->error('admin has exist');
            }
        }
        else {
            return $params;
        }
    }
}
