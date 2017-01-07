<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <meta name="author" content="">

    <title>{!! config('app.name','Iloilo Finest') !!}</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <link rel="stylesheet" href=" {{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('vendors/font-awesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/hover-min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/animate.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('css/w3.css') }}"> --}}

    <style>


    html, body{
        padding:0px;
        margin:0px;
        height:100%;
        font-family: Roboto,sans-serif;
        font-size: 14px;
        line-height: 1.57142857;
        color: #e6e4e4;


        background-color: white;

     

    }


    #login_section {
        height: 90%;
        /*background-color:rgba(25, 25, 25, 0.1);*/
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
        /*background-color:rgba(225, 225, 225, 0.1);*/


        background: rgb(24,42,115);
        background: -moz-linear-gradient(-45deg,  rgba(24,42,115,1) 0%, rgba(33,138,174,1) 69%, rgba(32,167,172,1) 89%);
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(24,42,115,1)), color-stop(69%,rgba(33,138,174,1)), color-stop(89%,rgba(32,167,172,1)));
        background: -webkit-linear-gradient(-45deg,  rgba(24,42,115,1) 0%,rgba(33,138,174,1) 69%,rgba(32,167,172,1) 89%);
        background: -o-linear-gradient(-45deg,  rgba(24,42,115,1) 0%,rgba(33,138,174,1) 69%,rgba(32,167,172,1) 89%);
        background: -ms-linear-gradient(-45deg,  rgba(24,42,115,1) 0%,rgba(33,138,174,1) 69%,rgba(32,167,172,1) 89%);
        background: linear-gradient(135deg,  rgba(24,42,115,1) 0%,rgba(33,138,174,1) 69%,rgba(32,167,172,1) 89%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#182a73', endColorstr='#20a7ac',GradientType=1 );





        /*color: white;*/

        top: 5%;
        
    }

    #login_section_box {
        margin-top: 8%;
        padding: 15px;
    }

    #login_section h2 {
        text-align: left;
        font-weight: 200;
        margin-bottom: 20px;
        margin-top: 3px;
        color: white;
        font-size: 20px;
        text-align: center;
    }

    .logo {
        font-size: 40px;
    }

    .form-control-name {
        background-image: url( {{ asset('img/icon-lock.png') }});
        background-repeat: no-repeat;
        background-position: 40% center;
    }

    #login_section .btn {

        background-color:rgba(25, 25, 25, 0.1);
        border-color: white; 
        border-width: 1px;
        color: white;

        width: 100%;
        margin-left: 0;
        text-align: center;
        padding: 13px 10px 13px 10px;

/*        -webkit-transition-duration: 0.2s;  Safari 
        transition-duration: 0.2s;
*/

    }

    #login_section .btn:hover {


        border-width: 0;
         background-color:rgba(25, 25, 25, 0.5);
        /*border-radius: 0;*/
        color: white ;

        
      
    }

    .btn-login {
        text-decoration: none;
    }

    
    #login_section p {
        font-weight: 100;
        margin-top: 10px;
        float: left;
        margin-left: 50px;
    }

        #login_section .content {       
            margin-top: 40%;
        }

        .cls-controls {
            padding: 20px 50px;
            border: 0;
            background: #f5f5f5;
            border-radius: 0;
            float: left;
            margin-left: 0;
            margin-bottom: 10px;
            font-size: 13px;
            font-weight: 100;
        }

        #group_remember {
            padding: 0px 50px;
            /*margin-left: 0;*/
            font-size: 12px;
            font-weight: 200;
            float: left
        }

        textarea, input, button {
            outline: none;
        }

        button {
            cursor: pointer;
        }


        #voyager-login-btn{
            margin-top: 10px;
        }

        #forgot{
            margin-top: 50px;
        }
        
    
        .login_loader {
            display: none;
        }



        #messagebox{
            position: absolute;
            /*padding: 5px;*/
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 0;
            /*margin-left: 10%;*/
            border:0;
            margin: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }



    </style>

</head>
<body>

      
        <div  class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 text-center" id="login_section">
          <div id="login_section_box">
                @yield('authcontent')
            </div>
            <div id="messagebox">
                @include('closure.errors')      {{-- validation & error only --}}
                @include('closure.alerts')      {{-- validation & error only --}}
                @include('flash::message')      {{-- toast only --}}
            </div>
        </div>
        

        
        
   
          
    <script src=" {{ asset('vendors/jquery/dist/jquery.min.js') }} "></script>
    <script src=" {{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }} "></script>


</body>
</html>