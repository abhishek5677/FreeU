<?php $currentPage = "index" ?>
<?php include '../component/header_link.php'; ?>
<?php include '../component/header.php'; ?>

<div>
    <div class="chat-sec">
        <div class="chat-box container">
            <h2>Customer Support</h2>
            <div class="row chat-content">
                <div class="col-md-12 user-chat chat-msgs aos-init aos-animate" data-aos="fade-right"
                    style="height:32rem; overflow:auto">
                    <div class="" style="min-height:auto">
                        <div class="sent container mb-4">
                            <div class="sentchat-icon">
                                <div class="contact-details">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">
                                </div>
                            </div>
                            <div class="sent-chat">
                                <p>Hi shubham</p>
                                <div class="sent-time">
                                    <span>27/09/2023 23:53:24</span>
                                </div>
                            </div>
                        </div>
                        <div class="send-right">
                            <div class="receive">
                                <p>Hi Admin</p>
                                <span style="float:right; font-weight: bold; font-size: 10px; text-align: center;">27/09/2023
                                    23:53:35</span>
                            </div>
                        </div>
                        <div class="send-right">
                            <div class="receive">
                                <p>Hi Admin</p>
                                <span style="float:right; font-weight: bold; font-size: 10px; text-align: center;">27/09/2023
                                    23:53:35</span>
                            </div>
                        </div>
                        <div class="sent container mb-4">
                            <div class="sentchat-icon">
                                <div class="contact-details">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">
                                </div>
                            </div>
                            <div class="sent-chat">
                                <p>Hi shubham</p>
                                <div class="sent-time">
                                    <span>27/09/2023 23:53:24</span>
                                </div>
                            </div>
                        </div>
                        <div class="send-right">
                            <div class="receive">
                                <p>Hi Admin</p>
                                <span style="float:right; font-weight: bold; font-size: 10px; text-align: center;">27/09/2023
                                    23:53:35</span>
                            </div>
                        </div>
                        <div class="sent container mb-4">
                            <div class="sentchat-icon">
                                <div class="contact-details">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">
                                </div>
                            </div>
                            <div class="sent-chat">
                                <p>Hi shubham</p>
                                <div class="sent-time">
                                    <span>27/09/2023 23:53:24</span>
                                </div>
                            </div>
                        </div>
                        <div class="send-right">
                            <div class="receive">
                                <p>Hi Admin</p>
                                <span style="float:right; font-weight: bold; font-size: 10px; text-align: center;">27/09/2023
                                    23:53:35</span>
                            </div>
                        </div>
                        <div class="sent container mb-4">
                            <div class="sentchat-icon">
                                <div class="contact-details">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">
                                </div>
                            </div>
                            <div class="sent-chat">
                                <p>Hi shubham</p>
                                <div class="sent-time">
                                    <span>27/09/2023 23:53:24</span>
                                </div>
                            </div>
                        </div>
                        <div class="send-right">
                            <div class="receive">
                                <p>Hi Admin</p>
                                <span style="float:right; font-weight: bold; font-size: 10px; text-align: center;">27/09/2023
                                    23:53:35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="send-msg">
                    <form id="form1" enctype="multipart/form-data" method="POST">
                        <div class="input-group w-100 m-auto" id="text-group">
                            <input type="text" class="form-control w-50" name="message" id="message"
                                aria-label="Text input with dropdown button">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Attach
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" id="changeToFile" href="javascript:void(0)">File</a>
                                </div>
                            </div>
                            <button type="submit" id="chat-send">Send</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../component/footer.php'; ?>
<?php include '../component/footer_link.php'; ?>