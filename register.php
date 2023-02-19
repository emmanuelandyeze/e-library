
<?php
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

    <title>Registration</title>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
        <h2 class="form-signin-heading text-center">Library Registration Form</h2>
         <div class="form-group">

<br>
          
          <input type="text" id="name" name="surname" class="form-control" placeholder="Enter Surname" value="<?php echo $surname; ?>" >
        </div>

         <div class="form-group">
          <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter Firstname " value="<?php echo $firstname; ?>" >
        </div>

        <div class="form-group">
          <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter Lastname" value="<?php echo $lastname; ?>">
        </div>

          <div class="form-group">
          <input type="text" id="Phonenumber" name="phonenumber" class="form-control" placeholder="Enter Phonenumber" value="<?php echo $phonenumber; ?>">
        </div>

        <div class="form-group">
          <input type="text" id="matricnumber" name="matricnumber" class="form-control" placeholder="Enter Matric Number" value="<?php echo $matricnumber; ?>">
        </div>

       <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus value="<?php echo $email; ?>"></div>
         
         <div class="form-group">
          <textarea type="text" id="name" name="homeaddress" class="form-control" placeholder="Enter Home Address" value="<?php echo $homeaddress; ?>"></textarea>
        </div>

        <div class="form-check">
  <input class="form-check-input" type="radio" name="sex" id="sex" value="female" checked>
  <label class="form-check-label" for="exampleRadios1">
   female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sex" id="sex" value="male">
  <label class="form-check-label" for="exampleRadios2">
    male
  </label>
</div>

        <div class="form-group">
        <select class="form-control" id="level" name="level" value="<?php echo $level; ?>">
    <option value="">Choose Level</option>
  <option value="ND 1">ND 1</option>
    <option value="ND 2">ND 2</option>
    <option value="ND 2">ND 3</option>
    <option value="HND 1">HND 1</option>
    <option value="HND 2">HND 2</option>
    <option value="ND 2">HND 3</option>

  </select>
</div>
        
         <div class="form-group">
        <select class="form-control" id="course" name="course" value="<?php echo $course; ?>">
    <option value="">Choose Course</option>
  <option value="Computer sci">Computer sci</option>
    <option value="Hospitality mangement">Hospitality mangement</option>
    <option value="Food tech">Food tech</option>
    <option value="Food tech">Comp Sci</option>
    <option value="Food tech">Accounting</option>
    <option value="Food tech">Bus Admin</option>
    <option value="Food tech">Mass Com</option>
    <option value="Food tech">SLT</option>
    <option value="Food tech">Statistics</option>
    <option value="Food tech">Polymer tech</option>
    <option value="Food tech">Printing tech</option>
    <option value="Food tech">Art & Design</option>
  </select>
</div>

 <div class="form-group">
    
</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: green; color:yellow">Sign in</button>
      </form>
<?php

if (isset($_POST["submit"])) {
 mysqli_query($link,"insert into library values('','$_POST[surname]','$_POST[firstname]','$_POST[lastname]','$_POST[matricnumber]','$_POST[phonenumber]','$_POST[sex]','$_POST[course]','$_POST[level]','$_POST[homeaddress]','$_POST[email]','no')");

?>
<div class="alert alert-success col-lg-6 col-lg-push-4">
             Registration Successfully, you will get email when your account approved
      
    </div>
    <script type="text/javascript">
      window.location="login.php";
      
    </script>
<?php
}

?>




    </div> <!-- /container -->
  </body>
</html>
