<?php 
	$result=$db->selectAfterJoin("*","articles,tbl_category","article_id","articles.cat_id=tbl_category.cat_id"
	);
	if(isset($_REQUEST['task'])&&$_REQUEST['task']=="delete_article")
	$db->deleteRow("articles","article_id='".$_REQUEST['id']."'","gc_news.php");
?>


<table width="810" align="center" cellpadding="3px" cellspacing="2px"  class="tbl_view_news">
	<tr style="max-width:810px;">
    	<th>Select</th>
    	<th>news_id</th>
        <th>Category</th>
        <th>Headline</th>
    	<th>Writer</th>
        <th>Date Uplaoded</th>
        <th>Edit Info</th>
        <th>Delete</th>
        <th></th>
    </tr>
    
    
		<?php
		   	while($arr=mysqli_fetch_assoc($result))
			{//print_r($arr);
				?>
             <tr style="max-width:810px;">
             <td><input type="checkbox" name="check_row" /></td>
             <td><?php echo $arr['article_id']; ?></td>
             <td><?php echo $arr['cat_name']; ?></td>
             <td><?php echo $arr['headline']; ?></td>
             <td><?php echo $arr['writer']; ?></td>
             <td style="font-family:Arial, Helvetica, sans-serif;"><?php echo $arr['date']; ?></td>
             <td align="center"><a href="?task=edit_article&id=<?php echo $arr['article_id'];?>"><img src="images/edit-icon..jpg" /></a></td>
             <td align="center"><a href="?task=delete_article&id=<?php echo $arr['article_id'];?>"><img src="images/delet.jpg" /></a></td>
             <td><a href="?task=view_details&id=<?php echo $arr['article_id'];?>">saMpUNa- jaanakarI</a></td>
             </tr>		
             <?php
			}?><?php
			if((isset($_REQUEST['task'])&&$_REQUEST['task']=="view_details")||(isset($_REQUEST['q'])&&$_REQUEST['q']=="change_image"))
				require("view_article_details.php");
			 ?>
</table>             
