<?php
header("Content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html >
    <head>
        <title>没有刷新上传一个文件</title>
        <style>
            iframe { display: none}
        </style>
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.js"></script>
        <script>
            $(function() {
               $("#infile").change(function() {
                   $(this).after("<span id='upstate'>正在上传</span>");
                   $(this).parent('form').submit();
               }) ;
            });

//            如果要在iframe 使用，需要用top对象调用
            function up_state(info , bool) {
                $("#info").html(info);
                $("#infile").parent('form');
    
                if(bool) $("#upstate").html("上传成功");
                else     $("#upstate").html("上传失败");
            }
            
        </script>
        
      
    </head>
    <body>
        <!--使用target ，上传的任务就交个 iframe--> 
        <form method="post" action="upload.php" target="upfile" enctype="multipart/form-data">
            <input type="file" id="infile" name="file"/> 
        </form>
        <iframe name="upfile" ></iframe>

        <!--用来显示上传的信息-->
        <div id="info">
            
        </div>
    </body>
</html>