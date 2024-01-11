<?php $currentPage = "partnership" ?>
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
                    <h2>Partnership Accounts</h2>
                    <p>View all your Partnership accounts details from one place</p>
                </div>
            </div>
        </div>
        <div class="container tab-form">
            <div class="row">
                <div class="col-md-12 acc-list">
                    <div class="card2 first-screen show ml-2">

                        <form id="partnerShipForm" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" id="name" name="name" placeholder="EnterName"
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
                                    <label>Father Name</label>
                                    <input type="text" id="father_name" name="father_name"
                                        placeholder="Enter Father Name"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Mother Name</label>
                                    <input type="text" id="mother_name" name="mother_name"
                                        placeholder="Enter Mother Name"
                                        onkeydown="return /^[a-zA-Z\s]+$/i.test(event.key)"
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
                                    <label>True Copy of Partnership Deed</label>
                                    <input type="file" id="" name="true_copy_of_partnership_deed"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">Registration Certificate</label>

                                    <input type="file" id="" name="registration_certificate"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">PAN Card</label>
                                    <input type="file" id="" name="pan_card" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">List of Partners and Authorised signatories</label>
                                    <input type="file" id="" name="list_of_partners_and_authorised_signatories"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">Pan Card copy of authorized signatory</label>
                                    <input type="file" id="" name="pan_card_copy_of_authorized_signatory[]" multiple=""
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">Aadhar card copy of authorized signatory</label>
                                    <input type="file" id="" name="aadhar_card_copy_of_authorized_signatory[]"
                                        multiple="" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">TAN Allotment letter</label>
                                    <input type="file" id="" name="tan_allotment_letter"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="resident">Proof of Address (of the firm)</label>
                                    <input type="file" id="" name="proof_of_address_firm"
                                        class="iv-input form-control p-2">

                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="dob">Latest Income Tax Return of the Firm (For the last 2 years)</label>
                                    <input type="file" id="" name="latestIincome_tax_return_of_the_firm"
                                        class="acc-dropdown form-control p-2">

                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="">Copy of CML</label>

                                    <input type="file" id="" name="copy_of_cml" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Copy of Audited Balance Sheet for the last 2 F.Y.</label>
                                    <input type="file" id="" name="copy_of_audited_balance_sheet_for_last"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Passport size photograph signed across of all Authorized Signatories /
                                        Partners</label>
                                    <input type="file" id="" name="passport_photo_authorized_signatories_partners[]"
                                        multiple="" class="iv-input form-control p-2 mt-1">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="">Cancelled Cheque</label>
                                    <input type="file" id="" name="cancelled_cheque"
                                        class="iv-input form-control p-2 mt-4">

                                </div>
                            </div>
                            <h5><i>"Please be advised that if additional documents or information are required, the
                                    Freeu team will promptly
                                    contact you for further assistance."</i></h5>
                            <button type="submit" id="pkyc_submit" class="next-button">Save and Continue</button>

                            <!-- </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>