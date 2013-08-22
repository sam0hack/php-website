<?php
require_once("fend_header.php");
$result=$db->selectAfterJoin("*","tbl_cartoon","cartoon_id");

?>
<div>
<?php
require("right_col.php");
?>
</div>
<?php
while($arr=mysqli_fetch_assoc($result))
{
?>
<div style="max-width:580px; float:left; margin-top:40px; ">
<div><?php echo($arr['Category']);?></div>
<img src="../../backend/upload/<?php echo $arr['image']; ?>" width="580px" style="border:solid black 2px; max-height:400px;" />

</div>
<?php
}
?>
