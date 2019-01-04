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
			<form action="generate.php" method="POST">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>FullName</label>
							<input type="text" placeholder="Enter Full Name Here.." name="fullname" value="<?=$fullname?>" class="form-control">
							<span class="error"><?= $fullname_error ?></span>
						</div>
						<div class="col-sm-6 form-group">
							<label>Date of Birth</label>
							<input type="Date" id="datepicker" class="form-control" name="dob" value="<?=$dob?>" placeholder="Choose">
							<span class="error"><?= $dob_error ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Age by September</label>
							<input type="text" placeholder="Enter Age by September.." name="age" value="<?=$age?>" class="form-control">
							<span class="error"><?= $age_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>Gender</label>
							<select class="form-control" name="gender">
								<option value="">Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
							</select>
							<span class="error"><?= $gender_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>State</label>
							<input type="text" placeholder="State" name="state" value="<?=$state?>" class="form-control">
							<span class="error"><?=$state_error ?></span>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Tribe</label>
							<input type="text" placeholder="Tribe.." value="<?=$tribe?>" name="tribe" class="form-control">
							<span class="error"><?=$tribe_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
						<label>Religion</label>
							<select class="form-control" name="religion">
								<option value="">Select Religion</option>
								<option value="Islam">Islam</option>
								<option value="Christianity">Christianity</option>
								<option value="Others">Others</option>	
							</select>
							<span class="error"><?= $religion_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>Class of Admission</label>
							<input type="text" placeholder="Class of Admission.." value="<?=$class?>" name="class" class="form-control">
							<span class="error"><?= $class_error ?></span>
						</div>
					</div>

					<div class="form-group">
						<label>Previous School</label>
						<textarea placeholder="Previous School.." rows="3" name="pschool" value="<?=$pschool?>" class="form-control"></textarea>
						<span class="error"><?= $pschool_error ?></span>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Father Name</label>
							<input type="text" placeholder="Enter Father Name.." name="father" value="<?=$father?>" class="form-control">
							<span class="error"><?= $father_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>Father Occupation</label>
							<input type="text" placeholder="Enter Father Occupation.." name="father_occ" value="<?=$father_occ?>" class="form-control">
							<span class="error"><?= $father_occ_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>Father Address</label>
							<input type="text" placeholder="Enter Father Address.." name="father_addr" value="<?=$father_addr?>" class="form-control">
							<span class="error"><?= $father_addr_error ?></span>
							
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Father Phone</label>
							<input type="text" placeholder="Father Phone.." name="father_phone" value="<?=$father_phone?>" class="form-control">
							<span class="error"><?= $father_phone_error ?></span>
						</div>

					</div>


					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Mother Name</label>
							<input type="text" placeholder="Enter Mothers Name.." name="mother" value="<?=$mother?>" class="form-control">
							<span class="error"><?= $mother_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>Mother Occupation</label>
							<input type="text" placeholder="Enter Mothers Occupation.." name="mother_occ" value="<?=$mother_occ?>" class="form-control">
							<span class="error"><?=$mother_occ_error ?></span>
						</div>
						<div class="col-sm-4 form-group">
							<label>Mother Address</label>
							<input type="text" placeholder="Enter Mothers Address.." name="mother_addr" value="<?=$mother_addr?>" class="form-control">
							<span class="error"><?= $mother_addr_error ?></span>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 form-group">
							<label>Mother Phone</label>
							<input type="text" placeholder="Enter Mothers Phone" name="mother_phone" value="<?=$mother_phone?>" class="form-control">
							<span class="error"><?= $mother_phone_error ?></span>
						</div>

					</div>
					<div class="form-group">
						<label>Health Challenges</label>
						<textarea placeholder="If any kindly state.." rows="3" name="health" value="<?=$health?>" class="form-control"></textarea>
					</div>
					<center><button type="submit" class="btn btn-danger">Preview & Submit</button></center>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
    include 'partials/script.php';
    include 'includes/footer.inc.php';
?>