<?php
require_once("header.php");
if(isset($_SESSION['uname']))
{
?>

  <div class="head">
  	  <div class="left">
      	<?php if (isset($_REQUEST['task']))
			{ if($_REQUEST['task']=="view_team")
				{
				?>
        		<a href="?task=add_member">ADD MEMBER</a>
        		<?php } else { ?>
        		<a href="?task=view_team">VIEW TEAM</a>
        <?php }}
			else
			{
		 ?>
         <a href="?task=add_member">ADD MEMBER</a>
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
			  if($_REQUEST['task']=="add_member")
				  	require("add_member.php");
	          if($_REQUEST['task']=="edit_member")
			  		require("add_member.php");
	  	  	  if($_REQUEST['task']=="view_team")	  
		  			require("view_team.php");
	  	  	  if($_REQUEST['task']=="delete_member")
		  			$db->deleteRow("tbl_team","member_id='".$_REQUEST['id']."'","team_awaaz.php");	  
		  }
		else
			require("view_team.php");
	  
	  require("footer.php");
}
  ?>
