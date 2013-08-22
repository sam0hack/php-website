<?php 
ob_start();
session_start();
require_once("frontend_db_class.php");
$db=new Dao();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hi" lang="hi">
<head>
<title>Awaaz-IIT Kharagpur</title>
<meta name="keywords" content="awaaz, awaaziitkgp, awaaz IITKGP" />
<meta name="description" content="The monthly campus newsletter of IIT Kharagpur voicing the student opinion. Contact us at <editor.awaaz@gmail.com" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="hi" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<font lang="hi"/>
<link rel="stylesheet" type="text/css" href="tabcontent.css" />
    <style media="screen" type="text/css">/*<![CDATA[*/@import 'stylesheet.css';/*]]>*/</style>
    <style media="screen" type="text/css">/*<![CDATA[*/@import 'demo-files/demo.css';/*]]>*/</style>
    <style type="text/css">#title,#glyphs p{font-family:"Shusha"}</style>

<link rel="stylesheet" type="text/css" href="demo.css" />
<link rel="stylesheet" href="menu.css" type="text/css" media="screen" />
<link rel="stylesheet" href="index.css" type="text/css" />
<script type="text/javascript" src="tabcontent.js">
</script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php session_start();
?>
<div id="templatemo_container" style="margin-top:10px;">
<div style="background-image:url(images/Final.png); min-width:1000px; min-height:100px;">
<img src="images/Final.png" width="1000" height="100" />
 	<div> <!--<a href="www.facebook.com/awaaziitkgp>" style="float:right;"><img src="images/fb.png" alt="image" /></a>--></div>
    <div><!--<a href="www.youtube.com/awaaziitkgp>" style="float:right;"><img src="images/youtube.jpg" alt="image" /></a>--></div>
 </div> 
<div >
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:center;">mau#ya pRYz</a></li>
      <li style=" width: 150px;"><a class="MenuBarItemSubmenu" href="#nogo" style="font-family:Shusha, Kartika, Kokila; font-size:20px; text-align:center;">janarla caOMipyanaiSap </a>
        <ul style=" width: 150px;">
          <li style=" width: 150px;"><a href="article_list.php?id=39" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:left;">saaMskRitk</a></li>
          <li style=" width: 150px;"><a href="article_list.php?id=40" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:left;">Kola</a></li>
          <li style=" width: 150px;"><a href="article_list.php?id=41" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:left;">tknaIkI</a></li>
        </ul>
      </li>
      <li><a href="article_list.php?id=42" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:center;">phla</a></li>
      <li style=" width:130px;"><a href="http://issuu.com/awaaz/docs/feb_2013?mode=window&pageNumber=1" target="_new" style="font-family:Shusha, Kartika, Kokila; font-size:20px;text-align:center;">navaInatma AMk</a></li>
      <li><a class="MenuBarItemSubmenu" href="#" style="font-family:Shusha, Kartika, Kokila; font-size:20px; text-align:center;">manaaorMjana</a>
      	<ul>
          <li><a href="article_list.php?id=36" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:left;">trMga</a></li>
          <li><a href="article_list.php?id=38" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:left;">BaaT</a></li>
          <li><a href="article_list.php?id=43" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:left;">samaIxaa</a></li>                
        </ul>
      </li>
 <!--     <li><a href="team_awaaz.php" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:center;">TIma Avaaj,a</a></li>-->
      <li><a href="feedback.php" style="font-family:Shusha, Kartika, Kokila; font-size:20px;	text-align:center;">fIDbaOk</a></li>      
       </ul></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../../SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
