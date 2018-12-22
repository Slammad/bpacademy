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




<div class="container spacet50 spaceb50">
            <div class="row"> 
                                <div class="col-md-12">
                    <title></title>
<h2>Gallery</h2><!-- <h2 class="courses-head text-center">Gallery</h2> -->
<input type="hidden" name="page_content_type" id="page_content_type" value="gallery">
<div class="post-list" id="postList">
            

                            <div class="row">
                      
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/bhajan-sandhya-good">
                                                                        <img src="https://demo1.smart-school.in/uploads/gallery/gallery_default.png" alt="" title="">
                                    <div class="around20">
                                        <h3>bhajan sandhya good</h3>
                                        Fusce semper, nibh eu sollicitudin imperdiet, dolo                                    </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                          
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/art">
                                                                        <img src="https://demo1.smart-school.in/uploads/gallery/gallery_default.png" alt="" title="">
                                    <div class="around20">
                                        <h3>Art</h3>
                                        Fusce semper, nibh eu sollicitudin imperdiet, dolo                                    </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                          
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/pre-primary">
                                                                        <img src="https://demo1.smart-school.in/uploads/gallery/gallery_default.png" alt="" title="">
                                    <div class="around20">
                                        <h3>Pre Primary</h3>
                                        Fusce semper, nibh eu sollicitudin imperdiet, dolo                                    </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                        </div><div class="row">  
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/ncc-bands">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal34.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>NCC & Bands</h3>
                                        Fusce semper, nibh eu sollicitudin imperdiet, dolo                                    </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                          
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/recreation-centre">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal26.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>Recreation Centre</h3>
                                                                            </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                          
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/facilities">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal21.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>Facilities</h3>
                                                                            </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                        </div><div class="row">  
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/activities">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal25.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>Activities</h3>
                                                                            </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                          
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/sports">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal7.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>Sports</h3>
                                                                            </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                          
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/celebration">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal34.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>Celebration</h3>
                                                                            </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                        </div><div class="row">  
                        <div class="col-md-4 col-sm-4">
                            <div class="eventbox">
                                <a href="https://demo1.smart-school.in/read/campus">
                                                                        <img src="http://192.168.1.81/ss4demo16/uploads/gallery/media/gal4.jpg" alt="" title="">
                                    <div class="around20">
                                        <h3>Campus</h3>
                                                                            </div><!--./around20-->
                                </a> 
                            </div><!--./eventbox-->
                        </div>
                                        </div>

                Showing : 10</div>


<script>
    function searchFilter(page_num) {
        page_num = page_num ? page_num : 0;
        var page_content_type = $('#page_content_type').val();

        $.ajax({
            type: 'POST',
            url: 'https://demo1.smart-school.in/frontend/welcome/ajaxPaginationData/' + page_num,
            data: 'page=' + page_num + '&page_content_type=' + page_content_type,
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (html) {
                $('#postList').html(html);
                $('.loading').fadeOut("slow");
            }
        });
    }
</script> 
                </div>  
                

            </div><!--./row-->
        </div><!--./container-->  
<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>