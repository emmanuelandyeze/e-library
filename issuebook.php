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

    <title>Borrow-books</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <!-- date/calender link-->
      <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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
        <h2 class="form-signin-heading text-center">Book Borrow </h2>
         <div class="form-group">

<div class="form-group">

   <select class="form-control" name="enr">
    <?php 
   //$res= mysqli_query($link,"select matricnumber from library");
   $res = mysqli_query($link,"select * from issue where matricnumber='$_SESSION[matricnumber]' ");
   while($row = mysqli_fetch_array($res)){
    echo"<option>";
    echo $row["matricnumber"];
    echo"</option>";
   }

   ?>
 </select><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: green; color:yellow">Search</button><br>
       
     <?php
      if (isset($_POST["submit"])) {
        $res5= mysqli_query($link,"select * from library where matricnumber='$_POST[enr]'");
        while($row5= mysqli_fetch_array($res5)) {
        $surname=$row5["surname"];
        $firstname=$row5["firstname"];
        $lastname=$row5["lastname"];
        $matricnumber=$row5["matricnumber"];
        $phonenumber=$row5["phonenumber"];
        $sex=$row5["sex"];
        $course=$row5["course"];
        $level=$row5["level"]; 
        $email=$row5["email"];
        $_SESSION["matricnumber"]=$matricnumber;
        $_SESSION["surname"]=$surname;
        }
     ?>


         <div class="form-group">
          <input type="text" id="matricnumber" name="matricnumber" class="form-control" placeholder="Enter Matric Number" value="<?php echo $matricnumber; ?>" disabled >
        </div>


         <input type="text" id="name" name="studentname" class="form-control" placeholder="Enter Surname" value="<?php echo $surname.' '.$firstname .' '. $lastname; ?>"  disabled >
        </div>

        <div class="form-group">
          <input type="text" id="Phonenumber" name="phonenumber" class="form-control" placeholder="Enter Phonenumber" value="<?php echo $phonenumber; ?>">
        </div>

         <div class="form-group">
        <select class="form-control" id="level" name="level">
    <option value="">Choose Level</option>
  <option value="ND 1">ND 1</option>
    <option value="ND 2">ND 2</option>
    <option value="HND 1">ND 3</option>
    <option value="HND 2">HND 1</option> 
    <option value="HND 1">HND 2</option>
    <option value="HND 2">HND 3</option>

  </select>
</div>
        
         <div class="form-group">
        <select class="form-control" id="course" name="course" >
    <option value="">Choose Course</option>
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
          <select class="form-control" name="bookname">
            <?php

            $res= mysqli_query($link,"select books_name from addbooks");
            while ($row=mysqli_fetch_array($res)) {
             echo "<option>";
             echo $row["books_name"];
            echo" </option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group">
          <input type="text" id="lastname" name="issuedate" class="form-control" placeholder="Enter issuedate" value="<?php echo date("Y-m-d"); ?>" readonly>
        </div>

         <div class="form-group">
           <input name="returndate"  id="date" class="form-control" placeholder="yyyy-mm-dd" required/>
        </div>

         

        

     
       


        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit1" style="background-color: green; color:yellow">Sign in</button>
      </form>
        <?php
      }
      ?>
<?php

if (isset($_POST["submit1"])) {
  $qty =0;
  $res=mysqli_query($link,"select * from addbooks where books_name='$_POST[bookname]' ");
  while ($row = mysqli_fetch_array($res)) {
    $qty=$row["available_qty"];
  }

  if ($qty==0) {
    ?>

     <div class="alert alert-danger col-lg-6 col-lg-push-3">
      <strong style="...">This Book are not Available</strong> 
    </div>

    <?php
  }else{
 mysqli_query($link,"insert into issue values('','$_SESSION[matricnumber]','$_SESSION[surname]','$_POST[phonenumber]','$_POST[course]','$_POST[level]','$_POST[bookname]','$_POST[issuedate]','$_POST[returndate]')");
  mysqli_query($link,"update addbooks set available_qty= available_qty-1 where books_name='$_POST[bookname]' ");
?>
<script type="text/javascript">
  alert("books Issued Successfully");

</script>
<?php
}
}
?>
    </div> <!-- /container -->
        <!--script for calender-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

 
<script type="text/javascript" src="https://code.jquery/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

  <script>
    $(document).ready(function(){
      var date_input=$('input[id="date"]');
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      })
    })


  </script>
  </body>
</html>