<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    
?>


<?php include 'partials/top.inc.php';
    include 'partials/const.php' 
?>



<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>