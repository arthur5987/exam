<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Exam/Public/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/Exam/Public/lib/respond.min.js"></script>
    <![endif]-->
    <link href="/Exam/Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/Exam/Public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/Exam/Public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/Exam/Public/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/Exam/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>答题系统后台</title>
    <meta name="keywords" content="答题系统后台管理">
    <meta name="description" content="答题系统后台管理">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" action="/Exam/admin" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input required name="account" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input required name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="captcha" required class="input-text size-L" type="text" placeholder="验证码" style="width:155px; height: 45px;">
                    <img src="/Exam/Admin/Index/verifyImg" alt="验证码" onclick="javascript:this.src='/Exam/Admin/Index/verifyImg?tm='+Math.random();" /> </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-10 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">Copyright &copy; reserved</div>
<script type="text/javascript" src="/Exam/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Exam/Public/static/h-ui/js/H-ui.min.js"></script>

</body>
</html>