<?php $currentPage = "dashboard" ?>
<?php include '../component/header_link.php'; ?>
<?php include '../component/header.php'; ?>

<div>
    <div class="dashboard">

        <div class="heading">
            <div>
                <h1>Shubham shettys</h1>
                <p>Check your Investments and Secondary <br> Market Interactions</p>
            </div>
            <div>
                <img src="https://staging.freeu.in/public/assets/media/FrontendImages/13282.png" alt="">
            </div>
        </div>

        <div class="form-tab  dashboard-form">
            <ul id="dashboard-tab" class="nav nav-pills nav-justified d-flex  mb-2" role="tablist" data-tabs="tabs">
                <li class="active">
                    <a class="active" id="user-tab" data-bs-toggle="tab" data-bs-target="#nav-invest" type="button"
                        role="tab" aria-controls="nav-invest" aria-selected="true">
                        User Dashboard
                    </a>
                </li>
                <li>
                    <a class="" id="market-tab" data-bs-toggle="tab" data-bs-target="#nav-email" type="button"
                        role="tab" aria-controls="nav-email" aria-selected="false" tabindex="-1">
                        Marketplace Dashboard
                    </a>
                </li>
            </ul>
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="nav-invest" role="tabpanel" aria-labelledby="user-tab">
                        <div class="personal-details">
                            <h3>Personal Details</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="details">
                                        <i class="fa-solid fa-circle-user"></i>
                                        <p>Shubham shettys</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="details">
                                        <i class="fa-solid fa-envelope"></i>
                                        <p>shubham@wdimails.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="details">
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <p>9920682321</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="details">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>WDI Malad</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="invest-card">
                                    <p class="title">Total Investments Till Date</p>
                                    <p>₹ 5,00,246.01</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="invest-card">
                                    <p class="title">Active Investments</p>
                                    <p>₹ 5,00,246.01</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="invest-card">
                                    <p class="title">Investments Redeemed</p>
                                    <p>₹ 0</p>
                                </div>
                            </div>
                        </div>
                        <h4 class="table-heading mb-3">Current Investments</h4>

                        <table id="current-investment" class="display custom-table w-100">
                            <thead>
                                <tr>
                                    <th>Compnay</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Date of Investment</th>
                                    <th>Investment Amount</th>
                                    <th>Current Amount</th>
                                    <th>Latest Monthly Update</th>
                                    <th>List on Market Place</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dummy</td>
                                    <td>HDFC AMC Select AIF FOF – I</td>
                                    <td>Alternative Investment Fund</td>
                                    <td>25/09/23</td>
                                    <td>₹ 77</td>
                                    <td>Dummy</td>
                                    <td><a href="investment-details.php">View</a></td>
                                    <td><a href="market-list.php">List Investment</a></td>
                                    <!-- Add more rows as needed -->
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="table-heading mt-3">Investment Redeemed</h4>

                        <table id="investment-redeemed" class="display custom-table w-100">
                            <thead>
                                <tr>
                                    <th>Compnay</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Date of Investment</th>
                                    <th>Investment Amount</th>
                                    <th>Action</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>lorem</td>

                                    <!-- Add more rows as needed -->
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="nav-email" role="tabpanel" aria-labelledby="market-tab">
                        <ul id="market-block" class="nav nav-pills nav-justified d-flex  mb-2" role="tablist"
                            data-tabs="tabs">
                            <li class="active">
                                <a class="active" id="bought-tab" data-bs-toggle="tab" data-bs-target="#nav-bought"
                                    type="button" role="tab" aria-controls="nav-bought" aria-selected="true">
                                    Investment Bought
                                </a>
                            </li>
                            <li>
                                <a class="" id="watchlist-tab" data-bs-toggle="tab" data-bs-target="#nav-watchlist"
                                    type="button" role="tab" aria-controls="nav-watchlist" aria-selected="false"
                                    tabindex="-1">
                                    Investment Watchlist
                                </a>
                            </li>
                            <li>
                                <a class="" id="watchlist-tab" data-bs-toggle="tab" data-bs-target="#nav-sale"
                                    type="button" role="tab" aria-controls="nav-sale" aria-selected="false"
                                    tabindex="-1">
                                    Investment On Sale
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="nav-bought" role="tabpanel"
                                aria-labelledby="bought-tab">
                                <table id="investment-bought" class="display custom-table w-100">
                                    <thead>
                                        <tr>
                                            <th>Name of the AIF Fund</th>
                                            <th>Fund Category</th>
                                            <th>Type of Fund</th>
                                            <th>Fund Strategy</th>
                                            <th>Total Capital Commitment </th>
                                            <th>Uncalled Capital Commitment</th>
                                            <!-- Add more columns as needed -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>

                                            <!-- Add more rows as needed -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-watchlist" role="tabpanel"
                                aria-labelledby="watchlist-tab">
                                <table id="investment-watchlist" class="display custom-table w-100">
                                    <thead>
                                        <tr>
                                            <th>Property Name</th>
                                            <th>Property Address</th>
                                            <th>Property Grade</th>
                                            <th>Asset type</th>
                                            <th>Fractional Real Estate Platform</th>
                                            <th>Expected Selling Price</th>
                                            <!-- Add more columns as needed -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>

                                            <!-- Add more rows as needed -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-sale" role="tabpanel" aria-labelledby="watchlist-tab">
                                <table id="investment-sale" class="display custom-table w-100">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Date of Investment</th>
                                            <th>Investment Amount</th>
                                            <th>Action</th>
                                            <!-- Add more columns as needed -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>
                                            <td>lorem</td>

                                            <!-- Add more rows as needed -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="Latest_news">
            <div class="container">
                <h2 class="news-txt aos-init aos-animate" data-aos="fade-down">Latest News &amp; Insights</h2>
                <div class="row">
                    <div class="col-md-4 insights">
                        <div class="insight-card" style="background:white">
                            <img src="https://staging.freeu.in/public/uploads/blog/images/1695384619.png">
                            <h2>Govt to sell 4.92% in SJVN at Rs 69/share; OFS beg...</h2>
                            <span class="h-100">
                                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                September 21st, 2023
                            </span>
                            <p>The government will sell a 4.92% <strong>stake</strong> in <strong>SJVN at a floor price
                                </strong>of Rs
                                69 per <strong>share through a two-day offer for sale</strong>, an official said. 'Offer
                                for...</p>
                            <!--<div>-->
                            <a
                                href="https://staging.freeu.in/blog/govt-to-sell-4-92-in-sjvn-at-rs-69-share-ofs-begins-on-thursday-2">Read
                                More</a>
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-4 insights">
                        <div class="insight-card" style="background:white">
                            <img src="https://staging.freeu.in/public/uploads/blog/images/1695292931.png">
                            <h2>Shell pivots to strategic review of Sprng Energy i...</h2>
                            <span class="h-100">
                                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                September 21st, 2023
                            </span>
                            <p>On July 13 , 2023, Bloomberg first reported that Shell was exploring options for its
                                global renewable
                                power operations, including a potential stake sale to international investors.
                                Nearly a year and a...</p>
                            <!--<div>-->
                            <a
                                href="https://staging.freeu.in/blog/shell-pivots-to-strategic-review-of-sprng-energy-in-india-post-1-5-billion-buyout">Read
                                More</a>
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-4 insights">
                        <div class="insight-card" style="background:white">
                            <img src="https://staging.freeu.in/public/uploads/blog/images/1695292973.png">
                            <h2>Ola Electric recorded an operating loss of $136 mi...</h2>
                            <span class="h-100">
                                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                September 21st, 2023
                            </span>
                            <p>Ola Electric recorded an operating loss of $136 million on revenue of $335 million in the
                                fiscal year
                                ending March 2023, Reuters has reported.
                                REUTERS SEPTEMBER 20, 2023 / 04:27 PM IST
                                Ola Electric...</p>
                            <!--<div>-->
                            <a
                                href="https://staging.freeu.in/blog/ola-electric-recorded-an-operating-loss-of-136-million-on-revenue-of-335-million-in-the-fiscal-year-ending-march-2023-reuters-has-reported-reuters-september-20-2023-04-27-pm-ist-ola-electric-is-targeting-ipo-roadshows-for-early-january-or-february">Read
                                More</a>
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>



    <script>
        $(document).ready(function () {
            $('#current-investment').DataTable(); // Replace 'example' with the ID of your table
            $('#investment-redeemed').DataTable(); // Replace 'example' with the ID of your table
            $('#investment-bought').DataTable(); // Replace 'example' with the ID of your table
            $('#investment-watchlist').DataTable(); // Replace 'example' with the ID of your table
            $('#investment-sale').DataTable(); // Replace 'example' with the ID of your table

        });
    </script>



<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>