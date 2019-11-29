<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\wamp\gdhb.com\public/../application/admin\view\user\index.html";i:1530634222;s:51:"D:\wamp\gdhb.com\application\admin\view\layout.html";i:1530578925;s:58:"D:\wamp\gdhb.com\application\admin\view\public\header.html";i:1530709387;s:58:"D:\wamp\gdhb.com\application\admin\view\public\footer.html";i:1530578588;}*/ ?>
<!--这是模板布局文件-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <title>管理后台首页</title>
    <link rel="stylesheet" href="/statics/style/bootstrap.css"/>
    <link rel="stylesheet" href="/statics/style/bootstrap-theme.css"/>
    <link rel="stylesheet" href="/statics/style/index.css"/>
    <script src="/statics/js/jquery.min.js"></script>
    <script src="/statics/js/bootstrap.min.js"></script>
    <script src="/statics/js/vue.js"></script>
    <script src="/statics/js/axios.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#topMenu">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
            </button>
            <a href="<?php echo url('admin/index/index'); ?>" class="navbar-brand">内容管理后台</a>
        </div>
        <div class="navbar-collapse collapse" id="topMenu">
            <ul class="navbar-nav nav">
                <li class="active"><a href="#">服务器信息</a></li>
                <li><a href="#">用户管理</a></li>
                <li><a href="#">分类管理</a></li>
                <li><a href="#">产品管理</a></li>
                <li><a href="#">内容管理</a></li>
            </ul>
            <ul class="navbar-nav nav navbar-right">
                <li><a href="#">欢迎<?php echo \think\Session::get('admins.username'); ?>登陆</a></li>
                <li><a href="#" data-toggle="dropdown">操作<i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">个人信息</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li class="divied"></li>
                        <li><a href="<?php echo url('admin/Login/loginOut'); ?>">退出登陆</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid contentbox" style="margin-top:51px;">
    <div class="row">
        <div class="col-sm-2">
            <ul class="nav navbar-inverse">
                <li>
                    <a href="#usermanage" data-toggle="collapse" class="collapsed">
                        <i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;用户管理<i class="glyphicon glyphicon-chevron-up pull-right"></i>
                    </a>
                    <div class="list-group collapse" id="usermanage">
                        <a href="<?php echo url('admin/User/add'); ?>" class="list-group-item"><i class="glyphicon glyphicon-plus"></i>添加用户</a>
                        <a href="<?php echo url('admin/User/index'); ?>" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i>用户列表</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>用户权限</a>
                    </div>
                </li>
                <li>
                    <a href="#menumanage" data-toggle="collapse" class="collapsed">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>&nbsp;&nbsp;菜单管理<i class="glyphicon glyphicon-chevron-up pull-right"></i>
                    </a>
                    <div class="list-group collapse" id="menumanage">
                        <a href="<?php echo url('admin/Menu/index'); ?>" class="list-group-item"><i class="glyphicon glyphicon-plus"></i>后台菜单</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i>用户列表</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>用户权限</a>
                    </div>
                </li>
                <li>
                    <a href="#cotnentmanage" data-toggle="collapse" class="collapsed">
                        <i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;内容管理<i class="glyphicon glyphicon-chevron-up pull-right"></i>
                    </a>
                    <div class="list-group collapse" id="cotnentmanage">
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-plus"></i>添加用户</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i>用户列表</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>用户权限</a>
                    </div>
                </li>
                <li>
                    <a href="#catemanage" data-toggle="collapse" class="collapsed">
                        <i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;栏目管理<i class="glyphicon glyphicon-chevron-up pull-right"></i>
                    </a>
                    <div class="list-group collapse" id="catemanage">
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-plus"></i>添加用户</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i>用户列表</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>用户权限</a>
                    </div>
                </li>
                <li>
                    <a href="#productmanage" data-toggle="collapse" class="collapsed">
                        <i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;&nbsp;产品管理<i class="glyphicon glyphicon-chevron-up pull-right"></i>
                    </a>
                    <div class="list-group collapse" id="productmanage">
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-plus"></i>添加用户</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i>用户列表</a>
                        <a href="#" class="list-group-item"><i class="glyphicon glyphicon-lock"></i>用户权限</a>
                    </div>
                </li>
            </ul>
        </div>


<div class="col-sm-10">
    <div id="adminList" class="panel panel-primary">
        <div class="panel-heading">
            添加管理员
            <form class="form-inline">
              <div class="form-group">
                <label>搜索</label>
                <input @keyup="search" type="text" class="form-control">
              </div>
              <button type="submit" class="btn btn-default">搜索</button>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>头像</th>
                    <th>账号</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>管理</th>
                </tr>
            </thead>
            <tbody>
                
                <tr v-for="(item,index) in adminList">
                    <td>{{item.id}}</td>
                    <td>data</td>
                    <td>data</td>
                    <td>data</td>
                    <td>data</td>
                    <td>
                        <div class="btn-group">
                            <a  class="btn btn-primary btn-xs">编辑</a>
                            <a  class="btn btn-danger btn-xs">删除</a>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div @click="getPage" v-html="page"></div>
    </div>
    
</div>

<script>
    $(function(){
        var vm=new Vue({
            el:'#adminList',
            data:{
                adminList:[],
                page:''
            },
            methods:{
                getusers:function(page,key=''){
                    var o=this;
                    axios.post('<?php echo url("admin/user/getuser"); ?>',{page:page,key:key}).
                    then(function(data){
                        console.log(data);
                        o.adminList=data.data.data;
                        o.page=data.data.page;
                    }).
                    catch(function(data){

                    });
                },
                getPage:function(event){
                   if(event.target.nodeName==='A'){
                        var page=event.target.dataset.page;
                        this.getusers(page);
                   }
                },
                search:function(event){
                    var value=event.target.value;
                    this.getusers(1,value);
                }
            },
            mounted:function(){
                this.getusers();
            }
        });
    });
</script>


</div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
    <a href="#">广州粤嵌科技有限公司版权所有&copy;</a>
</nav>
</body>
</html>
