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
    <!-- slide starts -->
    <div class="slide">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

  <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slider1.jpg" alt="img" width="100%" height="60px">
          </div>
        <div class="item">
          <img src="img/slider2.jpg" alt="img" width="100%" height="60px">       
        </div>
      </div>

  <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
      </div> 
    </div>
  <!-- team -->
  <section class="team" id="admins">
     <div class="container">
        <div class="about-top">
          <h2 class="text-center">Recently added donor</h2>
          <div class="bordr-bttm"></div>
        </div>
        <div class="container">

 <?php
  
  include('db_connect.php');
  
    $sql = "SELECT * FROM tbl_user ORDER BY id DESC;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {?>

          <div class="col-md-4">
            <img src="img/2.jpg">
            <h3><?php echo $row['name']?></h3>
            <p>Blood Group: <?php echo $row['blood']?>, 
            <br> 
            Division: <?php echo $row['division']?></p>
          </div>
          <?php } } ?>
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