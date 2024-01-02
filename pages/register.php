<?php $currentPage = "register" ?>
<?php include '../component/header.php'; ?>
<?php include '../component/header_link.php'; ?>

<div class="login">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <img width="100%" src="../assets/login-img/login-1png.png" alt="">
            </div>
            <div class="col-md-6 right" data-aos="fade-left">
                <div class="login-form">
                    <h1>Create Your Account</h1>
                    <h2>Get your free Freeu account now</h2>
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input class="form-control" type="text" />
                    </div>
                    <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input class="form-control" type="mail" />
                    </div>
                    <div class="form-group mb-3">
                        <label>Mobile Number</label>
                        <input class="form-control" type="tel" />
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input class="form-control" type="password" />
                    </div>
                    <div class="form-group mb-3">
                        <label>Confirm Password</label>
                        <input class="form-control" type="password" />
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                        <div style="width: 304px; height: 78px;">
                            <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-9zbasqf0w5of" frameborder="0"
                                    scrolling="no"
                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR&amp;co=aHR0cHM6Ly93b3JkcHJlc3MuYmV0YWRlbGl2ZXJ5LmNvbTo0NDM.&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=normal&amp;cb=tls7bgvhsqud"></iframe>
                            </div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response"
                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div><iframe style="display: none;"></iframe>
                    </div>
                    <a href="register_otp.php" class="yellow-btn signin">Continue</a>
                    <a href="Login.php" class="regist">Already have an account? <span>Login</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>