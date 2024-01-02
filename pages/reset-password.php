<?php $currentPage = "login" ?>
<?php include '../component/header.php'; ?>
<?php include '../component/header_link.php'; ?>
<style>
    svg {
        right: 5px;
        width: 30px;
        display: block;
        margin: 0;
        float: right;
        position: absolute;
        top: -34px;
    }

    .icons {
        position: relative;
    }

    .path {
        stroke-dasharray: 1000;
        stroke-dashoffset: 0;
    }

    .path.circle {
        -webkit-animation: dash 0.9s ease-in-out;
        animation: dash 0.9s ease-in-out;
    }

    .path.line {
        stroke-dashoffset: 1000;
        -webkit-animation: dash 0.9s 0.35s ease-in-out forwards;
        animation: dash 0.9s 0.35s ease-in-out forwards;
    }

    .path.check {
        stroke-dashoffset: -100;
        -webkit-animation: dash-check 0.9s 0.35s ease-in-out forwards;
        animation: dash-check 0.9s 0.35s ease-in-out forwards;
    }

    p.success {
        color: #73AF55;
    }

    p.error {
        color: #D06079;
    }

    @-webkit-keyframes dash {
        0% {
            stroke-dashoffset: 1000;
        }

        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes dash {
        0% {
            stroke-dashoffset: 1000;
        }

        100% {
            stroke-dashoffset: 0;
        }
    }

    @-webkit-keyframes dash-check {
        0% {
            stroke-dashoffset: -100;
        }

        100% {
            stroke-dashoffset: 900;
        }
    }

    @keyframes dash-check {
        0% {
            stroke-dashoffset: -100;
        }

        100% {
            stroke-dashoffset: 900;
        }
    }
</style>



<div class="login">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <img width="100%" src="../assets/login-img/login-1png.png" alt="">
            </div>
            <div class="col-md-6 right" data-aos="fade-left">
                <div class="login-form">
                    <h1>Reset Your Password</h1>
                    <div class="form-group mb-2">
                        <label>Enter the OTP sent to registered mobile number</label>
                        <input class="form-control" type="tel" />
                        <!-- <div class="icons">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10"
                                    cx="65.1" cy="65.1" r="62.1" />
                                <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round"
                                    stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                            </svg>
                        </div> -->
                    </div>
                    <div class="form-group mb-2">
                        <label>New Password</label>
                        <input class="form-control" type="password" />
                    </div>
                    <div class="form-group mb-3">
                        <label>Confirm Password</label>
                        <input class="form-control" type="password" />
                    </div>
                    <a href="Login.php" class="yellow-btn signin">Update</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>