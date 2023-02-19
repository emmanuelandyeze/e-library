<?php
session_start();
if (!isset($_SESSION["matricnumber"])) {
 ?>
<script type="text/javascript">
window.location="login.php"
</script>


 <?php
}
 include('connect.php');
?>
<?php
include "receivecode.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Issued Book</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
           <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
           <li><a href="issuebook.php"><span class="glyphicon glyphicon-book"></span>Borrow-Books</a></li>
           <li><a href="returnbook.php"><span class="glyphicon glyphicon-book"></span>Return-Books</a></li>
           <li><a href="studentissuedbook.php"><span class="glyphicon glyphicon-book"></span>Borrow-Details</a></li>
           <li><a href="studentsearch.php"><span class="glyphicon glyphicon-search"></span> Search-Books </a></li>
              <li><a href="studentindex.php"><span class="glyphicon glyphicon-envelope"></span> Chat with Admin </a></li>
              <li><a href="index.php"><span class="glyphicon glyphicon-envelope"></span> Student Group </a></li>
         <li><a href="librarianlogin.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us </a></li>
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
         <li><a href="librarianlogin.php"><span class="glyphicon glyphicon-log-in"></span>Librarian-Login </a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">


      <form method="post" action=""  class="form-signin">
        <!-- display validation errors here-->
        <h2 class="form-signin-heading text-center">My-Borrowed-Book(s)</h2>
        <table class='table table-bordered'>
          <th>
            Matric Number
          </th>
          <th>
            Book Name
          </th>
          <th>
            Issued Date
          </th>
            <th>
            Return Date
          </th>
          <th>
            Count Down
          </th>
          <?php
          $res=mysqli_query($link,"select * from issue where matricnumber='$_SESSION[matricnumber]'");
          while ($row=mysqli_fetch_array($res)) {
            $_SESSION["issuedate"] = $row['issuedate'];
            $_SESSION["returndate"] = $row['returndate'];
            $diwali=strtotime("$_SESSION[issuedate]");
            $current=strtotime("$_SESSION[returndate]");
            $difference =($diwali-$current);
            $days=floor($difference / (-60*60*24));
            echo "<tr>";
            echo "<td>";
            echo $row["matricnumber"];
            echo  "</td>";

            echo "<td>";
            echo $row["bookname"];
            echo  "</td>";

            echo "<td>";
            echo $row["issuedate"];
            echo  "</td>";

             echo "<td>";
            echo $row["returndate"];
            echo  "</td>";

            echo "<td>";
            echo "$days days left";
            echo  "</td>";

            echo "</tr";
            echo "<tr>";
            echo "</tr>";
          }

          ?>
       </table>
      </form>




   
 </div> <!-- /contain00er -->     
    </div>
  </body>
</html>
