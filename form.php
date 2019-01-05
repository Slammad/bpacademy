<?php
    include 'includes/head.inc.php';
    $settingsq = "SELECT * FROM `settings` WHERE `id`=1";
    $runsettings = $conn->query($settingsq);
    $settings = mysqli_fetch_assoc($runsettings);



    
?>


<?php include 'partials/top.inc.php';
$fullname_error=$dob_error=$age_error=$gender_error=$state_error=$tribe_error=$religion_error=$class_error=$pschool_error=$father_error=$father_occ_error=$father_addr_error=$father_phone_error=$mother_error=$mother_occ_error=$mother_addr_error=$mother_phone_error=$passport_error="";
$fullname=$dob=$age=$state=$tribe=$religion=$class=$pschool=$father=$father_occ=$father_addr=$father_phone=$mother=$mother_occ=$mother_addr=$mother_phone=$health=$dbpath="";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }

if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(!isset($_FILES['passport'])){
		$passport_error ="Passport not uploaded";
       
	}else{
		$file_name = $_FILES['passport']['name'];
        $file_size =$_FILES['passport']['size'];
        @$file_tmp =$_FILES['passport']['tmp_name'];
        $file_type=$_FILES['passport']['type'];
        $allowed = array('png','jpg','jpeg','gif');
        @$file_ext=explode('.',$_FILES['passport']['name']) ;
        $file_ext=end($file_ext);
        @$file_ext=strtolower(end(explode('.',$_FILES['passport']['name']))); 
        $uploadName = md5(microtime()).'.'.$file_ext;
        $uploadPath = BASEURL.'/uploads/passports/'.$uploadName;
        $dbpath='/uploads/passports/'.$uploadName;

        if (($file_size > 100000)){      
			$passport_error ="File must be less than 100KB";
             
		}else{
			move_uploaded_file($file_tmp,$uploadPath);
		}

	}
		
	if(empty($_POST['fullname'])){
		 $fullname_error="Name is Required";
	}else{
		$fullname =test_input($_POST['fullname']);
		if(!preg_match("/^[a-zA-Z ]*$/",$fullname)){
			$fullname_error ="Please check name field";
		}
	}


	if(empty($_POST['dob'])){
		$dob_error="Date of Birth is Required";
    }else{
	   $dob =$_POST['dob'];
	}
	
	if(empty($_POST['age'])){
		$age_error="Age by September Required";
    }else{
	   $age =test_input($_POST['age']);
	   if(!preg_match("/^[0-9]{2}\z/",$age)){
		   $age_error ="Invalid Age";
	   }
	}
	
	if(empty($_POST['gender'])){
		$gender_error="Gender Required";
    }else{
	   $gender =$_POST['gender'];
	}


	if(empty($_POST['state'])){
		$state_error="State is Required";
    }else{
	   $state =test_input($_POST['state']);
	   if(!preg_match("/^[a-zA-Z ]*$/",$state)){
		   $state_error ="Please check state field";
	   }
	}
	

	if(empty($_POST['tribe'])){
		$tribe_error="tribe is Required";
    }else{
	   $tribe =test_input($_POST['tribe']);
	   if(!preg_match("/^[a-zA-Z ]*$/",$tribe)){
		   $tribe_error ="Please check tribe field";
	   }
	}
	
	if(empty($_POST['religion'])){
		$religion_error="Religion Required";
    }else{
	   $religion =$_POST['gender'];
	}

	if(empty($_POST['class'])){
		$class_error="Class is Required";
    }else{
	   $class =test_input($_POST['class']);
	   if(!preg_match("/^[a-zA-Z ]*$/",$fullname)){
		   $class_error ="Invalid Class";
	   }
	}
	
	if(empty($_POST['pschool'])){
		$pschool =$_POST['pschool'];
    }else{
	   $pschool =$_POST['pschool'];
	}

	if(empty($_POST['father'])){
		$father_error="Father Name is Required";
    }else{
	   $father =test_input($_POST['father']);
	   if(!preg_match("/^[a-zA-Z ]*$/",$father)){
		   $father_error ="Please check name field";
	   }
	}
	
	if(empty($_POST['father_occ'])){
		$father_occ_error="Father Occupation is Required";
    }else{
	   $father_occ =test_input($_POST['father_occ']);
	   if(!preg_match("/^[a-zA-Z ]*$/",$father_occ)){
		   $father_occ_error ="invalid Occupation";
	   }
	}
	
	if(empty($_POST['father_addr'])){
		$father_addr_error="Father Address is Required";
    }else{
	   $father_addr =$_POST['father_addr'];
	}

	if(empty($_POST['father_phone'])){
		$father_phone_error="Required";
   }else{
	   $father_phone =$_POST['father_phone'];
	   if(!preg_match("/^[0]\d{10}$/",$father_phone)){
		   $father_phone_error ="Invalid Phone no";
	   }
   }

	if(empty($_POST['mother'])){
		$mother_error="Mother Name is Required";
	}else{
		$mother =test_input($_POST['mother']);
    if(!preg_match("/^[a-zA-Z ]*$/",$mother)){
	   $mother_error ="Please check name field";
  	 }
	}

	if(empty($_POST['mother_occ'])){
		$mother_occ_error="Mother Occupation is Required";
    }else{
	   $mother_occ =test_input($_POST['mother_occ']);
	   if(!preg_match("/^[a-zA-Z ]*$/",$mother_occ)){
		   $mother_occ_error ="invalid Occupation";
	   }
	}

	if(empty($_POST['mother_addr'])){
		$mother_addr_error="Mother Address is Required";
    }else{
	   $mother_addr =$_POST['mother_addr'];
	}

	if(empty($_POST['mother_phone'])){
		$mother_phone_error="Required";
   }else{
	   $mother_phone =$_POST['mother_phone'];
	   if(!preg_match("/^[0]\d{10}$/",$mother_phone)){
		   $mother_phone_error ="Invalid Phone no";
	   }
   }

    if(empty($_POST['health'])){
		$health =$_POST['health'];
	}else{
   		$health =$_POST['health'];
	}
 

	if($fullname_error =='' && $dob_error=='' && $age_error=='' && $gender_error=='' &&$state_error==''&&$religion_error==''&& $class_error==''&&$father_error==''&&$father_occ_error==''&&$father_addr_error==''&&$father_phone_error==''&&$mother_error==''&&$mother_occ_error==''&&$mother_addr_error==''&&$mother_phone_error==''){

		$check ="SELECT * FROM `admissions` WHERE `full_name`='$fullname' AND `father_phone`='$father_phone' AND `dob`='$dob' AND `state`='$state' AND `tribe`='$tribe'";
		$row_cnt =mysqli_num_rows($conn->query($check));
		if($row_cnt > 0){
			echo "<br><br><div class='container'>
			<div class='row'>
				<div class='col-md-8 '>
					<div class='alert alert-success'>
					<strong>Note!</strong> Your Application Has Already Been Submitted.
					</div>
				</div>
			</div>
		</div>";
		
		}else{
			$query = "INSERT INTO `admissions`(`id`, `full_name`, `dob`, `age`, `gender`, `state`, `tribe`, `religion`, `previous_school`, `class_of_admission`, `father_name`, `father_occup`, `father_addr`, `father_phone`, `mother_name`, `mother_occup`, `mother_addr`, `mother_phone`, `health_challenge`, `passport`) VALUES (NULL,'$fullname','$dob','$age','$gender','$state','$tribe','$religion','$pschool','$class','$father','$father_occ','$father_addr','$father_phone','$mother','$mother_occ','$mother_addr','$mother_phone','$health','$dbpath')";
		$run =$conn->query($query);
		if($run){
			echo "<script>console.log('Applied Successfully')</script>";
			echo "<script>window.location.href ='generate.php?candidate=$fullname&dob=$dob&state=$state&tribe=$tribe&age=$age';</script>";
		}
		
		}


		
		
	}else{
		echo "<script>console.log('error found')</script>";
	}

}
?>



<div class="container">
<br>

	<div class="col-md-10 offset-md-2 well">
		<div class="row">
		<center><h3><b>APPLICATION FORM</b></h3></center><br>
			<form action="form.php" method="POST" enctype="multipart/form-data">
			<div class="float-right" style="margin:20px;">
			
				<label class=newbtn>
					<img id="blah" src="http://placehold.it/140x140" >
					<p>Upload Passport<br><span class="error" style="font-size:13px;">less than 100kb</span></p>
					<span class="error"><?= $passport_error ?></span>
					<input id="pic" class='pis' name="passport" onchange="readURL(this);" type="file" >
				</label>
			</div>
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
					
						<script>
 
 $('.newbtn').bind("click" , function () {
        $('#pic').click();
 });
 
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
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