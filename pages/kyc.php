<?php $currentPage = "kyc" ?>
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
                    <h2>Virtual Accounts</h2>
                    <p>View all your virtual accounts details from one place</p>
                </div>

                <div class="dropdown">
                    <button class="btn  dropdown-toggle add-acc" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="individual.php">Individual</a></li>
                        <li><a class="dropdown-item" href="huf.php">Huf</a></li>
                        <li><a class="dropdown-item" href="nri.php">NRI</a></li>
                        <li><a class="dropdown-item" href="company.php">Company</a></li>
                        <li><a class="dropdown-item" href="partnership.php">Patnership</a></li>
                        <li><a class="dropdown-item" href="others.php">Others</a></li>
                    </ul>
                </div>

                <!-- <div class="dropdown">
                    <button class="add-acc dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Add accounts
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" onclick="openPage('individual')">Individual</a>
                            <a class="dropdown-item" onclick="openPage('huf')">HUF</a>
                            <a class="dropdown-item" onclick="openPage('nri')">NRI</a>
                            <a class="dropdown-item" onclick="openPage('company')">Company</a>
                            <a class="dropdown-item" onclick="openPage('partnership')">Partnership</a>
                            <a class="dropdown-item" onclick="openPage('others')">Others</a>
                        </div>
                    </button>
                </div> -->
            </div>

            <div class="acc-content container">
                <div class="acc-grid">
                    <div class="container row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>