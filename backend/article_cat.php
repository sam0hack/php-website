<?php
require("header.php");
if(isset($_SESSION['uname']))
{
?>
  <div class="head">
  	  <div class="left">
      	<?php if (isset($_REQUEST['task']))
			{ if($_REQUEST['task']=="view_article_cat")
				{
				?>
        		<a href="?task=add_article_cat">ADD NEW CATEGORY</a>
        		<?php } else { ?>
        		<a href="?task=view_article_cat">VIEW CATEGORY</a>
        <?php }}
			else
			{
		 ?>
         <a href="?task=add_article_cat">ADD NEW CATEGORY</a>
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
			  if($_REQUEST['task']=="add_article_cat")
				  	require("add_article_cat.php");
	          if($_REQUEST['task']=="edit_article_cat")	
					require("add_article_cat.php");
	  	  	  if($_REQUEST['task']=="view_article_cat")	  
		  			require("view_article_cat.php");
	  	  	  if($_REQUEST['task']=="delete_article_cat")					
		  			$db->deleteRow("tbl_category","cat_id='".$_REQUEST['id']."'","article_cat.php");	  
		  }
		else
			require("view_article_cat.php");
	  
	  require("footer.php");}
  ?>