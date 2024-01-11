<?php $currentPage = "individual" ?>
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
                    <h2>Individual Accounts</h2>
                    <p>View all your individual accounts details from one place</p>
                </div>
            </div>
        </div>
        
        <div class="container tab-form">
            <div class="row">
                <div class="col-md-12 acc-list">
                    <div class="card2 first-screen show ml-2">
                        <form id="personalInformationForm" method="POST">
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
                                    <!--<input type="number" id="mobile_number" name="mobile_number" placeholder="Enter Mobile Number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="10" maxlength="10" onkeydown="return /^[0-9]{9}+$/i.test(event.key)" class="iv-input form-control p-2">-->
                                    <input type="tel" id="mobile_number" name="mobile_number"
                                        placeholder="Enter Mobile Number" minlength="10" maxlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        class="contact-number iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Email ID</label>
                                    <input type="email" id="email_id" name="email_id" placeholder="Enter Email"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Father's Name</label>
                                    <input type="text" id="father_name" name="father_name"
                                        placeholder="Enter Father's Name"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Mother's Name</label>
                                    <input type="text" id="mother_name" name="mother_name"
                                        placeholder="Enter Mother's Name"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Date Of Birth</label>
                                    <input type="date" id="dob" name="dob" class="iv-input form-control p-2"
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
                                    <input type="number" id="gross_annual_income" name="gross_annual_income"
                                        placeholder="Enter Gross Annual Income" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Occupation / Business</label>
                                    <input type="text" id="occupation_business" name="occupation_business"
                                        placeholder="Enter Occupation/Business"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">Pan Card</label>
                                    <input type="file" id="pan_card" name="pan_card" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">Proof Of Address (Aadhar/Passport/Driving License/Voter ID/Ration
                                        Card/ElectricityBill/Gas Bill/Telephone Bill)</label>
                                    <input type="file" id="proof_of_address" name="proof_of_address"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="resident">Photograph</label>
                                    <input type="file" id="Photograph" name="Photograph"
                                        class="iv-input form-control p-2" style="margin-top:20px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="dob">Cancelled Cheque / Bank Statement</label>
                                    <input type="file" id="cancelled_cheque" name="cancelled_cheque"
                                        class="acc-dropdown form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="occupation">Copy of CML</label>
                                    <input type="file" id="copy_of_cml" name="copy_of_cml"
                                        class="acc-dropdown form-control p-2">
                                </div>
                            </div>
                            <h5 class="info"><i>"Please be advised that if additional documents or information are required, the
                                    Freeu team will promptly
                                    contact you for further assistance."</i></h5>
                            <button type="submit" id="individual_submit" class="next-button">Save and Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>