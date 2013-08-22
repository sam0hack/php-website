<?php 
require("fend_header.php");
if((isset($_REQUEST['sub']))&&($_REQUEST['sub']=="Submit"))
	$db->insertFeedback();?>
