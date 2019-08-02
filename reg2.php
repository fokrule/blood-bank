<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <?php include_once ('include/navbar.php'); ?>
                
                <p>Fill up the fields bellow</p>

              
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
  
  <input type="radio"  name="blood" value="A+ "  <?php if(isset($division)&&$division=="A+ "){echo 'checked';}?>   /> A+  
  <br>
  <input type="radio"   name="blood" value="B+ " <?php if(isset($division)&&$division=="B+ "){echo 'checked';}?>  /> B+  
<br>
  <input type="radio"  name="blood" value="O+ "  <?php if(isset($division)&&$division=="O+ "){echo 'checked';}?>   /> O+  
  <br>
  <input type="radio"   name="blood" value="AB+" <?php if(isset($division)&&$division=="AB+"){echo 'checked';}?>  /> AB+  
  <br>
  <input type="radio"  name="blood" value="A- "  <?php if(isset($division)&&$division=="A- "){echo 'checked';}?>   /> A-  
  <br>
  <input type="radio"   name="blood" value="B-" <?php if(isset($division)&&$division=="B-"){echo 'checked';}?>  /> B-   
  <br>
  <input type="radio"  name="blood" value="O-"  <?php if(isset($division)&&$division=="O-"){echo 'checked';}?>   />O-  
  <br>
  <input type="radio"   name="blood" value="AB- " <?php if(isset($division)&&$division=="AB- "){echo 'checked';}?>  /> AB-   
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
</body>
</html>