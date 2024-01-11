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
            <div class="container">
                <form id="aif-seller-form" method="POST" novalidate="novalidate">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name of the AIF Fund</label>
                            <input type="text" name="name_of_the_aif_fund" value="HDFC AMC Select AIF FOF – I"
                                class="valid" aria-invalid="false">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fund Category</label>
                            <select name="fund_category" id="">
                                <option value="">Select Fund Category</option>
                                <option value="Category I">Category I</option>
                                <option value="Category II">Category II</option>
                                <option value="Category III">Category III</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fund Structure</label>
                            <select name="fund_structure" id="">
                                <option value="Closed">Closed</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Type Of Fund</label>
                            <select name="type_of_fund" id="">
                                <option value="">Select Type Of Fund</option>
                                <option value="Angel Fund">Angel Fund</option>
                                <option value="Venture Capital Fund">Venture Capital Fund</option>
                                <option value="Infrastructure Fund">Infrastructure Fund</option>
                                <option value="Real Estate Fund">Real Estate Fund</option>
                                <option value="Private Equity Fund">Private Equity Fund</option>
                                <option value="Distressed Asset Fund">Distressed Asset Fund</option>
                                <option value="Debt Fund">Debt Fund</option>
                                <option value="Hedge Fund">Hedge Fund</option>
                                <option value="PIPE Fund">PIPE Fund</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fund Strategy</label>
                            <input type="text" name="fund_strategy" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fund Manager Name</label>
                            <input type="text" name="fund_manager_name" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sponsor</label>
                            <input type="text" name="sponsor" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Credit Rating (if any)</label>
                            <input type="text" name="credit_rating" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Total Capital Commitment</label>
                            <input type="number" name="total_capital_commitment" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Uncalled Capital Commitment</label>
                            <input type="number" name="uncalled_capital_commitment" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Date Of Final Close</label>
                            <input type="date" name="date_of_final_close" value="" class="valid" aria-invalid="false">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tenure from Final Close</label>
                            <input type="number" name="tenure_from_final_close" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Current Nav/Latest Nav</label>
                            <input type="number" name="current_or_latest_nav" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>No. Of Units Held</label>
                            <input type="number" name="no_of_units_held" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>No. Of Units You Wish To Sell</label>
                            <input type="number" name="no_of_units_you_wish_to_sell">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Expected Sale Price per unit</label>
                            <input type="number" name="expected_sale_per_unit">
                        </div>
                        <div class="text-center form-group col-md-12">
                            <button type="submit" class="blue-btn text-center">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>