<?php
	$result="";
	$row="";
	if(isset($_REQUEST['task']))
	{
		if($_REQUEST['task']==="edit_article")
		{
			$result=$db->selectAfterJoin("*","articles","article_id","article_id='".$_REQUEST['id']."'");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
		}
	}
?>
<form method="post" action="process_news.php" enctype="multipart/form-data">
  <table width="810" align="center" cellpadding="8px" cellspacing="0px" class="tbl_add_news">
	  <tr>
	  <th colspan="3" align="center" >Add New Item</th>
	  </tr>
	  <?php
	  	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_article")
		{
			?>
				<input type="hidden" name="article_id"  value="<?php echo $row['article_id'];?>" />
			<?php	
		}
	  ?>
  

      <tr>
      	<td>
        	Category Name:
        </td>
        <td>
        <?php
				$catres=$db->selectAfterJoin("cat_id,cat_name","tbl_category");
			?>
            <select name="cat_id" class="slctbx" style="font-family:Shusha, Kartika, Kokila; font-size:20px;">
            <?php 
					while($catarr=mysqli_fetch_assoc($catres))
					{
						 
						?>
                    <option value="<?php echo $catarr['cat_id'];?>" <?php if(isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_article"&&$row['cat_id']==$catarr['cat_id']){echo 'selected="selected"';} ?>><?php echo $catarr['cat_name'];?></option>
						<?php	
				}
				?>
            </select>
        </td></tr>
       <tr class="row">
	  <td width="188">Headline:</td>
	  <td width="566" ><input type="text" name="headline" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_article"){echo $row['headline'];}?>" />
	  </td>
	  </tr>
      
      <tr class="row">
	  <td width="188">Writer:</td>
	  <td width="566" ><input type="text" name="writer" class="textbox" value="<?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_article"){echo $row['writer'];}?>" />
	  </td>
	  </tr>

      <tr class="row">
	  <td width="188">Image:</td>
	  <td width="566" >
      <?php
	  		if(isset($_REQUEST['task']))
				{if($_REQUEST['task']=="add_news")
					{
						?>	
						<input type="file" name="img" style="font-family:Arial, Helvetica, sans-serif;" />	
						<?php
					}
				  if($_REQUEST['task']=="edit_article"&&!(isset($_REQUEST['q'])))
				  	{ ?>
                    <img src="upload\<?php echo $row['image']; ?>" height="200px;" width="160px"/><br />
                    <input type="hidden" name="img" value="<?php echo $row['image']; ?>" style="font-family:Arial, Helvetica, sans-serif;"/>
                    <a href="?task=edit_article&id=<?php echo $row['article_id'];?>&q=change_image">change image</a>
                    <?php 
					}
				  if($_REQUEST['task']=="edit_article"&&$_REQUEST['q']=="change_image")
				  	{ ?>
                    	<input type="file" name="img" style="font-family:Arial, Helvetica, sans-serif;" />	
                     <?php
					}
				 }
		?>
	  </td>
	  </tr>
            
	  <tr class="row">
	  <td >article:</td>
      
	  <td class="txtarea"><textarea class="txtarea" name="article"><?php if(isset($_REQUEST['task'])&& $_REQUEST['task']=="edit_article"){echo $row['article'];}?></textarea></td>
	  </tr>

      
      <tr class="row">
	  <td width="188">Date Uploaded:</td>
	  <td width="566" ><input type="text" name="date" class="textbox" style="font-family:Arial, Helvetica, sans-serif;" value="<?php echo date("d-m-y",mktime());?>" />
	  </td>
	  </tr>      
      
	  <tr>
	  <td colspan="3" align="center">
		  <input type="submit" name="sub" value="<?php if((isset($_REQUEST['task'])&&$_REQUEST['task']=="edit_article")||$_REQUEST['q']=="change_image"){echo "Update";}else {echo "Add";}?>" class="submission" />
	  </td>
	  </tr> 
      <?php 
	  	if(isset($_REQUEST['sub']))
			require("gc_news.php");
	  ?>

	  
	  </table>
  </form>