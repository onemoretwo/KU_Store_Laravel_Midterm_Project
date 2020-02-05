<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap-4.4.1/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-free-5.12.0-web/css/all.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">

                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="/images/logo2.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <div class="row">
                        <div class="col-md-6" id="form1">
                            <form action="login/signup" method="post" class="signUp">
                                <div class="input-group mb-3" style="text-align: center;">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control input_user" value=""
                                        placeholder="username">
                                </div>
                                <div class="input-group mb-3" style="text-align: center;">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control input_user" value=""
                                        placeholder="Email">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="npwd" class="form-control input_pass" value=""
                                        placeholder="password">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="rpwd" class="form-control input_pass" value=""
                                        placeholder="confirm password">
                                </div>
                                <div class="d-flex justify-content-center mt-3 signUp_container">
                                    <button type="submit" name="button" class="btn signUp_btn">Sign Up</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6 center-form" id="form1">
                            <form  action="login/authen" method="post" class="login">

                                <div class="input-group mb-3" style="text-align: center;">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control input_user" value=""
                                        placeholder="username">
                                </div>

                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control input_pass" value=""
                                        placeholder="password">
                                </div>

                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" class="btn login_btn">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap-4.4.1/bootstrap.min.js"></script>

</body>

</html>