
        <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3 class="fo-title">Links</h3>
                <ul class="f1-list">
                <li class="active ">
                            <a href="index.php">Home</a>
                        </li>


                        <li class="active">
                            <a href="gallery.php">Gallery</a>
                        </li>


                        <li class="">
                            <a href="admissions.php">Admissions</a>
                        </li>

                        <li class="">
                            <a href="fees.php">Fees</a>
                        </li>

                      
                        
                        <li class="">
                            <a href="events.php">Events</a>
                        </li>

                        <li class="">
                            <a href="news.php">News</a>
                        </li>

                        <li class="">
                            <a href="contactus.php">Contact Us</a>
                        </li>
                </ul>
            </div><!--./col-md-3-->

            <div class="col-md-4 col-sm-6">
                <h3 class="fo-title">Follow Us</h3>
                <ul class="social">                
                     <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/login?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://plus.google.com/people" target="_blank"><i class="fab fa-google"></i></a></li>
                    
                </ul>
            </div><!--./col-md-3-->
            <div class="col-md-4 col-sm-6">
                <h3 class="fo-title">Contact</h3>
                <ul class="co-list">
                    <li><i class="fa fa-envelope"></i>
                        <a href="mailto:<?=$settings['school_mail']?>"><?=$settings['school_mail']?></a></li>
                    <li><i class="fa fa-phone"></i><?=$settings['school_phone']?>,<?=$settings['tell2']?></li>
                    <li><i class="fa fa-map-marker"></i><?=$settings['school_address']?></li>
                </ul>
            </div><!--./col-md-3-->
            <div class="col-md-3 col-sm-6">
                <a class="twitter-timeline" data-tweet-limit="1" href="#"></a>
            </div><!--./col-md-3-->   
        </div><!--./row-->
    </div><!--./container-->

    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <p>© School 2018 All rights reserved</p>
                </div>
            </div><!--./row-->
        </div><!--./container-->
    </div><!--./copy-right-->
</footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/ss-lightbox.js"></script>
        <script src="assets/js/custom.js"></script>
</body>
</html>