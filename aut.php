<?php

include('main.php');



if(isset($_POST['up-submit'])){
	
	
	$username=$_POST['up-username'];
	$email=$_POST['up-email'];
	$name=$_POST['up-name'];
	$pass=$_POST['up-pass'];
	$codmeli=$_POST['up-codmeli'];
	$uactive=0;
	
	$studentProp = $student->AddStudent(1,$username,md5($pass),$uactive,$name,$email,$codmeli);
	
$llvm=$_POST['up-username'];
$stat=1;
sendemailverfy($llvm,$stat);



	
		
	echo'
	
	
	
<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>فروشگاه رستا</title>
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
                <div class="row" style="min-height: inherit;">
                    <div class="col-lg-8">
                        <div class="auth-forms">
                            <div class="auth-forms-item">
                                <div class="auth-logo d-lg-none d-block">
                                    <a href="index.html"><img src="img/default-icon/logo.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="auth-title">
							<br><br><br><br><br><br>
                                    <h3>ورود به حساب کاربری</h3>
                                    <p class="my-3 text-muted">کد احراز برای شما ارسال شد</p>
                                </div>
                                <div class="auth-form">
                                   <form method="post" action="">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <input type="text" name="aut" id="aut" class="form-control" placeholder="کد احراز هویت">
												<input type="hidden" name="username" id="username" value="'.$llvm.'">
                                            </div>
                                        </div>
                                       
									 <div class="d-flex justify-content-center align-items-center">
                                            <button type="submit" name="aut-up-submit" id="aut-up-submit" class="btn-login me-2 waves-effect waves-light"><i class="bi bi-person"></i>
                                                تایید ثبت نام</button>
                                         
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
	
	
	
	
}


if(isset($_POST['aut'])){
	


$cod=$_POST['aut'];
$username=$_POST['username'];

$studentProp = $student->GetStudentInfo($username);
$autver=$studentProp['autver'];
$password=$autver;
if($autver==$cod)
{
	$stat=2;
	$llvm=$_POST['username'];
	sendemailverfy($llvm,$stat);
	if(isset($_POST['aut-up-submit'])){
	
	$studentProp2 = $student->UsetTwoFactorupdate($username);
	$studentProp3 = $student->GetStudentInfo($username);
	
}
	
$counts=1;
if(!$counts==1)
				{
					if (!isset($_SESSION['login_count']))
						$_SESSION['login_count']=1;
					else
						$_SESSION['login_count']++;
					$message = _USER_BAD_USERNAME_OR_PASSWORD;
				}
				else
				{
					date_default_timezone_set("UTC");
					
					if($studentProp3['uactive']==0){
						$message = _USER_YOUR_ACCOUNT_IS_DISABLED;
					setcookie($user_session_name,$username,time()+2592000);
					setcookie($user_password_session_name,$password,time()+2592000);
                      header('Location: index');		exit;
					}
					
					
					else
					{
						$cookie=(isset($_POST['remember']) && $_POST['remember']==1?1:0);
						if ($cookie==0) {
							$_SESSION[$user_session_name] = $username;
							$_SESSION[$user_password_session_name] = $password;
						}
						else
						{
							if (!empty($testa_prefix))
							{
								$domain = (preg_match("/localhost/",$_SERVER['SERVER_NAME'])==true?"localhost":($_SERVER['SERVER_NAME']==$_SERVER['SERVER_ADDR']?"localhost":get_domain('http://'.$_SERVER['SERVER_NAME'])));
								setcookie($user_session_name,$username,time()+2592000,"/",$domain);
								setcookie($user_password_session_name,$password,time()+2592000,"/",$domain);
							}
							else
							{
								setcookie($user_session_name,$username,time()+2592000);
								setcookie($user_password_session_name,$password,time()+2592000);
							}
						}
						
						
						if($redirect == "")
							$redirect = "./";

						header('Location: '.urldecode($redirect).'');
						header("Location: index");
	echo '<meta charset="utf-8">'._ADMIN_LOGIN_YOU_HAVE_ALREADY_LOGGED_IN;	
					}
					
				}
				
				
				
}
else{echo'کد صحیح نیست';}

}



if(!isset($_POST['uusername'])){
	
	
	exit;
}

$uusername=$_POST['uusername'];
$llvm=$_POST['uusername'];
if($student->UsernameAvailability($uusername)==0){
	
	
	
$test=date("Y-m-d H:i:s");
$sum=date("Y-m-d H:i:s", strtotime($utimestampuser. ' + 5 minute'));
$avttime=strtotime($sum)-strtotime($test); 
$timemin=round($timemin, 0);
$timemin=$avttime/60;
$timemin=round($timemin, 0);




if($test > $sum OR $utimestampuserupdatee==NULL)
{
	
	$stat=1;
	$llvm=$_POST['uusername'];
	sendemailverfy($llvm,$stat);
	
	
	
	}


else{
	
	$Failure=1;
echo'ersal nashod time limit';

	
	}
	

	
	
	echo'
	
	
	
<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>فروشگاه رستا</title>
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
                <div class="row" style="min-height: inherit;">
                    <div class="col-lg-8">
                        <div class="auth-forms">
                            <div class="auth-forms-item">
                                <div class="auth-logo d-lg-none d-block">
                                    <a href="index.html"><img src="img/default-icon/logo.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="auth-title">
							<br><br><br><br><br><br>
                                    <h3>ورود به حساب کاربری</h3>
                                    <p class="my-3 text-muted">کد احراز برای شما ارسال شد</p>
                                </div>
                                <div class="auth-form">
                                   <form method="post" action="">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <input type="text" name="aut" id="aut" class="form-control" placeholder="کد احراز هویت">
												<input type="hidden" name="username" id="username" value="'.$uusername.'">
                                            </div>
                                        </div>
                                       
									 <div class="d-flex justify-content-center align-items-center">
                                            <button type="submit" class="btn-login me-2 waves-effect waves-light"><i class="bi bi-person"></i>
                                                ورود به
                                                سایت</button>
                                         
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
	
}
else if($student->UsernameAvailability($uusername)==2)
				{
					$error = $uusername_title._USER_SIDE_USERNAME_IS_INVALID;
					
				}
else{
	
	
	

echo'

<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>فروشگاه رستا</title>
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
                <div class="row" style="min-height: inherit;">
                    <div class="col-lg-8">
                        <div class="auth-forms">
                            <div class="auth-forms-item">
                                <div class="auth-logo d-lg-none d-block">
                                    <a href="index.html"><img src="img/default-icon/logo.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="auth-title">
                                    <h3>ثبت نام کنید</h3>
                                    <p class="my-3 text-muted">اگر قبلا ثبت نام کرده اید وارد شوید</p>
                                </div>
                                <div class="auth-form">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <input type="text" name="up-username" id="up-username" class="form-control" placeholder="نام کاربری" value="'.$_POST['uusername'].'">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="text" name="up-email" id="up-email" class="form-control" placeholder="ایمیل">
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="text" name="up-codmeli" id="up-codmeli" class="form-control" placeholder="کدملی">
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="text" name="up-name" id="up-name" class="form-control" placeholder="نام">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-key"></i></span>
                                                <input type="password" name="up-pass" id="up-pass" placeholder="رمز عبور" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center flex-column align-items-center flex-wrap">
                                            <button type="submit" name="up-submit" id="up-submit" class="btn-login w-50 waves-effect waves-light"><i class="bi bi-person"></i>
                                                 ثبت نام در سایت
                                            </button>
                                            <a class="btn-login login w-50 waves-effect waves-light" href="login"><i class="bi bi-lock"></i> 
                                                ورود به سایت
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
}
?>
