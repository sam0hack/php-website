<?php
require_once("fend_header.php");
?>
<?php if(isset($_SESSION['msg']))
	echo "<script>alert('".$_SESSION['msg']."')</script>";
	session_destroy();
?>