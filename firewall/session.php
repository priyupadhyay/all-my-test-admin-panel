<?php
session_start();
$uname = $_GET['uname'];
$uid = $_GET['id'];
$uimage = $_GET['image'];

$_SESSION["uid"] = $uid;
$_SESSION["uname"] = $uname;
$_SESSION["uimage"] = $uimage;


?>
<script type="text/javascript">
   window.location = "./dashboard.php"
</script>