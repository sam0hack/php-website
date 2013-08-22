<?php
	$result="";
	$row="";
	if(isset($_REQUEST['task']))
	{
		
		if($_REQUEST['task']==="edit_cartoon")
		{
			
			$result=$db->selectAfterJoin("*","tbl_cartoon","cartoon_id","cartoon_id='".$_REQUEST['id']."'");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
		}
		
		//print_r($row);die;
	}
?>
<form method="post" enctype="multipart/form-data" action="process_cartoon.php">
  <table width="810" align="center" cellpadding="8px" cellspacing="0px" class="tbl_add_news">
	  <tr>
	  <th colspan="3" align="center" >Add Cartoon</th>
	  </tr>
	  <?php
	  	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_cartoon")
		{
			?>
				<input type="hidden" name="cartoon_id"  value="<?php echo $row['cartoon_id'];?>" />
			<?php	
		}
	  ?>
      <tr class="row">
	  <td width="188">Image:</td>
	  <td width="566">
      <?php
	  		if(isset($_REQUEST['task']))
				{if($_REQUEST['task']=="add_cartoon")
					{
						?>	
						<input type="file" name="img"  />	
						<?php
					}
				  if($_REQUEST['task']=="edit_cartoon"&&!(isset($_REQUEST['q'])))
				  	{ ?>
                    <img src="upload\<?php echo $row['image']; ?>" /><br />
                    <input type="hidden" name="img" value="<?php echo $row['image']; ?>" />
                    <a href="?task=edit_cartoon&id=<?php echo $row['cartoon_id'];?>&q=change_image">change image</a>
                    <?php 
					}
				  if($_REQUEST['task']=="edit_cartoon"&&$_REQUEST['q']=="change_image")
				  	{ ?>
                    	<input type="file" name="img"  />	
                     <?php
					}
				 }
		?>
	  </td>
	  </tr>
       <tr class="row">
	  <td width="188">Cartoonist :</td>
	  <td width="566" ><input type="text" name="cartoonist" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_cartoon"){echo $row['cartoonist'];}?>" />
	  </td>
	  </tr>

	  <tr class="row">
	  <td width="188">Scenario :</td>
	  <td width="566" ><input type="text" name="scenario" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_cartoon"){echo $row['scenario'];}?>" />
	  </td>
	  </tr>
      
      <tr class="row">
	  <td width="188">Date Uploaded:</td>
	  <td width="566" ><input type="text" name="date" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_cartoon"){echo $row['date'];}?>" style="font-family:Arial, Helvetica, sans-serif;"/>
	  </td>
	  </tr>

	  <tr class="row">
	  <td width="188">Category :</td>
	  <td width="566" style="font-family:Shusha, Kartika, Kokila;">
		  <select name="category" class="slctbx">
			  <option value="pMjaI DUD" <?php if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_cartoon"&&$row['category']=="pMjaI DUD"){echo 'selected="selected"';}?>>pMjaI DUD</option>
			  <option value="kaTU-na kaonaa" <?php if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_cartoon"&&$row['category']=="kaTU-na kaonaa"){echo 'selected="selected"';}?>>kaTU-na kaonaa</option>
			  <option value="Anya" <?php if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_cartoon"&&$row['category']=="Anya"){echo 'selected="selected"';}?>>Anya</option>
		  </select>
	 </td>
	  </tr>      
 	  <tr class="row">
	  <td > description:</td>
	  <td class="txtarea"><textarea class="txtarea" name="description"><?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_cartoon"){echo $row['description'];}?></textarea></td>
	  </tr>
      

	  <tr>
	  <td colspan="3" align="center">
		  <input type="submit" name="sub" value="<?php if((isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_cartoon")||$_REQUEST['q']=="change_image"){echo "Update";}else {echo "Add";}?>" class="submission" />
	  </td>
	  </tr> 
      <?php 
	  	if(isset($_REQUEST['sub']))
			require("cartoon_man.php");
	  ?>
	  
	  </table>
  </form>
