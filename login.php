<?php
session_start();
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>
      <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
  </head>
 
 
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top ">
   <div class="container-fluid" style="background-color:green">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <img src="yabat.jpg" class="navbar-left">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="librarianlogin.php"><span class="glyphicon glyphicon-user"></span> Librarian-Account </a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us </a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">


      <form method="post" action=""  class="form-signin">
        <!-- display validation errors here-->
        <h2 class="form-signin-heading text-center">Student-Login</h2>

        <div class="form-group">
          <input type="text" id="matricnumber" name="matricnumber" class="form-control" placeholder="Enter Matric Number" value="">
        </div>


         <div class="form-group">
        <input type="password" id="name" name="surname" class="form-control" placeholder="Enter Surname" value="" >
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="login" name="login" style="background-color: green; color:yellow">Login</button>
      </form>
<?php
if (isset($_POST["login"])) {
  $count=0;
  $res = mysqli_query($link,"select * from library where matricnumber='$_POST[matricnumber]' && surname='$_POST[surname]' && status='yes'");
  $row = $res->fetch_array(MYSQLI_BOTH);
    session_start();
    $_SESSION["surname"] = $row['surname'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["id"] = $row['id'];
    $_SESSION["firstname"] = $row['firstname'];
    $_SESSION["lastname"] = $row['lastname'];
    $_SESSION["matricnumber"] = $row['matricnumber'];
    $_SESSION["phonenumber"] = $row['phonenumber'];
    $_SESSION["sex"] = $row['sex'];
    $_SESSION["homeaddress"] = $row['homeaddress'];
    $_SESSION["lastname"] = $row['lastname'];
        $_SESSION["level"] = $row['level'];
    $_SESSION["course"] = $row['course'];
  $count = mysqli_num_rows($res);
if ($count==0) {
?>
 
    <div class="alert alert-danger col-lg-6 col-lg-push-3">
      <strong style="...">Invalid</strong> Matric Number or Password.<br><strong style="...">If Login Correctly Kindly wait for 24hrs for Approval</strong>
    </div>
    <?php
}
else{
  $_SESSION["matricnumber"]=$_POST["matricnumber"];

  ?>
<script type="text/javascript">
  window.location="studentissuedbook.php";
</script>
  <?php
}
}

?>




   
 </div> <!-- /contain00er -->     
    </div>
  </body>
</html>
