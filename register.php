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
              
<?php 
include ('reg_val.php');
?>
    <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

    <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control input-lg"  placeholder="Enter name" name="name" value="<?php echo $name; ?>"/>
      
      <div class="error"> 
      <?php echo $nameerr; ?> 
      </div>
    </div>
 
    <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control input-lg" placeholder="Enter email" name="email" value="<?php echo $email; ?>" />
      <div class="error"> 
      <?php echo $emailerr; ?> 
       </div>
    </div>

    <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control input-lg" placeholder="Enter password" name="t_password">

      <div class="error"> 
      <?php echo $t_passworderr; ?> 
       </div>
    </div>
  <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control input-lg" placeholder="Enter password" name="t_c_password">

      <div class="error"> 
      <?php echo $t_c_passworderr; ?> 
       </div>
    </div>
 


 <div class="button col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>

              </div>
              </div>
              
  <?php include_once ('include/footer.php'); ?>

</body>
</html>