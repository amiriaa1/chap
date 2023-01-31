<?php
include('main.php');


echo'

<html lang="fa" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>' . $system_title . '</title>
    <link rel="shortcut icon" href="img/default-icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/default-icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="auths">
        <div class="container">
            <div class="auth shadow-box">
                <div class="row" style="min-height:inherit;">
                    <div class="col-lg-8">
                        <div class="auth-forms">
                            <div class="auth-forms-item">
                                <div class="auth-title">
                                    <div class="auth-logo d-lg-none d-block">
                                        <a href="index.html"><img src="img/default-icon/logo.jpg" class="img-fluid"
                                                alt=""></a>
                                    </div><br><br><br><br><br><br>
                                    <h3>ورود / عضویت</h3>
                                   <br>
                                </div>
                                <div class="auth-form">
                                    <form method="post" action="aut">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <input type="text" name="uusername" id="uusername" class="form-control" placeholder="برای ورود شماره موبایل خود را وارد کنید">
                                                
                                            </div>
                                        </div>
                                     
                                       
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="submit" class="btn-login me-2 waves-effect waves-light"><i class="bi bi-person"></i>
                                                ورود به
                                                سایت</button>
                                            <a class="btn-login forget waves-effect waves-light" href="forget.html"><i class="bi bi-person"></i>
                                                فراموشی رمز عبور
                                            </a>
                                        </div>

                                    </form>
                                    
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="auth-side d-lg-block d-none">
                            <div class="background">
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                            </div>
                            <div class="auth-desc">
                                <div class="auth-logo">
                                    <a href="index.html"><img src="img/default-icon/logo.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <h3 class="fw-bold">خوش آمدید</h3>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery-app.js"></script>
    <script src="js/plugin/waves/waves.js"></script>


</body>

</html>

';
?>


