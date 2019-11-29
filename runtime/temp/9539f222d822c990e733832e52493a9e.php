<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"F:\xmapp\htdocs\gdhb1.com\public/../application/admin\view\index\user.html";i:1531411353;s:60:"F:\xmapp\htdocs\gdhb1.com\application\admin\view\layout.html";i:1530578925;s:67:"F:\xmapp\htdocs\gdhb1.com\application\admin\view\public\header.html";i:1531409313;s:67:"F:\xmapp\htdocs\gdhb1.com\application\admin\view\public\footer.html";i:1531411286;}*/ ?>
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
                <li><a href="<?php echo url('admin/index/user'); ?>">用户管理</a></li>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>


</div>
</div>
<nav class="navbar  navbar-inverse navbar-fixed-bottom  ">
    <a href="#">利太浪有限公司版权所有&copy;</a>
</nav>
</body>
</html>
