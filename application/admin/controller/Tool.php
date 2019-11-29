<?php
namespace app\admin\controller;


/**工具类
 * Class Tool
 * @package app\admin\controller
 */
class Tool extends \think\Controller{
    public function _initialize()
    {
        //关闭模板布局
        $this->view->engine->layout(false);
    }

    /**
     * 上传图片
     */
    public function uploadImg(){
        //实现文件上传
        if($this->request->isPost()){
            $rootPath=ROOT_PATH.'/public/upload/';
            //如果是post请求  事件文件上传
            $file=$this->request->file('fileImg');
            $result=$file->validate([
                'size'=>1024000,//单位是byte  1kb=1024 byte 1mb=1024 kb
                'ext'=>'png,gif,bmp,jpg',
            ])->move($rootPath);
            if($result){
                //把保存文件的路径里面 \  替换成 /
               $savePath=str_replace('\\','/',$result->getSaveName());
                //上传成功
                $this->assign('fileInfo',"/upload/".$savePath);
            }else{
                //上传失败
               $this->assign('error',$file->getError());
            }

        }
        //把当前请求的方法传递模板   因为如果没有上传文件是get 当有上传文件的时候 post请求
        $this->assign('requestMethod',$this->request->isPost());

        return $this->fetch();
    }
    public function vcode(){
        return captcha('',[
            'imageW'=>150,
            'imageH'=>28,
            'fontSize'=>14,
            'useNoise'=>false
        ]);
    }
}

