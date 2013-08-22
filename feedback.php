<?php 
require_once("fend_header.php");
?>

<form action="process_feedback.php" method="post" >
<table style="margin-left:200px; margin-top:50px; border:solid #B2C6DA 4px; border-radius:8px; margin-bottom:50px;" width="541" cellspacing="5" cellpadding="5">
  <tr style="background-image: url(images/headline%20back.jpg); background-repeat:repeat-x;">
    <td colspan="3" style="text-align:center;">FEEDBACK FORM</td>
  </tr>
  <tr>
    <td width="97">Name</td>
    <td width="8">:</td>
    <td width="384">
    <input type="text" style="min-width:380px;" name="fback_name"/>
    </td>
  </tr>
  <tr>
    <td>Email-Id</td>
    <td>:</td>
    <td>
    <input type="text" style="min-width:380px;" name="fback_email"/>
    </td>
  </tr>
  <tr>
    <td>Feedback</td>
    <td>:</td>
    <td>
    <textarea style="min-width:380px; min-height:60px;"  name="fback_feedback"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align:center;">
    <input type="submit" value="Submit" style="width:100px; text-align:center;" name="sub"/>
    </td>
  </tr>
</table>
</form>
<?php
require("fend_footer.php");
?>