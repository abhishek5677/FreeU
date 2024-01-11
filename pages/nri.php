<?php $currentPage = "nri" ?>
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
                    <h2>NRI Accounts</h2>
                    <p>View all your NRI accounts details from one place</p>
                </div>
            </div>
        </div>
        <div class="container tab-form">
            <div class="row">
                <div class="col-md-12 acc-list">
                    <div class="card2 first-screen show ml-2">
                        <form id="nri_form">
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
                                    <!--<input type="number" id="mobile_number" name="mobile_number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  placeholder="Enter Mobile Number" minlength="10" maxlength="10" class="iv-input form-control p-2">-->
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
                                    <label>Passport</label>
                                    <input type="file" id="Passport" name="Passport" class="iv-input form-control p-2">
                                    <!-- <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                                    <input class="form-control" type="text" id="dateTime" name="due_date" autocomplete="off"> -->
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">PIO/OCI Card</label>
                                    <input type="file" id="pio_oci_card" name="pio_oci_card"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">TIN (Tax Identification Number)</label>
                                    <input type="text" id="tin" name="tin" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email">PAN Card</label>
                                    <input type="file" id="pan_card" name="pan_card" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="resident">Proof of Address (In India)</label>
                                    <input type="file" id="proof_of_address_of_india" name="proof_of_address_of_india"
                                        class="iv-input form-control p-2">

                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="occupation">Proof of Address (Foreign Country)</label>
                                    <input type="file" id="proof_of_address_of_foreign"
                                        name="proof_of_address_of_foreign" class="iv-input form-control p-2">

                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="dob">Recent Passport size photograph</label>
                                    <input type="file" id="passport_size_photograph" name="passport_size_photograph"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="father_name">Copy of CML</label>
                                    <input type="file" id="copy_of_cml" name="copy_of_cml"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="father_name">Cancelled Cheque (NRO/NRE Account)</label>
                                    <input type="file" id="cancelled_cheque" name="cancelled_cheque"
                                        class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="father_name">TRC Copy</label>
                                    <input type="file" id="trc_copy" name="trc_copy" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="father_name">Form 10F</label>
                                    <input type="file" id="form_10f" name="form_10f" class="iv-input form-control p-2">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="father_name">No PE Declaration</label>
                                    <input type="file" id="no_pe_declaration" name="no_pe_declaration"
                                        class="iv-input form-control p-2">
                                </div>
                            </div>
                            <h5><i>"Please be advised that if additional documents or information are required, the
                                    Freeu team will promptly
                                    contact you for further assistance."</i></h5>
                            <button type="submit" id="nri_submit" class="next-button">Save and Continue</button>
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