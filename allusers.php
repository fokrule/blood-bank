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

      <?php
  
  include('db_connect.php');
  
    $sql = "SELECT * FROM tbl_user ORDER BY id DESC;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {?>

      <div class="container">
        <div class="table-responsive">

                <table class="table table-bordered">
          <thead>
          
          <th>Name</th>
          <th>Email</th>
          <th>Blood Group</th>
          <th>Division</th>
          </thead>
          <tbody>
            <tr>
              <td>
                <?php echo $row['name'];?>
              </td>
              <td>
                <?php echo $row['email'];?>
              </td>
              <td>
                <?php
                $blood = $row['blood'];
                if ($blood == 1) {
                 $blood ='A+';
                }
                elseif ($blood == 2) {
                  $blood ='B+';
                }
                elseif ($blood == 3) {
                  $blood ='O+';
                }
                elseif ($blood == 4) {
                  $blood ='AB+';
                }
                elseif ($blood == 5) {
                  $blood ='A-';
                }
                elseif ($blood == 6) {
                  $blood ='B-';
                }
                elseif ($blood == 7) {
                  $blood ='O';
                }
                elseif ($blood == 8) {
                  $blood ='AB';
                }
                else
                {
                  $blood = 'not Given';
                }
                 echo $blood;?>
                
              </td>
              <td>
                <?php echo $row['division'];?>
              </td>
            </tr>
          </tbody>
        </table>
    
      </div>

      </div>
          <?php
  }}
  ?>
      
  <?php include_once ('include/footer.php'); ?>

</body>
</html>