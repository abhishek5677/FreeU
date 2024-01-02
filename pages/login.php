<?php $currentPage = "login" ?>
<?php include '../component/header.php'; ?>
<?php include '../component/header_link.php'; ?>

<div class="login">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <img width="100%" src="../assets/login-img/login-1png.png" alt="">
            </div>
            <div class="col-md-6 right aos-init aos-animate" data-aos="fade-left">
                <div class="login-form custom-height-form">
                    <h1>Welcome Back</h1>
                    <h2>Sign in to continue to FreeU</h2>
                    <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
                        <li class="active">
                            <a class=" active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Mobile number</a>
                        </li>
                        <li><a class="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Email</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="form-group">
                                <label>Enter Your Mobile Number</label>
                                <input class="form-control" type="tel">
                            </div>
                            <a href="forgot-password.php" class="password">Forgot Password ?</a>
                            <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-11yd0rsbe863" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR&amp;co=aHR0cHM6Ly93b3JkcHJlc3MuYmV0YWRlbGl2ZXJ5LmNvbTo0NDM.&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=normal&amp;cb=j4p5zj5vp09z"></iframe>
                                    </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div>
                            </div>
                            <a href="sign_in_otp.php" class="yellow-btn signin">Sign in</a>
                            <a href="register.php" class="regist">Don’t have an account yet?<br><span>Create
                                    one
                                    today</span></a>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input class="form-control" type="tel">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="tel">
                            </div>
                            <a href="forgot-password.php" class="password">Forgot Password ?</a>
                            <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-9zbasqf0w5of" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR&amp;co=aHR0cHM6Ly93b3JkcHJlc3MuYmV0YWRlbGl2ZXJ5LmNvbTo0NDM.&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=normal&amp;cb=tls7bgvhsqud"></iframe>
                                    </div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                            </div>
                            <a href="sign_in_otp.php" class="yellow-btn signin">Sign in</a>
                            <a href="register.php" class="regist text-white">
                                Don’t have an account yet?
                                <br>
                                <span>Create one today</span>
                            </a>
                            <!-- <a href="register.php">hi</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>