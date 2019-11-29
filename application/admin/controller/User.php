<?php
namespace app\admin\controller;
use app\admin\model\User as UserModel;
class User extends Base{
    private $admnModel=null;
    public function __construct(){
        parent::__construct();
        $this->adminModel=new UserModel();
    }

    /**
     * 添加用户
     */
    public function add(){

        return $this->fetch();
    }

    /**
     * @return mixed
     * 用户列表
     */
    public function index(){
        $userList=$this->adminModel->paginate(1);
        $this->assign('userList',$userList);
        return $this->fetch();
    }
    public function getuser(){
        $key=input('post.key');

         $userList=$this->adminModel->where('username','like','%'.$key.'%')->paginate(1,false,['type'=>'AjaxPage']);
         $a=$userList->toArray();
         $a['page']=$userList->render();
         
         return json($a,200);
    }

}