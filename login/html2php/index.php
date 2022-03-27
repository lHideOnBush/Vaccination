<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpory" content="width=device-width", initial-scale="1.0">
    <title>Login Page</title>

    <!-- Using CDNJ -->
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fonnt-awesome.min.css">

    <!-- Using File inside your repo -->
    <link rel="stylesheet" href="./assets/css/index.css">
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

                    <!-- method to use the form properly, post to post the informations name and value recieved -->
                    <!-- action are url that is called to perform action -->
                    <form method="post" action="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fa fa-user"></i>
                                </div>

                                <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="off"/>  <!-- name is used for the identification when posted -->
                                </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fa fa-lock"></i>
                                        </div>   

                                <input name="password" type="password"  class="form-control"placeholder="Password"autocomplete="off"/>
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