<?php
session_start();

 ?>



 <?php

 include('connect.php');
?>

 <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
  </head>
 <title>Display Books</title>
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
       <li><a href="searchbook.php"><span class="glyphicon glyphicon-search" name="logout"></span> Search-Books </a></li>
        <li><a href="librarianlogin.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us </a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
      <br><br>
       
 <?php
$res = mysqli_query($link,"select * from addbooks");
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>"; echo "Book Image"; echo "</th>";
echo "<th>"; echo "Book Name"; echo "</th>";
echo "<th>"; echo "Publication Name"; echo "</th>";
echo "<th>"; echo "Purchase Data"; echo "</th>";
echo "<th>"; echo "Book Price"; echo "</th>";
echo "<th>"; echo "Book Quantity"; echo "</th>";
echo "<th>"; echo "Available Quantity"; echo "</th>";
echo "<th>"; echo "Delete Books"; echo "</th>";
echo "</tr>";
while ($row=mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>"; ?><img src="<?php echo $row ["books_image"]; ?>" height="100" alt="no-image" width="100"><?php echo "</td>";
echo "<td>"; echo $row ["books_name"]; echo "</td>";
echo "<td>"; echo $row ["books_publication_name"]; echo "</td>";
echo "<td>"; echo $row ["books_purchase_date"]; echo "</td>";
echo "<td>"; echo $row ["books_price"]; echo "</td>";
echo "<td>"; echo $row ["books_qty"]; echo "</td>";
echo "<td>"; echo $row ["available_qty"]; echo "</td>";
?>
<td>
  <a onclick="return confirm('Are you sure?')" href="delete_book.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
</td>
<?php
  echo "</tr>";
}
echo "</table>";
 ?>

     
      



</thead>
</table>
</form>
    </div> <!-- /container -->
  </body>
</html>
