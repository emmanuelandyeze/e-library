
<?php
 include('connect.php');
?>

 <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
  </head>
 <title>Admin Approval</title>
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
        <table class="table table-condensed table table-striped">
   
<?php
$res= mysqli_query($link,"select * from library");
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>"; echo "id"; echo "</th>";
echo "<th>"; echo "surname"; echo "</th>";
echo "<th>"; echo "matricnumber"; echo "</th>";
echo "<th>"; echo "phonenumber"; echo "</th>";
echo "<th>"; echo "sex"; echo "</th>";
echo "<th>"; echo "course"; echo "</th>";
echo "<th>"; echo "level"; echo "</th>";
echo "<th>"; echo "homeaddress"; echo "</th>";
echo "<th>"; echo "email"; echo "</th>";
echo "<th>"; echo "status"; echo "</th>";
echo "<th>"; echo "Approve"; echo "</th>";
echo "<th>"; echo "Not Approve"; echo "</th>";
echo "</tr>";
 while($row = mysqli_fetch_array($res)){
?>
<tr>
  
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['surname'] ?></td>
<td><?php echo $row['matricnumber'] ?></td>
<td><?php echo $row['phonenumber'] ?></td>
<td><?php echo $row['sex'] ?></td>
<td><?php echo $row['course'] ?></td>
<td><?php echo $row['level'] ?></td>
<td><?php echo $row['homeaddress'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['status'] ?></td>
<td>
  <a onclick="return confirm('Are you sure?')" href="approve.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"> Approve</a>
</td>
<td>
  <a onclick="return confirm('Are you sure?')" href="notapprove.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Not Approve</a>
</td>

</tr>
<?php
}

 

 echo "</table>";

?>

     
      



</thead>
</table>
    </div> <!-- /container -->
    <?php

if (isset($_GET['idd'])) {
  $idd = $_GET['idd'];
 $re= mysqli_query($link,"delete * from library where id='$idd'");
  if ($res) {
    ?>
    <script>
       window.location.href='librarydelete.php';
    </script>
    <?php
  }else{
    ?>
    <script>
       alert("Fail to delete Data");
       window.location.href='librarydelete.php';
    </script>
    <?php
  }
}
?>
  </body>
</html>
