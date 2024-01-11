<?php $currentPage = "edit-profile" ?>
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
                </div>
                <form>
                    <div class="row container form-sec">
                        <div class="iv-form col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value=" Shubham shettys" class="iv-input"
                                >
                        </div>
                        <div class="iv-form col-md-6 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value=" 9920682321" class="iv-input" >
                        </div>
                        <div class="iv-form col-md-6 mb-3">
                            <label for="email">Email Id</label>
                            <input type="text" id="email" name="email" value=" shubham@wdimails.com" class="iv-input"
                                >
                        </div>
                        <div class="iv-form col-md-6 mb-3">
                            <label for="email">Profile Picture</label>
                            <input style="padding:5px;" type="file" id="profile_image" accept="image/*" name="profile_image" class="iv-input bg-white">
                        </div>
                        <div class="iv-form col-md-12 mb-4">
                            <label>Address</label><br>
                            <textarea >WDI Malad 3</textarea>
                        </div>
                        <div class="iv-form col-md-6 mb-3">
                            <button class="save" id="submit-btn" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>