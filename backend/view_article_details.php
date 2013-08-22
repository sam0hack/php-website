<?php
			$result1=$db->selectAfterJoin("*","articles,tbl_category","article_id","article_id='".$_REQUEST['id']."'");	
			$arr1=mysqli_fetch_assoc($result1);
?>
    <table class="tbl_add_news" align="center">  
		<tr class="row">
        <td width="188">Cover Image</td>
        <td ><?php if(!(isset($_REQUEST['q']))){ ?>
        	<img src="upload/<?php echo $arr1['image'];?>" width="100" height="125" />

            <?php } ?>
		</td>
        </tr>
        <tr class="row">
        <td width="188">Article id</td>
        <td width="566"><?php echo $arr1['article_id']; ?></td>
        </tr>    
        <tr class="row">
        <td width="188">Headline</td>
        <td width="566" style="font-family:Shusha, Kartika, Kokila"><?php echo $arr1['headline']; ?></td>
        </tr> 
        <tr class="row">
        <td width="188">Category name</td>
        <td width="566" ><?php echo $arr1['cat_name']; ?></td>
        </tr>
        <tr class="row">
        <td width="188">Writer</td>
        <td width="566" style="font-family:Shusha, Kartika, Kokila"><?php echo $arr1['author']; ?></td>
        </tr>
        <tr class="row">
        <td width="188">Article</td>
        <td width="566" style="font-family:Shusha, Kartika, Kokila"><?php echo $arr1['article']; ?></td>
        </tr>
        <tr class="row">
        <td width="188">Summary</td>
        <td width="566" style="font-family:Shusha, Kartika, Kokila"><?php echo $arr1['summary']; ?></td>
        </tr>
        <tr class="row">
        <td width="188">Date uploaded</td>
		<td width="566"><?php echo $arr1['date']; ?></td>
        </tr>
     </table>