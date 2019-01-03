<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    
?>


<?php include 'partials/top.inc.php';

?>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        <h3><b>TAKE OFF PLAN</b></h3>
        
        <p>The school plans to commence full academic activities by September 2019. Meanwhile, you are invited to visit the school to see the facilities put in place to give children the best of what education can provide. A visit to the school will surely convince you</p>
        <h3><b>APPLICATION PROCEDURE</b></h3>
        <ul>
            <li>Obtain application forms from the school or <a href="form.php" style="color:red;">Apply Online. </a></li>
            <li>Fill and return forms with all necessary documents. </li>
           
        </ul>
        </div>
    </div>
</div>

<p></p>

<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>