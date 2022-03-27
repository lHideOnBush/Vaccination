<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpory" content="width=device-width", initial-scale="1.0">
    <title>Login Page</title>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fonnt-awesome.min.css">

    <style>
        html,
        body {
            background-color: #f4f4f4;
        }
        a {
            color: #ffb400;
        }

        .main-container {
            max-width: 100%;
            width: 100%;
        }

        .splash-container {
            margin: 0 auto 0 auto;
            width: 800px;
            padding-top: 50px;
        }
        /* SPLASH MESSAGE BOX */
        .splash-container .splash-message-box{
            display: --webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #222121;
            color: #fff;
            padding: 155px 30px 40px;
        }
        .splash-container .splash-message-box a{
            font-weight: 400;
            text-shadow: none !important;
            color: #0f0cc4;
        }
        .splash-container .splash-message {
            font-size: 2rem;
            line-height: 1.3;
            font-weight: 400;
            padding-bottom: 150xp;
            text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.3);
        }
        .splash-container .login-form{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: rgb(211, 39, 39);
            padding: 60px 30px 20px;
        }
        .login-form .form-title {
            color: #fff;
            font-size: 1.53846rem;
            font-weight: 300;
            display: block;
            margin: 0 auto;
        }
        .login-form .logo-img{
            display: block;
            margin: 0 auto;
        }
        .splash-container .input-group{
            border-bottom: 2px solid #3f3f3f;
            padding: 6px 0;
        }
        .splash-container .input-group .input-group-prepend {
            padding: .6rem .9rem;
            font-size:  1.23rem;
            margin-right: 0;
        }
        .splash-container .input-group .font-control {
            border: 0;
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 0;
            font-size: 14px;
            font-weight: 500;
            height: 36px;
        }
        .btn-primary {
            color: #fff;
            background-color: #ffb400;
            border-color: #ffb400;
            border-radius: 0;
        }
        .btn-primary.hover, .btn-primary:hover {
            color: #fff;
            border-color: transparent;
            background-color: #ffb400;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #ffb400;
            border-color: #ffb400;
        }
        .btn:hover {
            color: #545454;
            text-decoration: none;
        }
        
    </style>

</head>

<body>
    <div class="container main-container">
            <div class="splash-container row">
                <div class="col-md-6 splash-message-box">
                    <span class="splash-message text-right">
                        Welcome back!
                        <br>
                        Nice to see
                        <br>
                        you again
                        <br>
                        <br>
                        <br>
                        <br>                        
                    </span>
                    <span class="text-right">Not registered yet? <a href="/signup">Sign Up</a></span>
                </div>
                
                <div class="col-md-6 login-form">
                    <img class="logo-img" src="logo.png" alt="Jugadudev" width="200">
                    <span class="form-title text-center mt-4 mb-4">Login to your account</span>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fa fa-user"></i>
                                </div>

                                <input type="text" class="form-control" placeholder="Username" autocomplete="off"/>
                                </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fa fa-lock"></i>
                                        </div>   

                                <input type="password"  class="form-control"placeholder="Password"autocomplete="off"/>
                                    </div>
                                </div>
                                    <div class="form-group login-submit mt-5">
                                    <a class="btn btn-primary btn-block" href="/login">Login</a>
                        </div>
                        <div class="form-group row login-tools">
                        <div class="col-sm-6">
                            <label class="custom-control custom-checkbox mt-2">
                                <input class="custom-control-input" type="checkbox"><span
                                    class="custom-control-label">Remember 
                                    me</span>                                   
                            </label>
                        </div>
                        <div class="col-sm-6 pt-2 text-sm-right login-forgot-password"><a href="/forgotpassword">Forgot 
                            Password ?</a></div>                       
                        </div>
                    </form>
                </div>




        </div>
    </div>
</body>



</html>