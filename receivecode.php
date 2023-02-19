<?php
//session_start();
include "connect.php";
$tot=0;
 $res = mysqli_query($link,"select * from messages where susername='$_SESSION[matricnumber]' && read1='n' ");
$tot=mysqli_num_rows($res);
echo $tot;
?>

