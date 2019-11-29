<?php
namespace app\admin\controller;


class Menu extends Base{

    public function index(){
    		$a=model('ThinkAuthRule')->getAll();
    		
    		$this->assign('json',json_encode($a));
    		return $this->fetch();
    }
    public function add(){

    }
}