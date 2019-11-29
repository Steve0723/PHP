<?php
namespace app\admin\validate;
use think\Session;
use think\Validate;
use think\Db;
/**
 * 定义一个登陆验证器
 * Class LoginValidate
 * @package app\admin\validate
 */
class LoginValidate extends Validate{
    /**定义一个验证规则
     * @var array
     */
    public $rule=[
        // 验证字段=>'验证规则'
        'vcode'=>'require|captcha',//验证验证码 不为空 | 多个验证规则用"|"分割 captcha 验证验证码是否正确
        'username'=>'require|checkUser',//验证用户名不能为空  checkUser自定义规则
        'password'=>'require|checkPW'//checkPW自定义规则
    ];
    /**
     *
     * 定义验证不通过的时候信息提示
     * @var array
     */
    public $message=[
        // vocode 验证字段.require 验证规则=>验证不通过的时候的验证信息
        'vcode.require'=>'验证码不能空',
        'vcode.captcha'=>'验证码不正确',
        'username.require'=>'用户名不能为空',
        'password.require'=>'密码不能为空'
    ];
    public function checkPW($value,$rule,$data){
        unset($data['vcode']);//注销vcode
        $result=Db::table('admin')->where($data)->find();
        if($result){
            //登陆成功
            session('admins',$result);//记录用户状态
            return true;
        }
        return '密码错误';
    }
    /**
     * @param $value  username字段的值
     * @param $rule  username 字段验证规则
     * @param $data  传入的验证器的所有数据
     * @return bool|string  true 代表验证通过 string 验证不通过的提示信息
     */
    public function checkUser($value,$rule,$data){

        $result=Db::table('admin')->where(['username'=>$value])->find();//根据用户名查找数据库
        //在php里面 如果变量的值 为 null ''  0 的时候 布尔运算的时候是false 其他情况都是true
        if($result){
            return true;
        }
        return '用户名不存在';
    }

}