<?php
namespace app\admin\controller;
use think\Controller;
use think\Auth;
/**
 * 基类控制器
 */
class Base extends Controller{
    /**
     * 本身是在构造函数里面执行
     * 初始化方法 在其他方法执行之前执行
     */
     public function _initialize()
     {
         if(!session('admins')){
            $this->error('您还没有登陆!请先登陆!',url('admin/Login/login'));
         }
//         $auth=new Auth();
//         $requestPath=request()->path();
//         $re=$auth->check($requestPath,session('admins.id'));
//         if(!$re){
//            $this->error('您暂无权限访问',url('admin/Index/index'));
//         }

     }


}