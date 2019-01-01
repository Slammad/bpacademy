<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    $nid = (int) trim($_GET['nid']);

    $newsq = "SELECT * FROM `news` WHERE `id`='$nid'";
    $runnews = $conn->query($newsq);
    $news=mysqli_fetch_assoc($runnews);

    
?>


<?php include 'partials/top.inc.php' ?>

<script src="assets/js/moment.js" type="text/javascript"></script>
<div class="container">
<div class="well"> 
        <div class="row">
             <div class="col-md-12">
                 <div class="row hidden-md hidden-lg"><h1 class="text-center" >TITULO LARGO DE UNA INVESTIGACION cualquiera</h1></div>
                     
                 <div class="col-md-4 col-xs-12 thumb-contenido"><i class="fas fa-newspaper" style="font-size:200px;"></i></div><br><br><br><br><br><br><br><br><br><br><br><br><br>
                 <div class="">
                     <h1  class="hidden-xs hidden-sm"><?=strtoupper($news['title'])?></h1>
                     <hr>
                     <small><script>document.write(moment('<?=$news['date']?>').format("MMM Do YY")); </script></small><br>
                     <small><strong>Admin</strong></small>
                     <hr>
                     <p class="text-justify"><?=$news['content']?></p></div>
             </div>
        </div>
    </div>
</div>

<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>