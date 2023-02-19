<?php
include 'db.php';

	$query= "select * from studentchats";
    $query = "SELECT * FROM studentchats ORDER BY id ASC";
   $run = $db->query($query);
    
  while ($row = $run->fetch_array()) :
  
         ?>
  <div class="container">
    <br><br>
  <!--<img src="camp.jpg" alt="Avatar" style="width:100%;">-->
      <span style="color: green; font-weight: bold"><?php echo$row['name'];  ?></span>:  
<p><?php echo$row['msg'];  ?></p>
  <span class="time-right"><?php echo formatDate($row['date']);  ?></span>
</div>
      <?php endwhile;   ?>