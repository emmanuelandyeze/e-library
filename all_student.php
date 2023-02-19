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

    <title>Student-With-This-Book</title>
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
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin </a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us </a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">


      <
        <!-- display validation errors here-->
        <h2 class="form-signin-heading text-center">Student-With-This-Book</h2>

    
      <?php
$res= mysqli_query($link,"select * from issue where bookname='$_GET[book_name]' &&  returndate='' ");
      echo "<table class='table table-condensed table table-striped'> ";
      echo "<tr>";
echo "<th>"; echo "Matric-number"; echo "</th>";
echo "<th>"; echo "Student-Surname"; echo "</th>";
echo "<th>"; echo "phone-number"; echo "</th>";
echo "<th>"; echo "course"; echo "</th>";
echo "<th>"; echo "level"; echo "</th>";
echo "<th>"; echo "Book-name"; echo "</th>";
echo "<th>"; echo "Issue-Date"; echo "</th>";
echo "</tr>";


while ($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["matricnumber"]; echo "</td>";
echo "<td>"; echo $row["surname"]; echo "</td>";
echo "<td>"; echo $row["phonenumber"]; echo "</td>";
echo "<td>"; echo $row["course"]; echo "</td>";
echo "<td>"; echo $row["level"]; echo "</td>";
echo "<td>"; echo $row["bookname"]; echo "</td>";
echo "<td>"; echo $row["issuedate"]; echo "</td>";
echo "</tr>";


}
echo "</table>";
      ?>





   
 </div> <!-- /contain00er -->     
    </div>
  </body>
</html>
