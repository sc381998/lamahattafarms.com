<?php
if (!defined('fileIncluded')) {
    exit();
}
?>
<div class="container margin_60">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="form_title">
                <h3><strong><i class="icon-pencil"></i></strong>Fill the form below</h3>
            </div>
            <div class="step">

                <div id="message-contact"></div>
                <form method="post" action="assets/contact.php" id="contactform">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo $chk->showCaptcha(); ?><br/>
                            <input type="submit" value="Submit" class="btn_1" id="submit-contact">
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End col-md-8 -->

        <div class="col-md-4 col-sm-4">
            <div class="box_style_1">
                <span class="tape"></span>
                <h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
                <p>
                    Lamahatta, Tukdah, <br/>Dist: Darjeeling, <br/> West Bengal, </br> India
                </p>
                <hr>
                <h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
                <ul id="contact-info">
                    <li><a href="mailto:lamahatafarms.com">info@lamahatafarms.com</a></li>
                </ul>
            </div>
            <div class="box_style_4">
                <i class="icon_set_1_icon-57"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel://+91-98009 31184" class="phone">+91-98009 31184</a>
                <small>Monday to Friday 9.00am - 7.30pm</small>
            </div>
        </div><!-- End col-md-4 -->
    </div><!-- End row -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.7571542931746!2d88.34512991436948!3d27.069412359844637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e425d7a7532751%3A0x36f7b38ec58ae279!2sLamahatta+Farms!5e0!3m2!1sen!2sin!4v1561809341019!5m2!1sen!2sin" style="border:0; height: 450px;position: inherit;" allowfullscreen></iframe>
</div>
</main>