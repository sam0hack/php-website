<?php

	require("header.php");
	if(isset($_SESSION['uname']))
	{
?>

  <div class="head">
  	  <div class="left">
      	<?php if (isset($_REQUEST['task']))
			{ if($_REQUEST['task']=="view_cartoon")
				{
				?>
        		<a href="?task=add_cartoon">ADD CARTOON</a>
        		<?php } else { ?>
        		<a href="?task=view_cartoon">VIEW CARTOON</a>
        <?php }}
			else
			{
		 ?>
         <a href="?task=add_cartoon">ADD CARTOON</a>
         <?php } ?>
        </div>
	  <div class="right">
		  <?php
			  if(isset($_SESSION['msg']))
			  echo $_SESSION['msg'];
		  ?>
	  </div>
  </div>
  <?php
	  if(isset($_REQUEST['task']))
		  {
			  if($_REQUEST['task']=="add_cartoon")
				  	require("add_cartoon.php");
			  if($_REQUEST['task']=="view_details")
				  	require("view_article_details.php");
					
	          if($_REQUEST['task']=="edit_cartoon")	
					require("add_cartoon.php");
	  	  	  if($_REQUEST['task']=="view_cartoon")	  
		  			require("view_cartoon.php");
	  	  	  if($_REQUEST['task']=="delete_cartoon")					
		  			$db->deleteRow("tbl_cartoon","cartoon_id='".$_REQUEST['id']."'","cartoon_man.php");	  
		  }
		else
			require("view_cartoon.php");
	  
	  require("footer.php");
	}
  ?>

