        <div id="templatemo_main_rightcol" >
        	<div class="templatemo_rcol_sectionwithborder" >
            	<div id="templatemo_video_section">
                 <?php $result10=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=31");
					$row7=mysqli_fetch_assoc($result10);
					?>
                    <a href="article_list.php?id=<?php echo $row7['cat_id']; ?>">            
                    <h2 style="font-family:Shusha, Kartika, Kokila; font-size:24px;color:#000;">saMpadkIya</h2></a>                     
                    <div class="blog_box" style=",margin-bottom:0px;">  
                    <div class="newstitle">
                     <h3><a href="full_article.php?id=<?php echo $row7['article_id']; ?>" style="font-family:Shusha, Kartika, Kokila; font-size:22px; line-height:28px; color: #750a20;"><?php echo $row7['headline']; ?></a></h3>
                        <p style="font-family:Shusha, Kartika, Kokila; font-size:18px;line-height:26px; color:#000; font-weight:300; text-align:left;">
					<?php
					   $str="...";
                       echo substr($row7['article'],0,150)."<span style=\" font-family:arial;\">".$str."</span>";
					   ?>
                        </p>    
                      </div> 
                    </div>
				
            </div> 
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_blog_section">
					 <?php $result7=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=36");
					$row4=mysqli_fetch_assoc($result7);
					?>                    <a href="article_list.php?id=<?php echo $row4['cat_id']; ?>"><h2 style="font-family:Shusha, Kartika, Kokila; font-size:24px; color:#000;">trMga</h2></a>
                   
                    <div class="blog_box" style=",margin-bottom:0px;">
                        <h3><a href="full_article.php?id=<?php echo $row4['article_id']; ?>" style="font-family:Shusha, Kartika, Kokila; font-size:22px; color: #750a20;"><?php echo $row4['headline']; ?></a></h3>
                        <p style="font-family:Shusha, Kartika, Kokila;font-size:18px;line-height:26px; color:#000; text-align:left;font-weight:300;">
					<?php
					   $str="...";
                       echo substr($row4['article'],0,150)."<span style=\" font-family:arial;\">".$str."</span>";
					   ?>
                        </p>                        
                        
                    </div>
					<?php $result8=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=38");
					$row5=mysqli_fetch_assoc($result8);
					?> 
					<a href="article_list.php?id=<?php echo $row5['cat_id']; ?>">
                    <h2 style="font-family:Shusha, Kartika, Kokila; font-size:24px;color:#000;">BaaT</h2></a>
                    <?php $result8=$db->selectAfterJoin("*","articles","article_id",1,"cat_id=38");
					$row5=mysqli_fetch_assoc($result8);
					?>             
                    <div class="blog_box" style="max-height:140px;">
                        <h3><a href="full_article.php?id=<?php echo $row5['article_id']; ?>" style="font-family:Shusha, Kartika, Kokila; font-size:22px; style="color: #750a20;""><?php echo $row5['headline'] ?></a></h3>
                    <p style="font-family:Shusha, Kartika, Kokila;font-size:18px;line-height:26px; color:#000; font-weight:300; text-align:left;">
					<?php
					   $str="...";
                       echo substr($row5['article'],0,150)."<span style=\" font-family:arial;\">".$str."</span>";
					   ?>
                    </p> 
            </div> </div></div>
            <?php $result9=$db->selectAfterJoin("*","tbl_cartoon","cartoon_id",1);
				  $row6=mysqli_fetch_assoc($result9);
			?>

            	<div id="templatemo_poll_section" >
			<div><h2 style="margin-top:0px;color: #750a20; font-family:Shusha, Kartika, Kokila; font-size:22px; line-height:28px;"><?php echo $row6['Category']; ?></h2>
                
                 	<a href="cartoon.php?id=<?php echo $row6['cartoon_id']; ?>"><img src="../../backend/upload/<?php echo $row6['image']; ?>" style="height:150px; width:300px; margin-top:5px; padding-left:20px;" /></a>
          		 
					<div><a href="full_article.php?id=<?php echo $row6['cartoon_id']; ?>" style="color:#262ED2; font-family:Shusha, Kartika, Kokila; font-size:22px; line-height:28px;"> Anya kaTU-na</a></div>
                 </div>
           </div></div>