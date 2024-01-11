<?php $currentPage = "huf" ?>
<?php include '../component/header_link.php'; ?>
<?php include '../component/header.php'; ?>


<div>
    <div class="kyc">
        <div class="banner">
            <div class="container aos-init aos-animate" data-aos="fade-right">
                <div class="investor-image">
                    <img src="https://staging.freeu.in/public/assets/media/FrontendImages/accounts.png">
                </div>
            </div>
        </div>
        <div class="accounts">
            <div class="acc-header container aos-init aos-animate" data-aos="fade-right">
                <div>
                    <h2>HUF Accounts</h2>
                    <p>View all your HUF accounts details from one place</p>
                </div>
            </div>
        </div>
        <div class="container tab-form">
            <div class="row">
                <div class="col-md-12 acc-list">
                    <div class="card2 first-screen show ml-2">
                        <form id="huf_Form" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="wViNiljAsjxahjzwmHXeyl28wP6ZXLo3vB6kHxDj">
                            <div class="pi-details">
                                <h2>Complete your KYC</h2>
                                <div>
                                    <h4>Personal Information</h4>
                                    <p>Provide your personal information as per your Bank Account</p>
                                </div>
                            </div>
                            <div class="row form-sec">
                                <div class="col-md-6 mb-4">
                                    <label>Name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter Name"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Mobile Number</label>
                                    <input type="text" id="mobile_number" name="mobile_number"
                                        placeholder="Enter Mobile Number" minlength="10" maxlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Email ID</label>
                                    <input type="email" id="email_id" name="email_id" placeholder="Enter Email"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Date Of Birth</label>
                                    <input type="date" id="date_of_birth" name="date_of_birth"
                                        placeholder="Enter Date Of Birth" class="iv-input form-control p-2"
                                        max="2006-01-11">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Place Of Birth</label>
                                    <input type="text" id="place_of_birth" name="place_of_birth"
                                        placeholder="Enter Place Of Birth"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Gross Annual Income</label>
                                    <input type="text" id="gross_annual_income" name="gross_annual_income"
                                        placeholder="Enter Gross Annual Income"
                                        onkeydown="return /^[0-9]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Occupation / Business</label>
                                    <input type="text" id="occupation_business" name="occupation_business"
                                        placeholder="Enter Occupation/Business"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phone">Deed of declaration of HUF</label>
                                    <input type="file" id="deed_of_declaration" name="deed_of_declaration" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">PAN Card - Karta and Members of HUF</label>
                                    <input type="file" id="pan_card" name="pan_card[]" multiple="" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">List of all members (Karta &amp; Co-parceners)</label>
                                    <input type="file" id="list_of_all_members" name="list_of_all_members" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Coparcenrs Aadhar/ Passport</label>
                                    <input type="file" id="coparcenrs_aadhar_passport"
                                        name="coparcenrs_aadhar_passport[]" multiple=""
                                        class="acc-dropdown form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="occ">Proof of Address of Karta of HUF (Any One)</label>
                                    <input type="file" id="proof_of_address" name="proof_of_address" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Bank Statement / Bank Passbook</label>
                                    <input type="file" id="bank_statement" name="bank_statement" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Passport size photograph of Karta</label>
                                    <input type="file" id="passport_size_photo" name="passport_size_photo" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Copy of CML</label>
                                    <input type="file" id="copy_of_cml" name="copy_of_cml" value=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Cancelled Cheque</label>
                                    <input type="file" id="cancelled_cheque" name="cancelled_cheque" value=""
                                        class="iv-input form-control p-2">
                                </div>
                            </div>
                            <h5><i>"Please be advised that if additional documents or information are required, the
                                    Freeu team will promptly
                                    contact you for further assistance."</i></h5>
                            <button type="submit" id="huf_submit" class="next-button">Save and Continue</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>



<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>