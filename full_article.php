<?php
require("fend_header.php");
$result=$db->selectAfterJoin("*","articles","article_id",NULL,"article_id='".$_REQUEST['id']."'");
$row=mysqli_fetch_assoc($result);
?>
<div>
<div style="float:left; text-wrap:supress;">
<h2 style="color:#750a20; font-family:shusha, kokila, 'times New Roman'; font-size:36px; padding:10px; margin-top:50px;">
<?php
echo $row['headline'];
?>
</h2>
<?php if($row['image']!=NULL)
{
	?>
<img src="backend/upload/<?php echo $row['image'];?>" style="max-height:400px; max-width:600px; size:landscape; " />
<?php } ?>
<div style="font-weight:inherit;text-indent:32px;font-family:Shusha, Kartika, Kokila; font-size:20px; margin:10px; max-width:530px; text-align:justify; word-wrap:break-word; word-spacing:4px; line-height:28px;text-wrap:supress; font-family:Shusha, Kartika, Kokila; color:#000; ">
<?php

 echo nl2br(htmlspecialchars($row['article'])); 
?>
</div>
</div>
<div>
<?php
require("right_col.php");
?>
</div></div>
<div style="float:left;min-width:530px;">
<ul style="padding-left:10px; padding-top:0px;">
<?php
$result1=$db->selectAfterJoin("*","articles","article_id",NULL,"cat_id='".$_REQUEST['q']."'");
while($arr1=mysqli_fetch_assoc($result1))
{
?>
<li>
<?php echo "<pre style=\" font-family:Shusha, Kartika, Kokila; font-size:28px; color:#750a20;\">".htmlspecialchars($arr1['headline'])."</pre>";?>
</li>
<?php } ?>
</ul>
</div>

<div style="float:right;">
<?php
require("fend_footer.php");
?>
</div>