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

    <title>Send-Student-Message</title>
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
        <h2 class="form-signin-heading text-center">Send-Student-Message</h2>

        <select class="form-control" name="dusername">
    <?php 
   $res= mysqli_query($link,"select * from library");
   while($row = mysqli_fetch_array($res)){
    ?>
    <option value="<?php echo $row["surname"]?>">
      <?php
    echo $row["surname"]."(". $row["matricnumber"].")";
    echo"</option>";
   }

   ?>
 </select><br>
 <div class="form-group">
          <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" value="" required>
        </div>

        <div class="form-group">
          <textarea type="text" id="msg" name="msg" class="form-control" placeholder="Enter Message" value="" required></textarea>
        </div>

        <button class="btn btn-lg btn-primary btn-block glyphicon glyphicon-send" type="submit1" name="submit1" style="background-color: green; color:yellow">Send</button>
      </form>
      <?php
if (isset($_POST["submit1"])) {
mysqli_query($link, "insert into messages values('','$_SESSION[matricnumber]','$_POST[dusername]','$_POST[title]','$_POST[msg]','n')");
?>
<script type="text/javascript">
  alert("Message Sent Successfully");
</script>
<?php
}


      ?>



   
 </div> <!-- /contain00er -->     
    </div>
  </body>
</html>
