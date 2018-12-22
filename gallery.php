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



<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>