<?php $currentPage = "investor-profile" ?>
<?php include '../component/header_link.php'; ?>
<?php include '../component/header.php'; ?>

<div>
    <div class="investor-profile">
        <div class="banner">
            <div class="container aos-init aos-animate" data-aos="fade-right">
                <div class="investor-image">
                    <img src="https://staging.freeu.in/public/assets/media/FrontendImages/investor-profile.png">
                </div>
            </div>
        </div>
        <div class="aos-init aos-animate" data-aos="zoom-in">
            <div class="container invest-form">
                <div class="ip-header container">
                    <h2 class="mb-0">Investor Profile</h2>
                    <a href="edit-profile.php"><i class="fa-solid fa-pen"></i> <span>Edit Profile</span></a>
                </div>
                <form>
                    <div class="row container form-sec">
                        <div class="iv-form col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value=" Shubham shettys" class="iv-input"
                                disabled="">
                        </div>
                        <div class="iv-form col-md-6 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value=" 9920682321" class="iv-input" disabled="">
                        </div>
                        <div class="iv-form col-md-6 mb-3">
                            <label for="email">Email Id</label>
                            <input type="text" id="email" name="email" value=" shubham@wdimails.com" class="iv-input"
                                disabled="">
                        </div>
                        <div class="iv-form col-md-12">
                            <label>Address</label><br>
                            <textarea disabled="">WDI Malad 3</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>