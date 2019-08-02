<?php session_start(); ?>
<?php 
if (isset($_SESSION['login_status'])&&($_SESSION['login_status']=='valid')) {
  
}
else{
 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank</title>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#main_menu">
<div class="container example2" style="margin-top: 10px">
   <?php include_once ('include/navbar.php'); ?>
</div>
    <section class="contact" id="contactt" style="min-height: 500px;">
    <div class="container">
      <div class="contact-top text-center">
        
        <h2>Contact us</h2>
        <div class="bordr-bttm-contact">
        </div>
      </div>
      <div class="comment_bar">
      <?php include('message_validation.php');?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        	<input type="email" name="mail" placeholder="Email Please.." class="form-control">
            Comment: <textarea name="message" rows="4" cols="70" value="<?php echo $message;?>" class="form-control"></textarea>
            <br><br>
            <input type="submit"  class="form-control" name="submit" value="Submit" >  
        </form>
       
      </div>
    </div>

  </section>
  <?php include_once ('include/footer.php'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>