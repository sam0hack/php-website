<?php
require_once("fend_header.php");
?>
<?php if(isset($_SESSION['msg']))
	echo "<script>alert('".$_SESSION['msg']."')</script>";
	session_destroy();
?>

	<?php
		$result2=$db->selectAfterJoin("*","articles","article_id","1","cat_id=30");
		$row1=mysqli_fetch_assoc($result2);
	?>
    
<div class="newsblock">

<div style="min-width:500px;">
	<h2 style="margin-left:0px;">
	<a href="full_article.php?id=<?php echo $row1['article_id']; ?>&q=<?php echo $row1['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila;	font-size:24px;	font-weight:300; color:#750a20;	line-height:30px; text-decoration:none;">
    	<?php echo($row1['headline']); ?>
	</a>    
    </h2>
</div>

    
    <div id="light8" class="white_content" style="height:500px; max-width:600px;" >         			
	    <img src="../../backend/upload/<?php echo $row1['image'];?>" style="max-height:400px; max-width:500px; resize:both;"/>
    	    <div class="close"> 
        		<a href = "javascript:void(0)" onclick = "document.getElementById('light8').style.display='none';document.getElementById('fade8').style.display='none';"><img src="images/close.jpg" style="padding:0px; margin:0px;" /></a>
             </div>
     </div>

     <div id="fade8" class="black_overlay" style="height:575px; margin-left:90px; width:720px;"></div>

    <div style="float:left;">
	<a href="javascript:void(0)" onClick="document.getElementById('light8').style.display='block';document.getElementById('fade8').style.display='block';" style="margin-top:10px;">

       	<img src="../../backend/upload/<?php echo $row1['image'];?>" alt="image" width="280" height="200" style="float:left; margin-top:10px;" />

     </a>
	</div>
    
    <span class="intro_article" >
    	<p style="color:#000; text-align:justify; max-width:330px; font-family:Shusha, Kartika, Kokila; font-size:20px; float:left;">
 	       <?php
			   $str="...";
               echo substr($row1['article'],0,570)."<span style=\" font-family:arial;\">".$str."</span>";
		   ?>
        </p>
    </span>
</div>

<div class="vid_box">

    <iframe width="250" height="200" src="https://www.youtube.com/embed/fEVxQIsdfrw"></iframe>
	<a ref="http://www.youtube.com/user/awaaziitkgp" target="_blank"><p style="font-family:Shusha, Kartika, Kokila; font-size:22px;">Anya vaIiDyaao</p></a>   

</div>

<!-- end of first division -->

<!-- google map API-->
<div class="campus_map">
<div>
<a href="https://www.google.com/fusiontables/embedviz?q=select+col1+from+1IjSNOsqauABXCO0Iv4OxrFCcOoO129vWvW_gXk0&viz=MAP&h=false&lat=22.320810075914785&lng=87.3034440423279&t=1&z=16&l=col1&y=2&tmplt=2&hml=KML" style="font-family:Shusha, Kartika, Kokila; font-size:24px;"> kOmpsa kao jaanaoM</a>
</div>
<iframe width="900" height="500" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col1+from+1IjSNOsqauABXCO0Iv4OxrFCcOoO129vWvW_gXk0&amp;viz=MAP&amp;h=false&amp;lat=22.320452777470337&amp;lng=87.31125463497926&amp;t=1&amp;z=16&amp;l=col1&amp;y=2&amp;tmplt=2&amp;hml=KML" style="margin-top:10px;"></iframe> 
</div>
<!-- map ends-->

	<?php
		$result3=$db->selectAfterJoin("*","articles","article_id","1","cat_id=28");
		$row2=mysqli_fetch_assoc($result3);
	?>
    

<div class="newsblock2">

<div style="min-width:500px;">
	<h2 style="margin-left:0px;">
	<a href="full_article.php?id=<?php echo $row2['article_id']; ?>&q=<?php echo $row2['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila;	font-size:24px;	font-weight:250; color:#750a20;	line-height:30px; text-decoration:none;">
    	<?php echo($row2['headline']); ?>
	</a>    
    </h2>
</div>
    
    <div id="light7" class="white_content" style="height:500px; max-width:600px;" >         			
	    <img src="../../backend/upload/<?php echo $row2['image'];?>" style="max-height:400px; max-width:500px; resize:both;"/>
    	    <div class="close"> 
        		<a href = "javascript:void(0)" onclick = "document.getElementById('light7').style.display='none';document.getElementById('fade8').style.display='none';"><img src="images/close.jpg" style="padding:0px; margin:0px;" /></a>
             </div>
     </div>

     <div id="fade7" class="black_overlay" style="height:575px; margin-left:90px; width:720px;"></div>

    <div style="float:left;">
	<a href="javascript:void(0)" onClick="document.getElementById('light7').style.display='block';document.getElementById('fade7').style.display='block';" style="margin-top:10px;">

       	<img src="../../backend/upload/<?php echo $row2['image'];?>" alt="image" width="230" height="180" style="float:left; margin-top:10px;" />

     </a>
	</div>
    
    <span class="intro_article2" >
    	<p style="color:#000; text-align:justify; max-width:330px; font-family:Shusha, Kartika, Kokila; font-size:20px; float:left;">
 	       <?php
			   $str="...";
               echo substr($row1['article'],0,500)."<span style=\" font-family:arial;\">".$str."</span>";
		   ?>
        </p>
    </span>
</div>

 <div class="fb" id="fb" style=" height:500px;float:right; margin-top:0px; min-width:250px; float:right;"><br/>
 <iframe src="http://www.facebook.com/plugins/likebox.php?id=146188872068143+&amp;width=250&amp;connections=10&amp;stream=true&amp;header=false&amp;height=565" scrolling="no" frameborder="0"
  style="border:1px solid #a1a1a1;backgroud-color:#f1f1f1; overflow:hidden; min-width:365px; height:570px; background-color:#FFF;" allowTransparency="true" name="fb">
  
 </iframe>
</div>     


   <div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
<?php
$result11=$db->selectAfterJoin("*","tbl_category",NULL,6,"cat_id>31");
while($arr4=mysqli_fetch_assoc($result11))
{
?>              
    <li  class="TabbedPanelsTab" tabindex="0" style="font-family:Shusha, Kartika, Kokila; font-size:18px;"><?php echo $arr4['cat_name']; ?></a></li>
<?php 
}
?>
  </ul>
  
  
  <div class="TabbedPanelsContentGroup" style="width:600px;">
    <div class="TabbedPanelsContent">
      <?php
	  $result12=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=32");
	  $row7=mysqli_fetch_assoc($result12);
	  ?>
    	<div style="float:left; max-width:200px;">
        	<h2 style="font-size:22px; line-height:28px;"><a href="full_article.php?id=<?php echo $row7['article_id'];?>&q=<?php echo $row7['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila"><?php echo $row7['headline']; ?></h2></a>  
            <?php if($row7['image']!=NULL)
			{ ?>
					<img src="../../backend/upload/<?php echo $row7['image'];?>" height="100px" width="100px" style="margin-top:10px;"/>
			<?php } ?>		 <div style="max-height:210px; font-size:18px; margin-top:10px; line-height:26px;>"  
                       <p style="color:#000; text-wrap:supress; word-break:break-all; text-align:justify">
					<?php
                       echo substr($row7['article'],0,300);
					   ?>
                       </p></div>
        </div>
        <span style="float:right; max-width: 300px; ">
        <ul style="margin-top:50px; margin-left:0px; padding:10px; float:left;">
      <?php
	  $result13=$db->selectAfterJoin("*","articles","article_id",5,"cat_id=32");
	  while($arr5=mysqli_fetch_assoc($result13))
	  {?>
      <li style="font-family:Shusha, Kartika, Kokila; font-size:24px; max-width:350px; padding:10px; font-weight:300; font-size:22px; line-height:28px;"><a href="full_article.php?id=<?php echo $arr5['article_id'];?>&q=<?php echo $arr5['cat_id']; ?>">
	  	<?php echo $arr5['headline'];?>
        </li></a>
      <?php
	  }
	  ?>        
      </ul>
        </span>
    </div>


    <div class="TabbedPanelsContent">
      <?php
	  $result14=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=33");
	  $row8=mysqli_fetch_assoc($result14);
	  ?>
    	<div style="float:left; max-width:200px;">
        <a href="full_article.php?id=<?php echo $row8['article_id'];?>&q=<?php echo $row8['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila"><h2 style="font-size:22px; line-height:28px;"><?php echo $row8['headline']; ?></h2></a>
			<?php if($row8['image']!=NULL)
			{ ?>
					<img src="../../backend/upload/<?php echo $row8['image'];?>" height="100px" width="100px" style="margin-top:10px;"/>
             <?php } ?>
					 <div style="max-height:210px;font-size:18px; margin-top:10px; line-height:26px;>"  
                       <p style="color:#000; text-wrap:supress; word-break:break-all; text-align:justify">
					<?php
					   $str="...";
                       echo substr($row8['article'],0,390)."<span style=\"display:inline; font-family:arial;\">".$str."</span>";
					   ?>
                           
                       </p></div>
        </div>
        <span style="float:right; max-width: 300px; ">
        <ul style="margin-top:50px; margin-left:0px; padding:10px; float:left;">
              <?php
	  $result15=$db->selectAfterJoin("*","articles","article_id",5,"cat_id=33");
	  while($arr6=mysqli_fetch_assoc($result15))
	  {?>
      <li style="font-family:Shusha, Kartika, Kokila; font-size:24px; max-width:350px; padding:10px; font-weight:300; font-size:22px; line-height:28px;"><a href="full_article.php?id=<?php echo $arr6['article_id'];?>&q=<?php echo $arr6['cat_id']; ?>">
	  	<?php echo $arr6['headline'];?>
        </li></a>
      <?php
	  }
	  ?>        
      </ul>
        </span>
    </div>

    <div class="TabbedPanelsContent">
      <?php
	  $result16=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=34");
	  $row9=mysqli_fetch_assoc($result16);
	  ?>
    	<div style="float:left; max-width:200px;">
<a href="full_article.php?id=<?php echo $row9['article_id'];?>&q=<?php echo $row9['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila"><h2 style="font-size:22px; line-height:28px;"><?php echo $row9['headline']; ?></h2></a>
				<?php 
				if($row9['image']!=NULL)
				{		
				?>
					<img src="../../backend/upload/<?php echo $row9['image'];?>" height="100px" width="100px" style="margin-top:10px;"/>
                <?php } ?>
					 <div style="max-height:210px; font-size:18px; margin-top:10px; line-height:26px;>"  
                       <p style="color:#000; text-wrap:supress; word-break:break-all; text-align:justify;">
					<?php
					   $str="...";
                       echo substr($row9['article'],0,390)."<span style=\"display:inline; font-family:arial;\">".$str."</span>";
					   ?>
                       </p></div>
        </div>
        <span style="float:right; max-width: 300px; ">
        <ul style="margin-top:50px; margin-left:0px; padding:10px; float:left;">
        <?php
	  $result161=$db->selectAfterJoin("*","articles","article_id",5,"cat_id=34");
	  while($arr7=mysqli_fetch_assoc($result161))
	  {?>
       <li style="font-family:Shusha, Kartika, Kokila; font-size:24px; max-width:350px; padding:10px; font-weight:300; font-size:22px; line-height:28px;"><a href="full_article.php?id=<?php echo $arr7['article_id'];?>&q=<?php echo $arr7['cat_id']; ?>">
	  	<?php echo $arr7['headline'];?>
        </li></a>
      <?php
	  }
	  ?>        
      </ul>
        </span>
    </div>
    <div class="TabbedPanelsContent">
      <?php
	  $result17=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=35");
	  $row10=mysqli_fetch_assoc($result17);
	  ?>
    	<div style="float:left; max-width:200px;">
 <a href="full_article.php?id=<?php echo $row10['article_id'];?>&q=<?php echo $row10['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila"><h2 style="font-size:22px; line-height:28px;"><?php echo $row10['headline']; ?></h2></a>
 				<?php
				if($row10['image']!=NULL)
				{ ?>
					<img src="../../backend/upload/<?php echo $row10['image'];?>" height="100px" width="100px" style="margin-top:10px;"/>
				<?php } ?>
                	 <div style="max-height:210px; font-size:18px; margin-top:10px; line-height:26px;>"  
                       <p style="color:#000; text-wrap:supress; word-break:break-all; text-align:justify">
					<?php
					   $str="...";
                       echo substr($row10['article'],0,390)."<span style=\"display:inline; font-family:arial;\">".$str."</span>";
					   ?>
                       </p></div>
        </div>
        <span style="float:right; max-width: 300px; ">
        <ul style="margin-top:50px; margin-left:0px; padding:10px; float:left;">
        <?php
	  $result18=$db->selectAfterJoin("*","articles","article_id",5,"cat_id=35");
	  while($arr8=mysqli_fetch_assoc($result18))
	  {?>
<li style="font-family:Shusha, Kartika, Kokila; font-size:22px; max-width:350px; padding:10px; font-weight:300; font-size:24px; line-height:28px;"><a href="full_article.php?id=<?php echo $arr8['article_id'];?>&q=<?php echo $arr8['cat_id']; ?>">
	  	<?php echo $arr8['headline'];?>
        </li></a>
      <?php
	  }
	  ?>        
      </ul>
        </span>
    </div>
    <div class="TabbedPanelsContent">
      <?php
	  $result19=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=36");
	  $row11=mysqli_fetch_assoc($result19);
	  ?>
    	<div style="float:left; max-width:200px;">
 <a href="full_article.php?id=<?php echo $row11['article_id'];?>&q=<?php echo $row11['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila"><h2 style="font-size:22px; line-height:28px;"><?php echo $row11['headline']; ?></h2></a>
				<?php if($row11['image']!=NULL)
				{ ?>	
                    <img src="../../backend/upload/<?php echo $row11['image'];?>" height="100px" width="100px" style="margin-top:10px;"/>
				<?php } ?>	 <div style="max-height:210px; font-size:18px; margin-top:10px; line-height:26px;>"  
                       <p style="color:#000; text-wrap:supress; word-break:break-all; text-align:justify;">
					<?php
					   $str="...";
                       echo substr($row11['article'],0,390)."<span style=\"display:inline; font-family:arial;\">".$str."</span>";
					   ?>
                       </p></div>
        </div>
        <span style="float:right; max-width: 300px; ">
        <ul style="margin-top:50px; margin-left:0px; padding:10px; float:left;">
       <?php
	  $result20=$db->selectAfterJoin("*","articles","article_id",5,"cat_id=36");
	  while($arr9=mysqli_fetch_assoc($result20))
	  {?>
<li style="font-family:Shusha, Kartika, Kokila; font-size:22px; max-width:350px; padding:10px; font-weight:300; line-height:28px;"><a href="full_article.php?id=<?php echo $arr9['article_id'];?>&q=<?php echo $arr9['cat_id']; ?>"><?php echo $arr9['headline'];?>
        </li></a>
      <?php
	  }
	  ?>        
      </ul>
        </span>
    </div>
    <div class="TabbedPanelsContent">
      <?php
	  $result21=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=37");
	  $row12=mysqli_fetch_assoc($result21);
	  ?>
    	<div style="float:left; max-width:200px;">
 <a href="full_article.php?id=<?php echo $row12['article_id'];?>&q=<?php echo $row12['cat_id']; ?>" style="font-family:Shusha, Kartika, Kokila"><h2 style="font-size:22px; line-height:28px;"><?php echo $row12['headline']; ?></h2></a>
			<?php if($row12['image']!=NULL)
			{ ?>
            <img src="../../backend/upload/<?php echo $row12['image'];?>" height="100px" width="100px" style="margin-top:10px;"/>
            <?php } ?>
					 <div style="max-height:210px; font-size:18px; margin-top:10px; line-height:26px;>"  
                       <p style="color:#000; text-wrap:supress; word-break:break-all; text-align:justify;">
					<?php
					   $str="...";
                       echo substr($row12['article'],0,390)."<span style=\"display:inline; font-family:arial;\">".$str."</span>";
					   ?>
                       </p></div>
        </div>
        <span style="float:right; max-width: 300px; ">
        <ul style="margin-top:50px; margin-left:0px; padding:10px; float:left;">
		<?php
	  $result22=$db->selectAfterJoin("*","articles","article_id",5,"cat_id=37");
	  while($arr10=mysqli_fetch_assoc($result22))
	  {?>
<li style="font-family:Shusha, Kartika, Kokila; max-width:350px; padding:10px; font-weight:300; font-size:22px; line-height:28px;"><a href="full_article.php?id=<?php echo $arr10['article_id'];?>&q=<?php echo $arr10['cat_id']; ?>">	
  	<?php echo $arr10['headline'];?>
        </li></a>
      <?php
	  }
	  ?>        
      </ul>
        </span>
    </div>

  </div>
<!--      <div id="cont3" style="width: 600px; margin-top:20px; font-family:Arial, Helvetica, sans-serif;">
      <div id="con33" style="font-family:Shusha, Kartika, Kokila; font-size:22px; line-height:28px;">sauiK-yaaÐ</div>
<div id="con333" style=" background-color:#E0F0F0;"><marquee direction="up" onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="4" height="200" style="font-family:Shusha, Kartika, Kokila; font-size:18px; line-height:26px; font-weight:150; list-style-type:disc;">

<?php
$result10=$db->selectAfterJoin("*","articles","article_id",8);
$i=0;
while(($arr4=mysqli_fetch_assoc($result10)))
{ ?>
<a href="full_article.php?id=<?php echo $arr4['article_id']; ?>">
<?php   
echo $arr4['headline'];

?>
</a><br />
<?php
}
?>
</a>
</marquee></div>
    </div>-->

</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>



