<?php
include "connect.php";
$id = $_Get["id"];
$a = date("d-m-y");
$res=mysqli_query($link,"update issue set returndate='$a'");
$books_name="";
$res = mysqli_query($link,"select * from issue");
 mysqli_query($link,"update addbooks set available_qty= available_qty+1 where books_name='$books_name' ");

?>
<script type="text/javascript">
	window.location= "returnbook.php";
</script>