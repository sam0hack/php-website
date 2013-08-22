<?php 
	$result=$db->selectAfterJoin("*","tbl_team","member_id");
	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="delete_member")
	$db->deleteRow("tbl_team","member_id='".$_REQUEST['id']."'","team_awaaz.php");	  
?>


<table width="810" align="center" cellpadding="3px" cellspacing="2px" class="tbl_view_news">
	<tr style="max-width:810px;">
    	<th>Select</th>
    	<th>member_id</th>
        <th>name</th>
        <th>Post</th>
        <th>Member's pic</th>
    	<th>Write Up</th>
      	<th>Email Id</th>
        <th>Edit Info</th>
        <th>Delete</th>

    </tr>
    
    
		<?php
		   	while($arr=mysqli_fetch_assoc($result))
			{//print_r($arr);
				?>
             <tr>
             <td><input type="checkbox" name="check_row" /></td>
             <td><?php echo $arr['member_id']; ?></td>
             <td><?php echo $arr['member_name']; ?></td>
             <td><?php echo $arr['member_post']; ?></td>
             <td style="font-family:Arial, Helvetica, sans-serif;">
                 <img src="upload\<?php echo $arr['member_pic']; ?>" height="100px;" width="100px"/><br />
			</td>
             <td style="max-width:200px; word-wrap:break-word;"><?php echo $arr['member_writeup']; ?></td>
	         <td style="font-family:Arial, Helvetica, sans-serif;"><?php echo $arr['member_email']; ?></td>

             <td align="center"><a href="?task=edit_member&id=<?php echo $arr['member_id'];?>"><img src="images/edit-icon..jpg" /></a></td>
             <td align="center"><a href="?task=delete_member&id=<?php echo $arr['member_id'];?>"><img src="images/delet.jpg" /></a></td>
             </tr>
		
             <?php
			}?>
</table>             