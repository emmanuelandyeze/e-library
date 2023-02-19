<?php
include "connect.php";
$id = $_GET["id"];
mysqli_query($link,"delete from addbooks where id=$id");
?>

<script type="text/javascript">
	window.location="displaybook.php";
</script>