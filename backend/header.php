<?php
 ob_start();
 	session_start();
	require_once("db_class.php");
	$db=new Dao();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>awaaz</title>
</head>

<body topmargin="20px">
<div class="wrapper">
	<div class="header">
    	<div class="left">
        <div class="upper" ></div>
       	<div class="lower" align="center" ><B>AWAAZ</B></div>

      </div>
   	  <div class="center">
      
      	<?php
        if(isset($_SESSION['uname']))
        {
        	echo "Hello ".ucfirst($_SESSION['uname'])."<br />";
            echo "What would you like to do ?";
		?>
        <a href="frontpage.php" >DASHBOARD</a>
        
		<?php            
        }

		else
			echo "Welcome to online awaaz";
/*		require_once("awaaz\counter14 (1)\counter.php");		*/
        ?>	
        
      </div>
        <p> </p>
        <p> </p>

        <?php
            if(isset($_SESSION['uname']))
	       	{ 
				?>
        <div class="right">
         <a href="../index.php?q=log_out"> <img src="images/logout.jpg" /><div style="text-align:center; font:'Monotype Corsiva', 'MS Gothic', 'MS Serif'; font-size:20px; font-weight:600; text-decoration:none;">logout</div></a>
        <div class="lout"></div>
                <?php
			}
			if(isset($_REQUEST['q'])&&($_REQUEST['q']=="log_out"))
				{
					session_destroy();
				}
		?></div>
        </div>