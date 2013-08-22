<?php
	$result="";
	$row="";
	if(isset($_REQUEST['task']))
	{
		if($_REQUEST['task']==="edit_article_cat")
		{
			$result=$db->selectAfterJoin("*","tbl_category","cat_id","cat_id='".$_REQUEST['id']."'");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
		}
	}
?>
<form method="post" action="process_cat.php" >
  <table width="810" align="center" cellpadding="8px" cellspacing="0px" class="tbl_add_news">
	  <tr>
	  <th colspan="3" align="center" >Add New Categories</th>
	  </tr>
	  <?php
	  	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_article_cat")
		{
			?>
				<input type="hidden" name="cat_id"  value="<?php echo $row['cat_id'];?>" />
			<?php	
		}
	  ?>
	  <tr class="row">
	  <td width="188">Category name:</td>
	  <td width="566" ><input type="text" name="cat_name" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_article_cat"){echo $row['cat_name'];}?>" />
	  </td>
	  </tr>
	  <tr class="row">
	  <td >Category details:</td>
	  <td class="txtarea"><textarea class="txtarea" name="description"><?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_article_cat"){echo $row['description'];}?></textarea></td>
	  </tr>
      <tr class="row">
	  <td width="188">rel :</td>
	  <td width="566" ><input type="text" name="rel" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_article_cat"){echo $row['rel'];}?>" />
	  </td>
	  </tr>

      
	  <tr>
	  <td colspan="3" align="center">
		  <input type="submit" name="sub" value="<?php if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_article_cat"){echo "Update";}else{echo "Add";}?>" class="submission" />
	  </td>
	  </tr>
      <?php 
	  	if(isset($_REQUEST['sub']))
			
			require("article_cat.php");
			
	  ?>
	  
	  </table>
  </form>
