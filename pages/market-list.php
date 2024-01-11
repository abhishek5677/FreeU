<?php $currentPage = "market-list" ?>
<?php include '../component/header_link.php'; ?>
<?php include '../component/header.php'; ?>


<div>
    <div class="market-list">
        <div class="banner right-ivestment">
            <div class="container row d-flex align-items-center">
                <div class="col-md-6 content aos-init aos-animate" data-aos="fade-right">
                    <h1 class="invest-header si-hd">Sell your investment's today!</h1>
                    <ul class="si-hd_p">
                        <li>Verified Buyers</li>
                        <li>Expert Verification</li>
                        <li>Sell From Your Home</li>
                    </ul>
                </div>
                <div class="col-md-6 bgn-image aos-init aos-animate" data-aos="fade-left">
                    <img src="https://staging.freeu.in/public/assets/media/FrontendImages/r-invest.png">
                </div>
            </div>
        </div>
        <div class="form">
            <div class="container mx-auto">
                <form id="marketplace-seller-form" method="POST" novalidate="novalidate">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                value="Mabel Lindgren">
                        </div>
                        <div class="form-group col-md-6">
                            <label>City</label>
                            <input type="text" name="city" onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                value="Lake Angelaburgh">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Country</label>
                            <input type="text" name="country" onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                value="Uruguay">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Postal Code</label>
                            <input type="text" name="postal_code" minlength="6" maxlength="6"
                                onkeydown="return /^[0-9]{9}+$/i.test(event.key)" value="455550">
                            <!--<input type="number" name="postal_code" min="100000" max="999999"  value="455550">-->
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact Number</label>
                            <input type="number" name="contact_number" value="2147483647">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" value="Otilia.Zieme@yahoo.com"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Select Product Category</label>
                            <select name="product_category" id="product_category">
                                <option value="Alternative Investment Fund">Alternative Investment Fund</option>
                            </select>
                        </div>





                        <div class="form-check declaration">
                            <h5>Declaration</h5>
                            <input class="form-check-input" type="checkbox" value="" id="checkbox-1" name="declaration">
                            <label class="form-check-label fw-semibold" for="checkbox-1">I, the undersigned, declare that I am the
                                rightful
                                owner of the Alternative asset product mentioned above and have the legal right to sell
                                them to
                                the buyer. I confirm that the information provided in this form is true and accurate to
                                the best
                                of my knowledge. I also agree to transfer the ownership to the buyer upon receipt of the
                                agreed-upon payment.</label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="bg-warning text-center fw-semibold">
                                Need Help? <br>
                                If you are experiencing any difficulties filling out the required information, we are
                                here to
                                help. Please reach out to us at info@jericho.in
                            </div>
                        </div>

                        <div class="text-center form-group col-md-12">
                            <button type="submit" class="blue-btn text-center" href="index.php">Review &amp; Submit</button>
                            <a href="seller-form.php">next</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>