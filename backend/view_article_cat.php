<?php 
	$result=$db->selectAfterJoin("*","tbl_category","cat_id");	
?>

<table width="810" align="center" cellpadding="3px" cellspacing="2px" class="tbl_view_news">
	<tr>
    	<th>select</th>
    	<th>cat_id</th>
	    <th>cat_name</th>
    	<th>description</th>
        <th>edit info</th>
        <th>delete</th>
    </tr>
    
    
		<?php
		   	while($arr=mysqli_fetch_assoc($result))
			{
				?>
             <tr>
             <td><input type="checkbox" name="check_row" /></td>
             <td><?php echo $arr['cat_id']; ?></td>
             <td><?php echo $arr['cat_name']; ?></td>
             <td class="desc"><?php echo $arr['description']; ?></td>
             <td align="center"><a href="?task=edit_article_cat&id=<?php echo $arr['cat_id'];?>"><img src="images/edit-icon..jpg" /></a></td>
             <td align="center"><a href="?task=delete_article_cat&id=<?php echo $arr['cat_id'];?>"><img src="images/delet.jpg" /></a></td>
             </tr>
             <?php
			}
	
			 ?>
             
</table>		
