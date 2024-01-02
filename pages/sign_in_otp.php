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
                <div class="login-form-otp">
                    <h1>Welcome Back</h1>
                    <h2>Sign in to continue to FreeU</h2>
                    <h3>OTP Login</h3>
                    <div class="form-group">
                        <label>Please enter the OTP sent to registered mobile number</label>
                    
                        <div class="otp-field">
                            <input type="text" maxlength="1" />
                            <input type="text" maxlength="1" />
                            <input type="text" maxlength="1" />
                            <input type="text" maxlength="1" />
                        </div>
                    </div>
                    <p>OTP has been sent to your registered mobile number. <br>OTP valid for 00:00 sec</p>
                    <a href="" class="regist ">Didn't receive any otp? <span>Resend OTP</span></a>
                    <a href="index.php" class="yellow-btn signin">Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>