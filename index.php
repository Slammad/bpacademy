<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    $newsq = "SELECT * FROM `news`";
    $runnews = $conn->query($newsq);


    $contentsq = "SELECT * FROM `contents` WHERE `id`='1'";
    $runcontent = $conn->query($contentsq);
    $content = mysqli_fetch_assoc($runcontent);
    
?>


<?php include 'partials/top.inc.php' ?>

<script src="assets/js/moment.js" type="text/javascript"></script>
<div class="container pt10">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/images/caro.jpg" alt="" />
                        <div class="carousel-caption">
                            <h4><a href="#">BEGINNERS PRIDE ACADEMY</a></h4>
                            <p>Discipline, Diligence & Success</p>
                        </div>
                    </div>

                </div>
                <!--./carousel-inner-->
                <a class="left carousel-control" href="#bootstrap-touch-slider" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!-- Right Control-->
                <a class="right carousel-control" href="#bootstrap-touch-slider" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--./bootstrap-touch-slider-->
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="sidebar newsmain">
                <div class="catetab">Latest News</div>
                <div class="newscontent">
                    <div class="tickercontainer">
                        <div class="mask">
                            <ul id="ticker01" class="newsticker" style="height: 666px; top: 124.54px;">
                                <?php 
                                    while($news = mysqli_fetch_assoc($runnews)){ 
                                    ?>
                                <li><a href="">
                                       
                                        <div class="date"> <script>document.write(moment('<?=$news['date']?>').format("MMM Do YY")); </script></div>
                                        <?= strtoUpper($news['title'])?>
                                    </a>
                                    <a href="singlenews.php?nid=<?=$news['id']?>" style="color:red;">Read More ........</a>
                                </li>

                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--./newscontent-->
            </div>
            <!--./sidebar-->
        </div>
        <!--./col-md-12-->
    </div>
</div>

<br><br>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
    <?php
        $gquery = "SELECT * FROM `gallery`";
        $getgallery = $conn->query($gquery);
        while($gallery = mysqli_fetch_assoc($getgallery)){
    
    ?>
        <div>
            <img data-u="image" src="http://beginnersprideacademy.com<?=$gallery['image_path']?>" />
        </div>
        <?php } ?>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
        data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5000"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2"
        data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2"
        data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
        </svg>
    </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<br><br>

<div class="container">


    <div class="row mbr-justify-content-center">



        <div class="col-lg-6 mbr-col-md-10">
            <div class="wrap">
                <div class="ico-wrap">
                    <span class="mbr-iconfont fa-trophy fa"></span>
                </div>
                <div class="text-wrap vcenter">

                    <p class="mbr-fonts-style text1 mbr-text display-6">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><strong>VISION</strong></h2>
                        <?=$content['vision']?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mbr-col-md-10">
            <div class="wrap">
                <div class="ico-wrap">
                    <span class="mbr-iconfont fa-chalkboard-teacher fa"></span>
                </div>
                <div class="text-wrap vcenter">

                    <p class="mbr-fonts-style text1 mbr-text display-6">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">MISSION</h2>
                        <?=$content['mission']?>
                    </p>
                </div>
            </div>
        </div>



    </div>

</div>




<div class="container spacet50 spaceb50">
    <div class="row">
        <div class="col-md-9 col-sm-9">
        <?=$content['about']?>
        </div>

        <div class="col-md-3 col-sm-3">
            <div class="sidebar">
                <div class="catetab">Upcoming Events</div>
                <div class="newscontent">
                    <div class="tickercontainer">
                        <div class="mask">
                            <ul id="ticker01" class="newsticker" style="height: 666px; top: 124.54px;">
                            
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!--./newscontent-->






            </div>
            <!--./sidebar-->
        </div>


    </div>
    <!--./row-->
</div>
<!--./container-->
<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>