<?php
namespace app\admin\controller;
use think\Cookie;

class Index extends Base{
    public function index(){
        return $this->fetch();
    }
    public function user(){
        return view();
    }
}