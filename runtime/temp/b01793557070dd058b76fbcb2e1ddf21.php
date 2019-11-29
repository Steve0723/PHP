<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\xmapp\htdocs\gdhb1.com\public/../application/admin\view\tool\upload_img.html";i:1530592381;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <script>
        <!-- 判断是否是 post请求 如果是才执行里面的代码 -->
        <?php if($requestMethod): ?>
            <!-- 判断是否有 上传文件的错误信息 如果有 那么alert() 弹出错误信息-->
            <?php if(empty($fileInfo)&&!empty($error)): ?>
                alert('<?php echo $error; ?>');
            <?php else: ?>
                <!-- 当文件上传成功以后 找到父级的图片 并改变的路径 parent 代表框架的父元素-->
                parent.fileForm.imgsrc.src="<?php echo $fileInfo; ?>";
            <?php endif; endif; ?>
    </script>
    <form name="formImg" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileImg"/>
    </form>
    <script>
        //绑定change事件  当上传文件的文件按钮的内容发生变化以后自动提交表单 上传文件
        formImg.fileImg.onchange=function(){
            formImg.submit();
        }
    </script>
</body>
</html>