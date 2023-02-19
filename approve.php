<?php
include "connect.php";
$id = $_GET["id"];
mysqli_query($link,"update library set status='yes' where id=$id");

?>
<script type="text/javascript">
  window.location="libraryapproval.php";
</script>
