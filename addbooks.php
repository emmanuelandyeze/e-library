
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

    <title>Add Books</title>
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

      <form method="post" action=""  class="form-signin" enctype="multipart/form-data">
        <!-- display validation errors here-->
        <h2 class="form-signin-heading text-center">Library-Add-Books</h2>
         <div class="form-group">
          
          <input type="text" id="name" name="booksname" class="form-control" placeholder="Enter Book-name">
        </div>

         <div class="form-group">Book image
          <input type="file"  name="f1" class="form-control">
        </div>

        <div class="form-group">
          <input type="text"  name="bauthorname" class="form-control" placeholder="Enter Author Name">
        </div>

          <div class="form-group">
          <input type="text" name="pname" class="form-control" placeholder="Enter Publication Name">
        </div>

        <div class="form-group">
          <input type="text"  name="bpurchasedate" class="form-control" placeholder="Enter Purchase Date">
        </div>

       <div class="form-group">
        <input type="text" class="form-control" name="bprice" placeholder="Enter Price"></div>
         
          <div class="form-group">
          <input type="text"  name="bqty" class="form-control" placeholder="Enter Book QTY">
        </div>

         <div class="form-group">
          <input type="text"  name="aqty" class="form-control" placeholder="Enter Available QTY">
        </div>

         <div class="form-group">
          <input type="text"  name="lusername" class="form-control" placeholder="Enter Librarian Username">
        </div>
    


 <div class="form-group">
    
</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: green; color:yellow">Insert Book</button>
      </form>



      
    </div>

<?php

if (isset($_POST["submit"])) {
  $tm = md5(time()); 
$fnm=$_FILES["f1"]["name"];
$dst="./books_image/".$tm.$fnm;
$dst1="books_image/".$tm.$fnm;
move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
mysqli_query($link,"insert into addbooks values('','$_POST[booksname]','$dst1','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedate]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]',' $_POST[lusername]')");

?>
<script type="text/javascript">
  alert("Books inserted Successful");

</script>
<?php
}
?>




    </div> <!-- /container -->

    
  </body>
</html>
