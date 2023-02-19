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

    <title>Book Details</title>
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


      
        <!-- display validation errors here-->
        <h2 class="form-signin-heading text-center">Book-Details</h2>

<?php
$i=0;
$res = mysqli_query($link,"select * from addbooks");
echo "<table class='table table-condensed table table-striped'> ";
echo "<tr>";
while ($row=mysqli_fetch_array($res)) {
  $i=$i+1;
echo "<td>";
 ?> <img src="<?php echo $row["books_image"]; ?>" height="100" width="100">

   <?php
echo "<br>";
echo "<b>".$row["books_name"]."</b>";
echo "<br>";
echo "<b>"."Total Books:".$row["books_qty"]."</b>";
echo "<br>";
echo "<b>"."Available_Qty:".$row["available_qty"]."</b>";
echo "<br>";
?>
<a href="all_student.php?books_name=<?php echo $row["books_name"]; ?>" style="color:red"><b>Student Record of this Books</b></a>
<?php
if ($i==5) {
echo "</tr>";
echo "<tr>";
$i=0;
}

 echo "</td>";
}
echo "</tr>";
echo "</table>";







?>


  




   
 </div> <!-- /contain00er -->     
    </div>
  </body>
</html>
