<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    
?>


<?php include 'partials/top.inc.php';

?>


<div class="container">
<br>
	<div class="col-md-10 offset-md-2 well">
		<div class="row">
		<center><h3><b>APPLICATION FORM</b></h3></center><br>
			<form>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>FullName</label>
							<input type="text" placeholder="Enter Full Name Here.." class="form-control">
						</div>
						<div class="col-sm-6 form-group">
							<label>Date of Birth</label>
							<input type="Date" id="datepicker" class="form-control" placeholder="Choose">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Age by September</label>
							<input type="text" placeholder="Enter Age by September.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Gender</label>
							<select class="form-control">
								<option>Male</option>
								<option>Female</option>
								
							</select>
						</div>
						<div class="col-sm-4 form-group">
							<label>State</label>
							<input type="text" placeholder="State" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Tribe</label>
							<input type="text" placeholder="Tribe.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Religion</label>
							<input type="text" placeholder="Enter Religion.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Class of Admission</label>
							<input type="text" placeholder="Class of Admission.." class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label>Previous School</label>
						<textarea placeholder="Previous School.." rows="3" class="form-control"></textarea>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Father Name</label>
							<input type="text" placeholder="Enter Father Name.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Father Occupation</label>
							<input type="text" placeholder="Enter Father Occupation.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Father Address</label>
							<input type="text" placeholder="Enter Father Address.." class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Father Phone</label>
							<input type="text" placeholder="Father Phone.." class="form-control">
						</div>

					</div>


					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Mother Name</label>
							<input type="text" placeholder="Enter Mothers Name.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Mother Occupation</label>
							<input type="text" placeholder="Enter Mothers Occupation.." class="form-control">
						</div>
						<div class="col-sm-4 form-group">
							<label>Mother Address</label>
							<input type="text" placeholder="Enter Mothers Address.." class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Mother Phone</label>
							<input type="text" placeholder="Enter Mothers Phone" class="form-control">
						</div>

					</div>
					<div class="form-group">
						<label>Health Challenges</label>
						<textarea placeholder="If any kindly state.." rows="3" class="form-control"></textarea>
					</div>
					<center><button type="button" class="btn btn-danger">Preview & Submit</button></center>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$(function () {
		$("#datepicker").datepicker({
			dateFormat: 'mm/dd/yy',
			changeMonth: true,
			changeYear: true,
			yearRange: '-100y:c+nn',
			maxDate: '-1d'
		});
	});

</script>
<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>