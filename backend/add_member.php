<?php
	$result="";
	$row="";
	if(isset($_REQUEST['task']))
	{
		
		if($_REQUEST['task']==="edit_member")
		{
			
			$result=$db->selectAfterJoin("*","tbl_team","member_id","member_id='".$_REQUEST['id']."'");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
		}
		
		//print_r($row);die;
	}
?>
<form method="post" enctype="multipart/form-data" action="process_member.php">
  <table width="810" align="center" cellpadding="8px" cellspacing="0px" class="tbl_add_news">
	  <tr>
	  <th colspan="3" align="center" >Add Member</th>
	  </tr>
	  <?php
	  	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_member")
		{
			?>
				<input type="hidden" name="member_id"  value="<?php echo $row['member_id'];?>" />
			<?php	
		}
	  ?>
      <tr class="row">
	  <td width="188">Image:</td>
	  <td width="566" >
      <?php
	  		if(isset($_REQUEST['task']))
				{if($_REQUEST['task']=="add_member")
					{
						?>	
						<input type="file" name="img" style="font-family:Arial, Helvetica, sans-serif;" />	
						<?php
					}
				  if($_REQUEST['task']=="edit_member"&&!(isset($_REQUEST['q'])))
				  	{ ?>
                    <img src="upload\<?php echo $row['member_pic']; ?>" height="200px;" width="160px"/><br />
                    <input type="hidden" name="img" value="<?php echo $row['member_pic']; ?>" style="font-family:Arial, Helvetica, sans-serif;"/>
                    <a href="?task=edit_member&id=<?php echo $row['member_id'];?>&q=change_image">change image</a>
                    <?php 
					}
				  if($_REQUEST['task']=="edit_member"&&$_REQUEST['q']=="change_image")
				  	{ ?>
                    	<input type="file" name="img" style="font-family:Arial, Helvetica, sans-serif;" />	
                     <?php
					}
				 }
		?>
	  </td>
	  </tr>
       <tr class="row">
	  <td width="188">Name :</td>
	  <td width="566" ><input type="text" name="member_name" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_member"){echo $row['member_name'];}?>" />
	  </td>
	  </tr>

	  <tr class="row">
	  <td width="188">Post :</td>
	  <td width="566" ><input type="text" name="member_post" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_member"){echo $row['member_post'];}?>" />
	  </td>
	  </tr>
      
      <tr class="row">
	  <td width="188">Email id:</td>
	  <td width="566" ><input style="font-family:Arial, Helvetica, sans-serif;" type="text" name="member_email" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_member"){echo $row['member_email'];}?>" />
	  </td>
	  </tr>
      
 	  <tr class="row">
	  <td > Write Up:</td>
	  <td class="txtarea"><textarea class="txtarea" name="member_writeup"><?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_member"){echo $row['member_writeup'];}?></textarea></td>
	  </tr>
      

	  <tr>
	  <td colspan="3" align="center">
		  <input type="submit" name="sub" value="<?php if((isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_member")||$_REQUEST['q']=="change_image"){echo "Update";}else {echo "Add";}?>" class="submission" />
	  </td>
	  </tr> 
      <?php 
	  	if(isset($_REQUEST['sub']))
			require("team_awaaz.php");
	  ?>
	  
	  </table>
  </form>
