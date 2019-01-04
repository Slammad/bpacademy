<?php
$fullname_error=$dob_error=$age_error=$gender_error=$state_error=$tribe_error=$religion_error=$class_error=$pschool_error=$father_error=$father_occ_error=$father_addr_error=$father_phone_error=$mother_error=$mother_occ_error=$mother_addr_error=$mother_phone_error="";
$fullname=$dob=$age=$state=$tribe=$religion=$class=$pschool=$father=$father_occ=$father_addr=$father_phone=$mother=$mother_occ=$mother_addr=$mother_phone=$health="";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }

if($_SERVER["REQUEST_METHOD"]=="POST"){

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
			$query = "INSERT INTO `admissions`(`id`, `full_name`, `dob`, `age`, `gender`, `state`, `tribe`, `religion`, `previous_school`, `class_of_admission`, `father_name`, `father_occup`, `father_addr`, `father_phone`, `mother_name`, `mother_occup`, `mother_addr`, `mother_phone`, `health_challenge`, `passport`) VALUES (NULL,'$fullname','$dob','$age','$gender','$state','$tribe','$religion','$pschool','$class','$father','$father_occ','$father_addr','$father_phone','$mother','$mother_occ','$mother_addr','$mother_phone','$health','passport')";
		$run =$conn->query($query);
		if($run){
			echo "<script>console.log('Applied Successfully')</script>";
		}
		
		}


		
		
	}else{
		echo "<script>console.log('error found')</script>";
	}

}
?>