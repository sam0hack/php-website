<?php
require_once("header.php");
if(isset($_SESSION['uname']))
{
$result=$db->selectAfterJoin("*","tbl_feedback","feedback_id");
?>
<table width="810" align="center" cellpadding="3px" cellspacing="2px" class="tbl_view_news" >
	<tr>
    	<th>select</th>
    	<th>Feedback Id</th>
	    <th>Name</th>
    	<th>Email Id</th>
    	<th>Feedback</th>        
        <th>delete</th>
    </tr>
    
    
		<?php
		   	while($arr=mysqli_fetch_assoc($result))
			{
				?>
             <tr >
             <td style="font-family:Arial, Helvetica, sans-serif;"><input type="checkbox" name="check_row" /></td>
             <td style="font-family:'Lucida Console', Monaco, monospace;"><?php echo $arr['feedback_id']; ?></td>
             <td style="font-family:'MS Serif', 'New York', serif;"><?php echo $arr['name']; ?></td>
             <td style="font-family:'MS Serif', 'New York', serif;"><?php echo $arr['email']; ?></td>             
             <td class="desc" style="font-family:'MS Serif', 'New York', serif;"><?php echo $arr['feedback']; ?></td>
             <td align="center"><a href="?task=delete_feedback&id=<?php echo $arr['feedback_id'];?>"><img src="images/delet.jpg" /></a></td>
             </tr>
             <?php
			}
			If((isset($_REQUEST['task']))&&$_REQUEST['task']==delete_feedback)
				$db->deleteRow("tbl_feedback","feedback_id='".$_REQUEST['id']."'","feedback.php");
	
			 ?>
             
</table>
<?php require("footer.php");
}
?>


