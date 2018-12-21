<?php
include 'includes/head.inc.php';
include 'partials/top.inc.php';
?>


<div class="container spacet50 spaceb50">
    <div class="row">
        <div class="col-md-12">
            <section class="contact">
                <div class="container">
                    <div class="row">
                        <h2 class="col-md-12 col-sm-12">Contact Us</h2>

                        <p>&nbsp;</p>

                        <div class="col-md-12 col-sm-12">
                            <form action="https://demo1.smart-school.in/page/contact-us" id="open" class="form-horizontal col-sm-12"
                                autocomplete="on" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <input type='hidden' value='contact_us' name='form_name' /> <input type="hidden" name="email_title"
                                    value="New Inquiry from Contact US" />
                                <div class="form-group"><label for="name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-9"><input type="text" name="name" value="" id="name" placeholder="Enter your name"
                                            validation="trim|required|xss_clean" class="form-control" /> </div>
                                </div>
                                <div class="form-group"><label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-9"><input type="email" name="email" value="" id="email"
                                            placeholder="Enter your email" validation="trim|required|valid_email|xss_clean"
                                            class="form-control" /> </div>
                                </div>
                                <div class="form-group"><label for="subject" class="col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-9"><input type="text" name="subject" value="" id="subject"
                                            placeholder="Enter subject" validation="trim|required|xss_clean" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group"><label for="description" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-9"><textarea name="description" cols="40" rows="10" id="description"
                                            placeholder="Enter Description" class="form-control"></textarea> </div>
                                </div>
                                <div class="form-group"><label for="submit" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-9"><input type="submit" name="submit" value="Submit" class="btn btn-primary"
                                            name="submit" value="" /> </div>
                                </div>
                            </form>
                            <!--./row-->
                        </div>
                        <!--./col-md-12-->
                    </div>
                    <!--./row-->
                </div>
                <!--./container-->
            </section>

            <div class="col-md-4 col-sm-4">
                <div class="contact-item">
                    <h3>Our Location</h3>

                    <p>350 Fifth Avenue, 34th floor New York NY 10118-3299 USA</p>
                </div>
                <!--./contact-item-->
            </div>
            <!--./col-md-4-->

            <div class="col-md-4 col-sm-4">
                <div class="contact-item">
                    <h3>CALL US</h3>

                    <p>E-mail : info@abcschool.com</p>

                    <p>Mobile : +91-9009987654</p>
                </div>
                <!--./contact-item-->
            </div>
            <!--./col-md-4-->

            <div class="col-md-4 col-sm-4">
                <div class="contact-item">
                    <h3>Working Hours</h3>

                    <p>Mon-Fri : 9 am to 5 pm</p>

                    <p>Sat : 9 am to 3 pm</p>
                </div>
                <!--./contact-item-->
            </div>
            <!--./col-md-4-->

            </div>

    </div>
    <!--./row-->
</div>

<?php
    include 'includes/footer.inc.php';
?>