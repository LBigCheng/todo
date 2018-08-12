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
        body { padding-top: 50px; }/* navbar-fixed-top會覆蓋到網頁 */
        
        .navbar{
            background-color:green;
        }
        
        .img-fluid{
            max-width:100%;
            height:auto;
        }
    </style>
</head>
<body>
            <!-- title -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/bird.jpg" alt="Logo" style="width:40px;">
                    </a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                
                <div class="collapse navbar-collapse navbar-ex1-collapse" style="overflow: auto;">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
        
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Link</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">會員中心
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Action</a>
                                </li>
                                <li>
                                    <a href="#">Another action</a>
                                </li>
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li>
                                    <a href="login_logout.html">登入</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            
            <!-- title -->
            <!-- 商品類別 -->
            
            <table style="width:100%;text-align:center;">
                <tr style="height:150px;">
                    <?php
                        for($i=1;$i<=7;$i++){
                            echo "<td><img src=\"images/g$i.png\" class=\"img-fluid\"></td>";
                        }
                    ?>
                </tr>
            </table>
            
            <!-- 商品類別 -->
            <div class="container-fluid" >
                    <!-- 身體 -->
                <div class="row" style="background-color:#AAFFEE;min-height:500px;">
                    <?php for($i=1;$i<=2;$i++){?>
                    <h1>最新上架</h1>
                        <div id="carousel-id" class="carousel slide" data-ride="carousel" style="margin-bottom:30px;">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <!-- 外面margin用auto 裡面靠左 大小用33% 用途:平均分配 -->
                                    <div style="margin:auto;width:90%;">
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/1.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/1.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/1.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/1.jpg"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div style="margin:auto;auto;width:90%;">
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/2.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/2.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/2.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/2.jpg"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div style="margin:auto;auto;width:90%;">
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/3.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/3.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/3.jpg"></div>
                                        <div style="float:left;width:25%; text-align: center"><img class="img-fluid" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/3.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    <?php }?>
                    
                </div>


                
                

                    <!-- 身體 -->
                    <!-- 頁尾 -->
                    <div class="row">
                        <div class="col-xs-12" style="background-color:yellow;">
                            <p class="copyright">
                                Copyright © 2018 <a>大成股份有限公司.</a><br>
                                #平台維護及規劃：BigCheng Liu and his classmate.<br>
                                !連絡信箱:jsdigodsgpofaeo@gmail.com<br>
                                $分機:0857<br>
                                %業界名人參與開發：賈伯斯、比爾‧蓋茲、馬克·祖克柏

                            </p>
                        </div>
                    </div>
                    <!-- 頁尾 -->
            </div>

    
</body>
</html>