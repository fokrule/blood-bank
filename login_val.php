<?php

	$email= $t_password = "";
	
	 $emailerr =  $t_passworderr = $loginErr = "";

	$valid=true;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//$valid=true;
	
		  
		   if (empty($_POST["email"])) {
			$emailerr = "Email is required";
		  } else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailerr = "Invalid email format";
			}
		  }
		  
		  
		   if (empty($_POST["t_password"])) {
			$t_passworderr = "Password is required";
			$valid=false;
		  } else {
			$t_password = test_input($_POST["t_password"]);
				
		  }
		 
		if($valid)
			{
				
				include('db_connect.php');

				//$sql = " UPDATE  tbl_user SET name='$name',email='$email',age='$age',blood='$blood',gender='$gender',father='$f_name',address='$address' WHERE id='$user_id'";

			  
				$sql = "SELECT email , pass FROM tbl_admin WHERE email='$email' AND pass='$t_password' ";

				
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					
					echo $_SESSION['login_status']='valid';
					
					header('Location:index.php');
					
					
				} else {
					$loginErr="<font color='red'> Sorry Invaid Name or Email</font>";
				}
				

				
			}
			

}
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>