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

    <title>Search Books</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
         <img src="yabat.jpg" class="navbar-left" style="margin-top:-35px;">
    <a href="receivemsg.php">
        <i class="material-icons" style="font-size:48px; margin-left: 20px; color:red">notifications </i>
          <span class="badge" style="background: #d9534f;
          padding:5px; margin-top:-65px; margin-left:-20px; postion:relative">
           <?php echo $tot;
?> 
          </span>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="addbooks.php"><span class="glyphicon glyphicon-plus"></span>Add-Books</a></li>
        <li><a href="displaybook.php"><span class="glyphicon glyphicon-book"></span>Dispay-Books</a></li>
         <li><a href="libraryapproval.php"><span class="glyphicon glyphicon-user"></span>Student-Approval</a></li>
           <li><a href="sendstudent.php"><span class="glyphicon glyphicon-share-alt" name="logout"></span>Message-Students</a></li>
              <li><a href="adminindex.php"><span class="glyphicon glyphicon-envelope"></span> Chat with Student </a></li>
       <li><a href="searchbook.php"><span class="glyphicon glyphicon-search" name="logout"></span> Search-Books </a></li>
        <li><a href="librarianlogin.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us </a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">


      <form method="post" action=""  class="form-signin">
        <!-- display validation errors here-->
        <h2 class="form-signin-heading text-center">Search-Books</h2>

        <div class="form-group">
          <input type="text" id="matricnumber" name="t1" class="form-control" placeholder="Enter Book Name" value="" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: green; color:yellow">Search</button>
      </form>
<?php
if (isset($_POST["submit"])) {
  
$i=0;
$res = mysqli_query($link,"select * from addbooks where books_name like('%$_POST[t1]%')");
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
echo "<b>"."Available_Qty:".$row["available_qty"]."</b>";
echo "<br>";
if ($i==5) {
$i=0;
}

}
echo "</tr>";
echo "</table>";


}else
{



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
echo "<b>"."Available_Qty:".$row["available_qty"]."</b>";
echo "<br>";
if ($i==3) {
echo "</tr>";
echo "<tr>";
$i=0;
}

 echo "</td>";
}
echo "</tr>";
echo "</table>";

}





?>




   
 </div> <!-- /contain00er -->     
    </div>
  </body>
</html>
