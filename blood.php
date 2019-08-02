<?php session_start(); ?>
<?php 
if (isset($_SESSION['login_status'])&&($_SESSION['login_status']=='valid')) {
  

?><!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PROJECT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target="#main_menu">
  <?php include_once ('include/navbar.php'); ?>

    <div class="container" style="margin-bottom: 20px;">
                
      <h3 style="color: green;text-align: center;margin-top: 40px;margin-bottom: 30px;">Be Our Member!!</h3>
     <?php
      include('db_connect.php');
      if (isset($_GET['blood'])) {
      $bloodd=$_GET['blood'];
      }
      if(empty($bloodd))
      {
      $bloodd=1;
      }
      $sql = "SELECT * FROM tbl_user where blood=".$bloodd."";
    $result = $conn->query($sql);
    if($result->num_rows>0) {
   while ($row=$result->fetch_assoc()) {?>
  
    
      <div class="table-responsive">

                <table class="table table-bordered">
          <thead>
          
          <th>Name</th>
          <th>Group</th>
          <th>Email</th>
          <th>Phone</th>
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
                <?php echo $row['email'];?>
              </td>
              <td>
                <?php echo $row['nmber'];?>
              </td>
              <td>
                <?php echo $row['division'];?>
              </td>
            </tr>
          </tbody>
        </table>
    
      </div>
     <?php }}
?>
      </div>
      </div>
      
  <?php include_once ('include/footer.php'); ?>

</body>
</html>
<?php }
else{
	header('Location:login.php');
}
?>