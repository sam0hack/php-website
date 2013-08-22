<?php
require_once("fend_header.php");
$result=$db->selectAfterJoin("DISTINCT member_post","tbl_team","member_post");
?>

<img src="images/IMG_2074.JPG" height="400px;" width="600px;" align="middle"/>
<?php while($arr=mysqli_fetch_assoc($result))
{
?>
<ul>
<li>
<h2 style="font-size:25px; font-family:Shusha, Kartika, Kokila; font-weight:300; line-height:30px;"><?php echo $arr['member_post'];?></h2>
<ul>
<?php
	$result2=$db->selectAfterJoin("*","tbl_team",NULL,NULL,"member_post='".$arr['member_post']."'");
	while($arr2=mysqli_fetch_assoc($result2))
	{
?>
<li style="font-family:Shusha, Kartika, Kokila; font-size:22px; font-weight:300; line-height:28px; text-indent:hanging; list-style:none;"><?php echo $arr2['member_name']; ?></li>

<?php
	}
?>
</ul>
<?php
}
echo "</li> </br> <li>";	

?>
</li>
</ul>
<?php
require_once("fend_footer.php");
?>
