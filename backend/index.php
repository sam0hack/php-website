<?php 
	require("header.php");
	session_start();
?>
<?php
	if(isset($_REQUEST['sub']))
	{
		$db->loginProcess();		
	}
?>

<div class="login_panel">
<div class="head">admin login</div>
  <form method="post">
    <table cellspacing="10px" cellpadding="5px" align="right">
    	<tr><td colspan="3"><?php if(isset($_SESSION['error_msg'])){echo $_SESSION['error_msg'];}?></td></tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="uname" class="textbox" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="pwd" class="textbox" /></td>
      </tr>
      <tr>
      <td colspan="3">
<?php  require_once('recaptchalib.php');
  $publickey = "6Lcz0t4SAAAAABglz02_Kh6D8ufXQOOOBhJTV1IA"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
  ?>
  </td></tr>
  </tr>
      <tr>
        <td colspan="3"><input type="submit" name="sub" value="Authenticate" class="submission"/></td>
      </tr>
    </table>
  </form>
</div>
<?php
require("footer.php");
?>