<?php
namespace app\admin\model;
use think\Model;
class ThinkAuthRule extends Model{

	public function getAll(){
		$ruleArray=$this->select();
		foreach($ruleArray as $k=>$v){
			$ruleArray[$k]=$v->toArray();
		}
		
		$d=$this->ruleTree($ruleArray);
		print_r($d);
		exit;
		return $d;
	}
	public function getTree($arr,$pid=0){
		$tree=[];
		foreach($arr as $k=>$v){
			if($v['pid']==$pid){
					$v['children']=$this->getTree($arr,$v['id']);
					$tree[]=$v;
			}
		}
		return $tree;
	}
	public function ruleTree($arr,$pid=0,$child=[]){
		foreach($arr as $k=>$v){
			if($v['pid']==$pid){
					$child[]=$v;
					$child=$this->ruleTree($arr,$v['id'],$child);
			}
		}
		return $child;
	}
}