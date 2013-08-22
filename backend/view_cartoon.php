<?php 
	$result=$db->selectAfterJoin("*","tbl_cartoon","cartoon_id");
	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="delete_cartoon")
	$db->deleteRow("tbl_cartoon","cartoon_id='".$_REQUEST['id']."'","cartoon_man.php");	  
?>


<table width="810" align="center" cellpadding="3px" cellspacing="2px" class="tbl_view_news">
	<tr>
    	<th width="30px">Select</th>
    	<th width="30px">cartoon_id</th>
        <th width="200px">
        General info
        </th>
    	<th width="225px">
        Cartoon
        </th>
      	<th width="225px">Description</th>
        <th width="50px">Edit Info</th>
        <th width="50px">Delete</th>
    </tr>
    
    
		<?php
		   	while($arr=mysqli_fetch_assoc($result))
			{//print_r($arr);
				?>
             <tr>
             <td><input type="checkbox" name="check_row" /></td>
             <td><?php echo $arr['cartoon_id']; ?></td>
             <td>
             <div style="float:left">Date Uploaded :</div>
			 <div><?php echo $arr['date']; ?></div>
             <div style="float:left">Cartoonist :</div>
			 <div><?php echo $arr['cartoonist']; ?></div>
             <div style="float:left">Category :</div>
			 <div><?php echo $arr['Category']; ?></div>            
             </td>
			 <td>
             <div style="float:left">Scenario :</div>
			 <div><?php echo $arr['scenario']; ?></div>
			 <div><?php if(!(isset($_REQUEST['q']))){ ?>
        	<img src="upload/<?php echo $arr['image'];?>" width="200" height="150" />
            <?php } ?>
            </div>          
             </td>              
             <td><?php echo $arr['description']; ?></td>


             <td align="center"><a href="?task=edit_cartoon&id=<?php echo $arr['cartoon_id'];?>"><img src="images/edit-icon..jpg" /></a>
             </td>
             <td align="center"><a href="?task=delete_cartoon&id=<?php echo $arr['cartoon_id'];?>"><img src="images/delet.jpg" /></a></td>
             </tr>
		
             <?php
			}?>
</table>             
