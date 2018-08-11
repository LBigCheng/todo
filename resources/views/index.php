<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    

    <title>首頁</title>

    <style>
        .titlediv{
            /* 頂部 */
            height:100px;
        }
        
    </style>
</head>
<body>
    <div class="container" >
        <div class="row" style="background-color:green;">
            <!-- title -->
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 titlediv">
                <img src="images/bird.jpg" alt="鳥" class="img-responsive">
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 titlediv">
                <!-- table拿來垂直置中 -->
                <table width="100%" height="100%">
                    <tr><td>
                        <input type="text" class="form-control" placeholder="搜尋" style="width:70%;height:50px;">
                    </td></tr> 
                </table>
            </div>
            
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 titlediv" style="text-align:right;">
                <!-- table拿來垂直置中 -->
                <table width="100%" height="100%">
                    <tr><td>
                        <h2>登入/註冊</h2>
                    </td></tr>
                </table>
            </div>
            <!-- title -->
        </div>
            <!-- 身體 -->
        <div class="row" style="background-color:#AAFFEE;min-height:500px;">
            <!-- <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:center;font-size:24px;">
                <a href="#">刊登出售<a><br>
                <a href="#">刊登收購<a><br>
                <a href="#">家電(冰箱、電腦...)<a><br>
                <a href="#">書籍<a><br>
            </div>
            
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                
                

            </div> -->
        </div>
            <!-- 身體 -->
            <!-- 頁尾 -->
            
                <div class="col-xs-12" style="background-color:yellow;">
                    <p class="copyright">
                        Copyright © 2018 大成.
                        <br>
                        
                    </p>
                </div>
        
            <!-- 頁尾 -->
    </div>

    
</body>
</html>