<?php
namespace app\admin\controller;//app 代表 application admin代表admin文件夹 controller 代表controller文件夹
//定义一个Login控制器
use think\Controller;
use think\Db; //引入命名空间 可以自动加载对应程序
class Login extends Controller{

    public function _initialize(){
        //在登陆过程中关闭模板布局
        $this->view->engine->layout(false);
    }
    //控制器里面的行为 action

    /**
     * @return mixed
     * 加载登陆html模板
     */
    public function login(){
        //加载html  不是跳转
        //默认定位模板的位置 view/控制器名/action方法名称.html
        return $this->fetch();
    }

    /**
     * 处理登陆
     */
    public function doLogin(){
        //接收用户数据
        $postData=input('post.');
        //返回数据 json
        $arr=array(
            'msg'=>'登陆成功',
            'status'=>1
        );
        //验证
        $result=$this->validate($postData,'LoginValidate');
        if($result!==true){
            //如果结果$result不等于true的时候就是验证不通过 那么$result存储的是错误信息
            $arr['msg']=$result;
            return json($arr,200);
        }
        $arr['status']=2;
        return json($arr,200);//json() 返回json数据. 200 http状态码  404  403 500 503
    }

    /**
     * 退出登录
     */
    public function loginOut(){
//        session('admins',null);//清空admins
        session(null);//清空所有session
        $this->success('成功退出登录!',url('admin/Login/login'));
    }

}






















