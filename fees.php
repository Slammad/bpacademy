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

    $feesq = "SELECT * FROM `fees`";
    $runfees = $conn->query($feesq);
    
?>


<?php include 'partials/top.inc.php' ?>

<div class="container">


    <div class="container spacet50 spaceb50">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h3><b>FEES REGIME OF THE SCHOOL</b></h3>
                <p>The fees to be charged in the school will be moderate but subject to review from time to time. Parent will always be informed os such reviews in good
                    time to allow room for appropriate planning.The school intend to charge the following fees:
                </p>
            </div>
           
           
            <div class="col-md-9">
                <table style="width:100%">
                    <tr>
                        <th>S/N</th>
                        <th>Item</th>
                        <th>Cost</th>
                        <th>Remark</th>
                    </tr>
                  
                       <?php while($fees = mysqli_fetch_assoc($runfees)){?>
                        <tr>
                        <td><?=$fees['id']?></td>
                        <td><?=$fees['item']?></td>
                        <td>₦ <?=$fees['cost']?></td>
                        <td><?=$fees['remark']?></td>
                        </tr>
                       <?php }?>
                    
                </table>
            </div>

        </div>
    </div>



</div>

<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>