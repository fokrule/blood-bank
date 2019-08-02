<?php 
 
 $name = $email = $t_password = $length = $t_password = $code = "";
 $nameerr =$emailerr = $t_passworderr = $t_c_passworderr = $codeerr="";
 $valid=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["name"])) {
			$nameerr = "<font color='red'>Name is required</font>";
			$valid=false;
		  } 
		  else {
			$name = test_input($_POST["name"]);
			
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  $nameerr = "<font color='red'>Only letters and white space allowed</font>";
			  $valid=false;
			}
		  }


		 if (empty($_POST["email"])) {
			$emailerr = "<font color='red'>Email is required</font>";
			$valid=false;
		  } 
		  else {
		  	
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailerr = "<font color='red'>Invalid email format</font>";
			  $valid=false;
			}
		  }
		  

		  
		   if (empty($_POST["t_password"])) {
			$t_passworderr = "<font color='red'>Password is required</font>";
			$valid=false;
		  } else {
			$t_password = test_input($_POST["t_password"]);
			// check if Only Number allowed
			
			$lenght=strlen($t_password);
			
			if($lenght<4)
			{
				$t_passworderr = "<font color='red'>At least Four character is required</font>";
				$valid=false;
			}

			
		  }
		  
		    if (empty($_POST["t_c_password"])) {
			$t_c_passworderr = "<font color='red'>Confirmation Password is required</font>";
			$valid=false;
		  } else {
			$t_c_password = test_input($_POST["t_c_password"]);
			
			// check if Only Number allowed
			
			if($t_password == $t_c_password){

				}
				else
				{
					
				$t_c_passworderr = "<font color='red'>Confirmation Password must be same as password</font>";
				$valid=false;
			}
		  }
		 if($valid)

			{
				
				include('db_connect.php');
			  
				$sql = "INSERT INTO tbl_admin (id,name,email,pass) VALUES ('','$name','$email','$t_password')";

				 
				if ($conn->query($sql) === TRUE) 
				{
					echo '<div class="suc_msg"> <center> <font color="green">Registration successfull!!! </font>
					</center> </div>';
				} 

				else {
					// echo "Error: " . $sql . "<br>" . $conn->error;
					
					if (mysqli_errno($conn) == 1062) {
						
						$emailerr="<font color='red'>Email Already exist</font>";
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