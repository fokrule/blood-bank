<?php session_start(); ?>
<?php 
if (isset($_SESSION['login_status'])&&($_SESSION['login_status']=='valid')) {
  
}
else{
 
}
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>PROJECT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#main_menu">

  <?php include_once ('include/navbar.php'); ?>

    <div class="container" style="margin-bottom: 20px;">
                
      <h3 style="color: green;text-align: center;margin-top: 40px;margin-bottom: 30px;">Be Our Member!!</h3>
              
 <?php include('user_form_validation.php');?>
 
  <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  
  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="text"  class="form-control input-lg" placeholder="Enter Name" name="name" value="<?php echo $name; ?>"/>
  
  <div class="error"> <?php echo $nameErr; ?> </div>
  
  </div>
  
  
  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="text"  class="form-control input-lg" placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>"/>
  
  <div class="error"> <?php echo $emailErr; ?> </div>
  
  </div>
  
  
  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="text"  class="form-control input-lg" placeholder="Enter mobile" name="mobile" value="<?php echo $mobile; ?>"/>
  <div class="error"> <?php echo $mobileErr; ?> </div>
    
  </div>
   <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="radio"  name="division" value="Dhaka "  <?php if(isset($division)&&$division=="Dhaka "){echo 'checked';}?>   /> Dhaka  
  <br>
  <input type="radio"   name="division" value="Chittagong " <?php if(isset($division)&&$division=="Chittagong "){echo 'checked';}?>  /> Chittagong  
<br>
  <input type="radio"  name="division" value="Khulna "  <?php if(isset($division)&&$division=="Khulna "){echo 'checked';}?>   /> Khulna  
  <br>
  <input type="radio"   name="division" value="Rajshahi" <?php if(isset($division)&&$division=="Rajshahi"){echo 'checked';}?>  /> Rajshahi  
  <br>
  <input type="radio"  name="division" value="Rangpur "  <?php if(isset($division)&&$division=="Rangpur "){echo 'checked';}?>   /> Rangpur  
  <br>
  <input type="radio"   name="division" value="Barisal " <?php if(isset($division)&&$division=="Barisal "){echo 'checked';}?>  /> Barisal  
  <br>
  <input type="radio"  name="division" value="Mymensingh "  <?php if(isset($division)&&$division=="Mymensingh "){echo 'checked';}?>   /> Mymensingh  
  <br>
  <input type="radio"   name="division" value="Sylhet " <?php if(isset($division)&&$division=="Sylhet "){echo 'checked';}?>  /> Sylhet  
  <br>
    <div class="error"> <?php echo $divisionErr; ?> </div>
  </div>
<br>

  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <textarea name="address" class="form-control input-lg"  name="address" placeholder="Enter Address" ><?php echo $address; ?></textarea>
  <div class="error"> <?php echo $addressErr; ?> </div>
    
  </div>



   <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="radio"  name="blood" value="1 "  <?php if(isset($division)&&$division=="A+ "){echo 'checked';}?>   /> A+  
  <br>
  <input type="radio"   name="blood" value="2 " <?php if(isset($division)&&$division=="B+ "){echo 'checked';}?>  /> B+  
<br>
  <input type="radio"  name="blood" value="3"  <?php if(isset($division)&&$division=="O+ "){echo 'checked';}?>   /> O+  
  <br>
  <input type="radio"   name="blood" value="4" <?php if(isset($division)&&$division=="AB+"){echo 'checked';}?>  /> AB+  
  <br>
  <input type="radio"  name="blood" value="5"  <?php if(isset($division)&&$division=="A- "){echo 'checked';}?>   /> A-  
  <br>
  <input type="radio"   name="blood" value="6" <?php if(isset($division)&&$division=="B-"){echo 'checked';}?>  /> B-   
  <br>
  <input type="radio"  name="blood" value="7"  <?php if(isset($division)&&$division=="O-"){echo 'checked';}?>   />O-  
  <br>
  <input type="radio"   name="blood" value="8 " <?php if(isset($division)&&$division=="AB- "){echo 'checked';}?>  /> AB-   
  <br>
    <div class="error"> <?php echo $divisionErr; ?> </div>
  </div>
<br>

<!--   
  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="text"  class="form-control input-lg" placeholder="Enter blood" name="blood" value="<?php echo $blood; ?>"/>
  <div class="error"> <?php echo $bloodErr; ?> </div>
    
  </div> -->
  

  
  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="radio"  name="gender" value="Male"  <?php if(isset($gender)&&$gender=="Male"){echo 'checked';}?>   /> MALE 
  
  <input type="radio"   name="gender" value="Female" <?php if(isset($gender)&&$gender=="Female"){echo 'checked';}?>  /> FEMALE 
  
    <div class="error"> <?php echo $genderErr; ?> </div>
  </div>
  
  <div class="form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3" >
  
  <input type="submit" class="btn btn-success" value="submit" />
  
  </div>
  
  </form>
  

              </div>
              </div>
              
  <?php include_once ('include/footer.php'); ?>

</body>
</html>