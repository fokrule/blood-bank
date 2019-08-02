<?php
	$email = $emailerr = $message = $messageerr = "";
	$valid=true;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		 if (empty($_POST["mail"])) {
			$emailerr = "Email is required";
		  } else {
			$email = test_input($_POST["mail"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailerr = "Invalid email format";
			}
		  }
		  
		  
		   if (empty($_POST["message"])) {
			$messageerr = "Message is required";
			$valid=false;
		  } else {
			$message = test_input($_POST["message"]);	
		  }
		 

		if($valid)
			{
				
				include('db_connect.php');

				
        $sql = "INSERT INTO tbl_message(id, sender_email, message) VALUES ('','$email','$message')";

         
        if ($conn->query($sql) === TRUE) 
        {
          echo '<div class="suc_msg"> <font color="green">Message Sent successfully</font></div>';
        } 

        else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          
          
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