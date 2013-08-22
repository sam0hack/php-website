<?php
	require("header.php");
	if(isset($_SESSION['uname']))
	{
?>

  <div class="head">
  	  <div class="left">
      	<?php if (isset($_REQUEST['task']))
			{ if($_REQUEST['task']=="view_news")
				{
				?>
        		<a href="?task=add_news">ADD NEWS ITEM</a>
        		<?php } else { ?>
        		<a href="?task=view_news">VIEW NEWS ITEM</a>
        <?php }}
			else
			{
		 ?>
         <a href="?task=add_news">ADD NEW ITEM</a>
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
			  if($_REQUEST['task']=="add_news")
				  	require("add_news.php");
			  if($_REQUEST['task']=="view_details")
				  	require("view_article_details.php");
	          if($_REQUEST['task']=="edit_article")	
					require("add_news.php");
	  	  	  if($_REQUEST['task']=="view_news")	  
		  			require("view_news.php");
	  	  	  if($_REQUEST['task']=="delete_article")					
		  			$db->deleteRow("articles","article_id='".$_REQUEST['id']."'","gc_news.php");	  
		  }
		else
			require("view_news.php");
	  
	  require("footer.php");
	}
  ?>

