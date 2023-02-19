<?php
include 'db.php';
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat Room</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
      <style>
      body {
    margin: 0 auto;
    max-width: 800px;
    padding: 0 20px;
}

.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}


</style>
   
    <script>
      function ajax(){

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if (req.readyState== 4 && req.status== 200) {
            document.getElementById('chat').innerHTML = req.responseText;
          }
        }
        req.open('GET','chat.php',true);
        req.send();
      }
      setInterval(function(){ajax()},1000);


    </script>
  
  </head>
<nav class="navbar navbar-inverse navbar-fixed-top ">
   <div class="container-fluid" style="background-color:green">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <img src="yabat.jpg" class="navbar-left" style="margin-top:0px;">
    <!--<a href="receivemsg.php">
        <i class="material-icons" style="font-size:48px; margin-left: 20px; color:red">notifications </i>
          <span class="badge" style="background: #d9534f;
          padding:5px; margin-top:-65px; margin-left:-20px; postion:relative">
           <?php echo $tot;
?> 
          </span>
        </a>-->
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
  <body onload="ajax();">
    <center>

    
          </div>
 
      <center>
 
        <div id="chat"></div>   
<br><br>
           
     
        <form action="" method="post" class="form">
        
        <div class="form-group">
          <input type="text"  name="name" class="form-control" placeholder=" " value="<?php echo $_SESSION['surname']; echo " "; echo $_SESSION['firstname']; echo " "; echo$_SESSION['lastname'];?>" readonly>
        </div>

        <div class="form-group">
          <textarea type="text"  name="msg" class="form-control" placeholder="Type Message..." value="<?php echo $msg; ?>" required=""></textarea>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" style="background-color: green; color:white">send</button>
        
        </form>
        </center>
      </div>
      <?php
     if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $msg = $_POST['msg'];

      $insert = "INSERT INTO studentchats (name,msg) values ('$name','$msg')";
      $run = $db->query($insert);
      if ($run) {
        echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'>";
        ?>
        <script>
          window.location('chat.php')
        </script>
        <?php
      }
     }
      ?>
    </div>
    


  </body>
  </html>
