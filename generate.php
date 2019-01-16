<?php
require('core/init.php');

$settingsq = "SELECT * FROM `settings` WHERE `id`=1";
$runsettings = $conn->query($settingsq);
$settings = mysqli_fetch_assoc($runsettings);

$candidate = $_GET['candidate'];
$dob = $_GET['dob'];
$address = $_GET['address'];
$tribe = $_GET['tribe'];
$age = $_GET['age'];

if($candidate == ''){
    echo "<script>window.location.href ='form.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acknowledgement Slip</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    
</head>
<style>
.text-danger strong {
    		color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
</style>
<body>
    
<div class="container">
	<div class="row">
		
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="receipt-left">
                        <img src="assets/images/logo.jpg" style="height:80px;" alt="">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
							<h5></h5>
							<p><?=$settings['school_phone']?>,<?=$settings['tell2']?> <i class="fas fa-phone"></i></p>
							<p><b><?=$settings['school_mail']?><i class="fas fa-envelope"></i></b></p>
							<p><?=$settings['school_address']?></p>
							<p> <?php echo date("F j, Y, g:i a")?> </p><br><br>
						</div>
					</div>
				</div>
            </div>
			<hr>
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5><?=$candidate?></h5>
                            <p><b></b> <?=$address?></p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						
					</div>
				</div>
            </div>
            <center><h3 style="font-family:tahoma;"><b>ACKNOWLEDGEMENT</b></h2></center>
            <p>Your application is hereby acknowledged and is receiving due attention. The list of candidates shortlisted for further screening will be released online in June 2019 via our website: <i style="color:brown;">www.beginnersprideacademy.com.</i><br><br>Thank you for showing interest in our school. </span></p>
          
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							
							<p><b>Management</b></p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<img src="assets/images/qrcode.png" alt="" style="height:90px;">
						</div>
					</div>
				</div>
            </div>
			
        </div>    
	</div>
</div>
</body>
</html>