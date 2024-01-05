<?php $currentPage = "register" ?>
<?php include '../component/header.php'; ?>
<?php include '../component/header_link.php'; ?>

<div class="banner contact privacy">
    <div class="container ">
        <img src="../assets/login-img/contact-banner.png" data-aos="fade-down" class="aos-init aos-animate">
    </div>
</div>

<div class="contact-sec">
    <div class="container ">
        <h2>Contact us</h2>
        <div class="row">
            <div class="col-md-4 crd23 aos-init aos-animate" data-aos="fade-right">
                <div class="cdr-img">
                    <img src="../assets/login-img/contact-phone.png">
                </div>
                <h2>Give Us A Call</h2>
                <hr>
                <h2> 022-62396024</h2>
            </div>
            <div class="col-md-4 crd23 aos-init aos-animate" data-aos="fade-left">
                <div class="cdr-img">
                    <img src="../assets/login-img/contact-email.png">
                </div>
                <h2>Send Us Mail</h2>
                <hr>
                <h2>info@freeu.com</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 blue-box aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6 right aos-init" data-aos="fade-right">
                        <h3>GET IN <br>TOUCH</h3>
                        <h4>FreeU - Your gateway to alternative investment opportunities</h4>
                        <p>Invest with confidence. Start a <br> conversation with our experts!</p>
                    </div>
                    <div class="col-md-6 left aos-init " data-aos="fade-left">
                        <div class="form-tab contact-form">
                            <ul id="myTabs" class="nav nav-pills nav-justified d-flex justify-content-around mb-2"
                                role="tablist" data-tabs="tabs">
                                <li class="active">
                                    <a class="active" id="investor-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-invest" type="button" role="tab" aria-controls="nav-invest"
                                        aria-selected="true">Investor
                                    </a>
                                </li>
                                <li><a class="" id="asset-tab" data-bs-toggle="tab" data-bs-target="#nav-email"
                                        type="button" role="tab" aria-controls="nav-email" aria-selected="false"
                                        tabindex="-1">Asset Managers & Intermediaries</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="nav-invest" role="tabpanel"
                                    aria-labelledby="investor-tab">
                                    <form>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                        <div class="g-recaptcha"
                                            data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
                                            <div style="width: 304px; height: 78px;">
                                                <div><iframe title="reCAPTCHA" width="304" height="78"
                                                        role="presentation" name="a-9zbasqf0w5of" frameborder="0"
                                                        scrolling="no"
                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR&amp;co=aHR0cHM6Ly93b3JkcHJlc3MuYmV0YWRlbGl2ZXJ5LmNvbTo0NDM.&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=normal&amp;cb=tls7bgvhsqud"></iframe>
                                                </div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response"
                                                    class="g-recaptcha-response"
                                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                            </div><iframe style="display: none;"></iframe>
                                        </div>
                                        <a href="" class="submit-btn">Submit</a>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-email" role="tabpanel" aria-labelledby="asset-tab">
                                    <form>
                                        <div class="form-group">
                                            <label>Entity Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Representative Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea ></textarea>
                                        </div>
                                        
                                        <a href="" class="submit-btn">Submit</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <form>
                            <div class="form-group">
                                <label>Your Email Address</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <a href="" class="yellow-btn">Submit</a>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>