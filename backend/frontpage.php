<?php
	require("header.php");
	if(isset($_SESSION['uname']))
	{
	if(isset($_REQUEST['articles']))
		header("Location:gc_news.php");
	if(isset($_REQUEST['feedback']))
		header("Location:feedback.php");		
	if(isset($_REQUEST['article_cat']))
		header("Location:article_cat.php");
	if(isset($_REQUEST['cartoon_man']))
		header("Location:cartoon_man.php");
	if(isset($_REQUEST['team_awaaz']))
		header("Location:team_awaaz.php");

	$result=$db->selectAll("tbl_dashboard");
?>
<h1>DASHBOARD</h1>
<div class="dboard_mid">
<table>
	<tr>
		<?php
			$cnt=1;
			while($arr=mysqli_fetch_assoc($result))
			{
				?>
				 <td>
  <div class="block">
    	<div class="img"><img src="images/<?php echo $arr['block_img'];?>" width="50" height="50" /></div>
        <div class="title"><a href="?<?php echo $arr['block_action']?>"><?php echo $arr['block_title'];?></a></div>
  </div>
 				</td>
				<?php
				if($cnt%4==0)
					echo "</tr><tr>";
				$cnt++;			
			}
		?>
   </tr>
</table>
</div>
<?php
require("footer.php");
	}
?>
