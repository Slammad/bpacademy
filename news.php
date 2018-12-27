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
<div class="container">
    <div class="row">
    <?php while($news=mysqli_fetch_assoc($runnews)){?>
        <br>
        <div class="col-md-9 offset-md-1">
          
            <div class="well">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><b><?=strtoUpper($news['title'])?></b></h4>
                        <p><?= $news['content']?></p>
                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-calendar"></i> <script>document.write(moment('<?=$news['date']?>').format("MMM Do YY")); </script></span></li>
                            <li class="pull-right">Read More</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>

<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>