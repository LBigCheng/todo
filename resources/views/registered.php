<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入</title>

    <link rel="bookmark" type="image/x-icon" href="cb6tr-rnzg9-003.ico" />
    <link rel="shortcut icon" href="cb6tr-rnzg9-003.ico">
    <link rel="icon" href="cb6tr-rnzg9-003.ico">

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<script>
    $(function (){/*人工審查檔案JS*/
 
 function format_float(num, pos)
 {
     var size = Math.pow(10, pos);
     return Math.round(num * size) / size;
 }

 function preview(input) {

     if (input.files && input.files[0]) {
         var reader = new FileReader();
         
         reader.onload = function (e) {
             $('.preview').attr('src', e.target.result);
             var KB = format_float(e.total / 1024, 2);
             $('.size').text("檔案大小：" + KB + " KB");
         }

         reader.readAsDataURL(input.files[0]);
     }
 }

 $("body").on("change", ".upl", function (){
     preview(this);
 })/*人工審查檔案JS*/
 
})
</script>
<style>
        @media screen and (max-width: 767px) {
            .row {
                font-size: 20px;
                color: aqua;
            }
            .button_cl1 {
                width: 45%;
                height: 100px;

            }
            .button_cl2 {
                width: 45%;
                height: 100px;
                float: right;
            }
            .c4bg {
                background: url("1c11358e68e219513c6fb8d3f2f3e64b_jpg.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
                width: 45%;
                height: 100px;
            }
            #c1bg7 {
                width: 195px;
                height: 65px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .row {
                font-size: 30px;
            }
            .button_cl1 {
                width: 45%;
                height: 125px;

            }
            .button_cl2 {
                width: 45%;
                height: 125px;
                float: right;
            }
            #c1bg7 {
                width: 375px;
                height: 125px;
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            .row {
                font-size: 40px;
            }
            .button_cl1 {
                width: 45%;
                height: 175px;
            }
            .button_cl2 {
                width: 45%;
                height: 175px;
                float: right;
            }
            #c1bg7 {
                width: 525px;
                height: 175px;
            }
        }

        @media screen and (min-width: 1200px) {
            .row {
                font-size: 50px;
            }
            .button_cl1 {
                width: 500px;
                height: 200px;
                margin: 0px 0px 0px 40px;
                font-family: Microsoft JhengHei;
                /*微軟正黑體*/
            }
            .button_cl2 {
                width: 500px;
                height: 200px;
                margin: 0px 40px 0px 0px;
                float: right;
                font-family: Microsoft JhengHei;
                /*微軟正黑體*/
            }
            #c1bg7 {
                width: 45%;
                height: 200px;
            }

        }
        .body {
            background-image: url("images/NFU.png");
            background-repeat: repeat;
            background-size: auto;
        }
        

    .td_align{
        text-align:right;
        }
    .table_margin{
        margin:40px 0px 0px 0px;
        }
        
    </style>
<body class="body">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">雙邊交易平台</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                
                <div class="collapse navbar-collapse navbar-ex1-collapse" style="overflow: auto;">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">首頁</a>
                        </li>
                        <li>
                            <a href="#">Link2</a>
                        </li>
                    </ul>
        
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
            <p align="center">註冊</p>

    <div class="container" >
        <table align=center class="table_margin table" style="height: 100%; width: 100%; padding:10px;"> 
            <tbody>
                <tr>
                    <th style="width: 30%;" class="td_align">姓名<font color="red">*</font>：</th>
                    <th style="width: 40%;">
                        <input size="20" type="textbox" >
                    </th>
                </tr>
                
                </tr>
                <tr>
                    <th  class="td_align">學校mail<font color="red">*</font>：&nbsp;</th>
                    <th>
                        <input size="50" type="textbox" placeholder="請使用學校mail 如果要使用非學校信箱註冊，請上傳學生證檔案">
                    </th>
                    
                        </tr>
                        <tr>
                                <th  class="td_align">人工審查檔案：&nbsp;</th>
                                <th>
                                        <form>
                                                <input type='file' class="upl">
                                                <div>
                                                    <img class="preview" style="max-width: 150px; max-height: 150px;">
                                                    <div class="size"></div>
                                                </div>
                                            </form>
                                </th>
                                
                                    </tr>

                <tr>
                    <th  class="td_align">密碼<font color="red">*</font>：</th>
                    <th >
                        <input size="20" type="password" />
                    </th>
                </tr>
                <tr>
                    <th  class="td_align">再次確認密碼<font color="red">*</font>：</th>
                    <th >
                        <input size="20" type="password" />
                    </th>
                </tr>
                <tr>
                    <th  class="td_align">手機<font color="red">*</font>：</th>
                    <th >
                        <input size="20" type="textbox" />
                    </th>
                </tr>
                <tr>
                    <th  class="td_align">Line-ID：</th>
                    <th >
                        <input size="20" type="textbox" />
                    </th>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <p>使用者規範</p>
                        <pre style="width:50%;height:300px;">
0.0.0.0.0
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
                        </pre>
                    </td>
                </tr>
                <tr>
                        <td colspan="2" align="center">
                            <input type="checkbox" value="同意">同意
                        </td>
                    </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="註冊">&emsp;&emsp;
                        <input type="button" value="取消">
                    </td>
                </tr>
            </tbody>
        </table>
    </table>

    </div>
    

</body>
</html>