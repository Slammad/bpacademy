<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    
?>


<?php include 'partials/top.inc.php' ?>
<br><br><br>
<div class="error">
        <div class="error-code m-b-10 m-t-20">503 <i class="fa fa-warning"></i></div>
        <h3 class="font-bold">Oops Page Under Construction.</h3>

        <div class="error-desc">
            Sorry, but the page you are looking for is under construction. <br/>
            Try checking back later thank you.
            <div>
                <a class=" login-detail-panel-button btn" href="http://www.beginnersprideacademy.com/">
                        <i class="fa fa-arrow-left"></i>
                        Go back to Homepage                        
                    </a>
            </div>
        </div>
    </div>
    <br><br><br>
<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>