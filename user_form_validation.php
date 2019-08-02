<?php

	$name= $email= $mobile= $gender = $blood = $f_name = $address = $division=$pass="";
	
	$nameErr= $mobileErr =  $emailErr = $genderErr = $bloodErr = $f_nameErr = $addressErr  =$divisionErr=$passErr="";

	$valid=true;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
			$valid=false;
		  } else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  $nameErr = "Only letters and white space allowed";
			  $valid=false;
			}
		  }
		  
		   if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  } else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format";
			}
		  }
		  
		  if (empty($_POST["mobile"])) {
			$mobileErr = "Mobile is required";
			$valid=false;
		  } else {
			$mobile = test_input($_POST["mobile"]);
			// check if Only Number allowed
			
			if (!preg_match("/^[0-9 ]*$/",$mobile)) {
			  $mobileErr = "Only Number allowed";
			  $valid=false;
			}
		  }

		    if (empty($_POST["division"])) {
			$divisionErr = "Gender is required";
			$valid=false;
		  } else {
			$division = test_input($_POST["division"]);
			// check if Only Number allowed
		  }
		  
		  
		   if (empty($_POST["blood"])) {
			$bloodErr = "Blood is required";
			$valid=false;
		  } else {
			$blood = test_input($_POST["blood"]);
			
		  }
		  
		  
		    if (empty($_POST["address"])) {
			$addressErr = "Address is required";
			$valid=false;
		  } else {
			$address = test_input($_POST["address"]);
			// check if Only Number allowed
			
		  }
		  
		      if (empty($_POST["gender"])) {
			$genderErr = "Gender is required";
			$valid=false;
		  } else {
			$gender = test_input($_POST["gender"]);
			// check if Only Number allowed
		  }
		  
		  
		 

		if($valid)
			{
				
				include('db_connect.php');
			  
				$sql = "INSERT INTO tbl_user (id,name,email,nmber,division,blood,gender,address) VALUES('','$name','$email','$mobile','$division','$blood','$gender','$address')";

				if ($conn->query($sql) === TRUE) {
					echo '<div class="suc_msg">	User Inserted successfully </div>';
				} else {
					// echo "Error: " . $sql . "<br>" . $conn->error;
					
					if (mysqli_errno($conn) == 1062) {
						
						$emailErr="Email Already exist";
					}
				}

				$conn->close();
				

				
			}
			

}
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>