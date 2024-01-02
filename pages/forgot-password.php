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
                <div class="login-form">
                    <h1>Reset Your Password</h1>
                    <div class="form-group mb-3">
                        <label>Enter Email/Mobile Number</label>
                        <input class="form-control" type="tel">
                    </div>
                   <a href="reset-password.php" class="yellow-btn signin">Send OTP</a>
                    <a href="login.php" class="regist text-white">Already have an account? <span>Login</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>