<?php 
	require_once("fend_header.php");
?>

<?php
	$result=$db->selectAfterJoin("*","articles","article_id",NULL,"cat_id='".$_REQUEST['id']."'");
	while($arr=mysqli_fetch_assoc($result))
	{
?>
<div style="margin-top:20px; border-radius:10px; border:solid #B2C6DA 1px; padding:0px; padding-bottom:10px;">
	<h2 style="font-family:Shusha, Kartika, Kokila; font-size:26px; padding-top:4px; padding-left:15px; color:#750a20; background-image:url(images/headline%20back.jpg); background-repeat:repeat-x; min-height:30px; border-radius:10px; "><?php echo $arr['headline'];?></h2>
	<p style="font-family:Shusha, Kartika, Kokila; font-size:20px; text-align:left; line-height:28px;">
	<?php 
		$str="...";
		echo substr($arr['article'],0,350)."<span style=\" font-family:arial;\">".$str."</span>"; 
	?>
	<a href="full_article.php?id=<?php echo $arr['article_id'];?>&q=<?php echo $arr['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila">pUrI Kbar</a>
</p>
</li>
</div>
<?php
	}
?>
<div style="margin-top:30px;">
<?php
	require("fend_footer.php");
?>
</div>