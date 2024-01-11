<?php $currentPage = "index" ?>
<?php include '../component/header_link.php'; ?>
<?php include '../component/header.php'; ?>

<div>
    <div class="banner portfolio secure">
        <div class="container aos-init aos-animate" data-aos="fade-left">
            <div class="investor-image">
                <img src="https://staging.freeu.in/public/assets/media/FrontendImages/security.png">
            </div>
        </div>
    </div>
</div>

<div class="security-form container aos-init aos-animate" data-aos="fade-right">
    <h2>Security</h2>

    <div class="security-text container">
        <h4>Update Password</h4>
        <p>Update your password and secure your account</p>
    </div>
    <form class="container" id="changePasswordForm" novalidate="novalidate">
        <input type="hidden" name="_token" value="ymFetBkRrvvJl4UkarQUcpe2nyTIJVBk2YCfcgcM">        <input type="hidden" name="_method" value="PATCH">        <div>
            <label for="password">Current Password</label><br>
            <input style=" margin-bottom: 2px;" type="password" id="password" name="password" class="pwd-input" placeholder="Enter password">
        </div>
        <!-- <i class="far fa-eye-slash" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> -->

        <div style=" margin-top: 10px;">
            <label for="newPassword">New Password</label><br>
            <input style=" margin-bottom: 2px;" type="password" id="newPassword" name="newPassword" class="pwd-input" placeholder="Enter New password">
        </div>
        <!-- <i class="far fa-eye-slash" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> -->

        <div style=" margin-top: 10px;">
            <label for="newPassword_confirmation">Confirm Password</label><br>
            <input style=" margin-bottom: 2px;" type="password" id="newPassword_confirmation" name="newPassword_confirmation" class="pwd-input" placeholder="Enter Confirm password">
        </div>
        <!-- <i class="far fa-eye-slash" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> -->
        <button style=" margin-top: 20px;" class="u-pwd" type="submit">Update Password</button>
        
    </form>
</div>

<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>