<?php
	require_once("config.php");
	class Dao
	{
		public function openConnection()
		{	
			$link=mysqli_connect(SERVER,USER,PASS,DBASE);
			if(!$link)
			{
				die("Connection failed".mysqli_connect_error());	
			}
			else
				return $link;	
		}
		
		public function loginProcess()
		{			$con=$this->openConnection();	
		$password=mysqli_real_escape_string($con,$_REQUEST['pwd']);
			
			$query="select * from tbl_admins where username='".$_REQUEST['uname']."' and password='".md5($password)."'";
			//echo $query;die;
			$result=mysqli_query($con,$query);	
			
			  require_once('recaptchalib.php');
			  $privatekey = "6Lcz0t4SAAAAAMkZcxI9MGHZNOdGoMYnt3oBqSfT";
			  $resp = recaptcha_check_answer ($privatekey,
                                "182.50.146.128",
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

			  if (!$resp->is_valid) {
		    // What happens when the CAPTCHA was entered incorrectly
			    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
		         "(reCAPTCHA said: " . $resp->error . ")");
				 header("Location:index.php");
 			 } else {			
			if(mysqli_num_rows($result)>0)
			{
				$_SESSION['uname']=$_REQUEST['uname'];
				mysqli_close($con);
				header("Location:frontpage.php");	
			}
			else
			{
				$_SESSION['error_msg']="Invalid Username or password.";	
			}
			}
			mysqli_close($con);

		}
		public function fileUpload($name,$header="frontpage.php")
		{
			$filename=-1;
		if($_FILES[$name]['error']>0)
			{
				$_SESSION['msg']="ERROR:  ".$_FILES[$name]['error']; 
				header("Location:$header") or die($filename[$name]['error']);
			}
			else
			{ 
				$filename=sha1($_FILES[$name]['name']).".jpg";
				if(($_FILES[$name]['type']=="image/jpg"||$_FILES[$name]['type']=="image/png")&&$_FILES[$name]['size']<400000)									
				{
						if(move_uploaded_file($_FILES[$name]['tmp_name'],"upload/".$filename))
						{				 
							$_SESSION['msg']="files uploaded successfully";
				 			return($filename);
						}
			 			else
						{
							$_SESSION['msg']="upload failed";
							header("Location:$header") or die("Upload Failed");
						}
			 }
			 else
			 	{
					$_SESSION['msg']="upload only jpg/png files of size less than 40000KB";
					header("Location:$header");die("File type incorrect");
				}
			}
		}	
		

		
		public function imgUpload($img)
		{
				
				if ((($_FILES[$img]["type"] == "image/gif")
				|| ($_FILES[$img]["type"] == "image/jpeg")
				||($_FILES[$img]["type"] == "image/jpg")
				|| ($_FILES[$img]["type"] == "image/png")
				|| ($_FILES[$img]["type"] == "image/pjpeg")||($_FILES[$img]["type"] == "image/png"))
				&& ($_FILES[$img]["size"] < 400000000))
				  {
				  if ($_FILES[$img]["error"] > 0)
					{
						$_SESSION['msg']= "Return Code: " . $_FILES[$img]["error"] . "<br />";
						exit("Error1.");
					}
				  else
					{
						/*echo "Upload: " . $_FILES[$img]["name"] . "<br />";
						echo "Type: " . $_FILES[$img]["type"] . "<br />";
						echo "Size: " . ($_FILES[$img]["size"] / 1024) . " Kb<br />";
						echo "Temp file: " . $_FILES[$img]["tmp_name"] . "<br />";*/
						$filename=md5($_FILES[$img]['name']).".jpg";
						if(move_uploaded_file($_FILES[$img]['tmp_name'],"upload/".$filename))								
							return $filename;								
						else
							$_SESSION['msg']="Error2: File upload fail.";
					}
				  }
				else
				  {
					  $_SESSION['msg']="Invalid file";
				  }
		}				  		


		public function selectAll($table)
		{
			$query="select * from $table";
			
			$con=$this->openConnection();
			
			$result=mysqli_query($con,$query);	
			
			return $result;
		}
		public function deleteRow($table,$condition,$headerlocation)
		{
			$query="delete from $table where $condition";
		//	echo $query; die;
			$con=$this->openConnection();
			if(mysqli_query($con,$query))
				{$_SESSION['msg']="1 row deleted";
				}
			else
				{$_SESSION['msg']="Row could not be deleted";
				}
			header("Location:$headerlocation");
		}
		public function selectAfterJoin($collist,$tablelist,$order=NULL,$condition=NULL,$limit=NULL)
		{
			$query="select $collist from $tablelist ";
			if($condition!=NULL)
			 	$query.="where $condition";
			if($order!=NULL)
			 $query.=" order by $order Desc";
			 if($limit!=NULL) 
			 $query.=" limit $limit";
			 
			 $con=$this->openConnection();
			// echo $query;die; 
			 $result=mysqli_query($con,$query);
			 mysqli_close($con);
			 return $result;		
			
		}
		public function insertCategory()
		{
			$con=$this->openConnection();
			$query="insert into tbl_category (cat_name,description,rel)
			  values('".mysqli_real_escape_string($con,$_REQUEST['cat_name'])."','".mysqli_real_escape_string($con,$_REQUEST['description'])."','".mysqli_real_escape_string($con,$_REQUEST['rel'])."')";	
			
			if(mysqli_query($con,$query))
				$_SESSION['msg']="Category Added Successfully";
			else
				$_SESSION['msg']="Category Can't be Add.";
			mysqli_close($con);
			header("Location:article_cat.php");
		}



		public function updateCategory()
		{
			$query="update tbl_category set cat_name='".$_REQUEST['cat_name']."',description='".$_REQUEST['description']."',rel='".$_REQUEST['rel']."' where cat_id='".$_REQUEST['cat_id']."'";
//			 echo $query;die;
			$con=$this->openConnection();
			if(mysqli_query($con,$query))
			{
				$_SESSION['msg']=mysqli_affected_rows($con)." Row Updated Successfully";	
			}
			else
			{
				$_SESSION['msg']="Record Can't be Updated";	
			}
			mysqli_close($con);			
			unset($_REQUEST['sub']);
			header("Location:article_cat.php");
			mysqli_close($con);
		}
		public function insertNews()
		{
			//echo "hello hi";die;
			$con=$this->openConnection();
			$filename=$this->imgUpload("img");
			$query="insert into articles (article_id,cat_id,headline,image,article,writer,date) values('".$_REQUEST['article_id']."','".$_REQUEST['cat_id']."','".mysqli_real_escape_string($con,$_REQUEST['headline'])."','".mysqli_real_escape_string($con,$filename)."','".htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST['article']))."','".mysqli_real_escape_string($con,$_REQUEST['writer'])."','".mysqli_real_escape_string($con,$_REQUEST['date'])."')";			
			//echo $query;die;
			if(mysqli_query($con,$query))
				$_SESSION['msg']="Article Added successfully";
			else
				$_SESSION['msg']="Article Can't Be added.";
			mysqli_close($con);
			header("Location:gc_news.php");
			
		}
		
		
		public function updateNews()
		{
			if(isset($_FILES['img']))
				$filename=$this->imgUpload("img");
			else
				$filename=$_REQUEST['img'];
			$con=$this->openConnection();
			$query="update articles set cat_id='".$_REQUEST['cat_id']."', headline='".mysqli_real_escape_string($con,$_REQUEST['headline'])."',image='".$filename."',article='".htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST['article']))."',writer='".mysqli_real_escape_string($con,$_REQUEST['writer'])."', date='".$_REQUEST['date']."' where article_id='".$_REQUEST['article_id']."'";
	   		//echo $query;die;
			if(mysqli_query($con,$query))
			{
				$_SESSION['msg']=mysqli_affected_rows($con)." Row Updated Successfully";	
			}
			else
			{
				$_SESSION['msg']="Record Can't be Updated";	
			}
			mysqli_close($con);			
			header("Location:gc_news.php");
			mysqli_close($con);
		}		
		
		public function insertCartoon()
		{
		//echo "hello hi";die;
			$con=$this->openConnection();
			$filename=$this->imgUpload("img");
			$query="insert into tbl_cartoon (cartoon_id,cartoonist,date,scenario,Category,image,description) values('".$_REQUEST['cartoon_id']."','".mysqli_real_escape_string($con,$_REQUEST['cartoonist'])."','".$_REQUEST['date']."','".mysqli_real_escape_string($con,$_REQUEST['scenario'])."','".htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST['Category']))."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$_REQUEST['description'])."')";
			
		//echo $query;die;
			if(mysqli_query($con,$query))
				$_SESSION['msg']="Cartoon Added successfully";
			else
				$_SESSION['msg']="Cartoon Can't Be added.";
			mysqli_close($con);
			header("Location:cartoon_man.php");
			
		}	
		
		public function updateCartoon()
		{
			if(isset($_FILES['img']))
				$filename=$this->imgUpload("img");
			else
				$filename=$_REQUEST['img'];
			$con=$this->openConnection();
			$query="update tbl_cartoon set cartoon_id='".$_REQUEST['cartoon_id']."',cartoonist='".$_REQUEST['cartoonist']."', scenario='".$_REQUEST['scenario']."',Category='".htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST['category']))."',image='".$filename."',description='".mysqli_real_escape_string($con,$_REQUEST['description'])."' where cartoon_id='".$_REQUEST['cartoon_id']."'";
		   // echo $query;die;
			if(mysqli_query($con,$query))
			{
				$_SESSION['msg']=mysqli_affected_rows($con)." Row Updated Successfully";	
			}
			else
			{
				$_SESSION['msg']="Record Can't be Updated";	
			}
			mysqli_close($con);			
			header("Location:cartoon_man.php");
			mysqli_close($con);
		}		
		
		public function insertMember()
		{
		//echo "hello hi";die;
			$con=$this->openConnection();
			$filename=$this->imgUpload("img");
			$query="insert into tbl_team (member_id,member_name,member_post,member_pic,member_writeup,member_email) values('".$_REQUEST['member_id']."','".mysqli_real_escape_string($con,$_REQUEST['member_name'])."','".mysqli_real_escape_string($con,$_REQUEST['member_post'])."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$_REQUEST['member_writeup'])."','".mysqli_real_escape_string($con,$_REQUEST['member_email'])."')";
			
		//echo $query;die;
			if(mysqli_query($con,$query))
				$_SESSION['msg']="Member Added successfully";
			else
				$_SESSION['msg']="Member Can't Be added.";
			mysqli_close($con);
			header("Location:team_awaaz.php");
			
		}	
		
		public function updateMember()
		{
			if(isset($_FILES['img']))
				$filename=$this->imgUpload("img");
			else
				$filename=$_REQUEST['img'];
			$con=$this->openConnection();
			$query="update tbl_team set member_id='".$_REQUEST['member_id']."',member_name='".$_REQUEST['member_name']."', member_post='".$_REQUEST['member_post']."',member_email='".$_REQUEST['member_email']."',member_pic='".$filename."',member_writeup='".mysqli_real_escape_string($con,$_REQUEST['member_writeup'])."' where member_id='".$_REQUEST['member_id']."'";
//		    echo $query;die;
			if(mysqli_query($con,$query))
			{
				$_SESSION['msg']=mysqli_affected_rows($con)." Row Updated Successfully";	
			}
			else
			{
				$_SESSION['msg']="Record Can't be Updated";	
			}
			mysqli_close($con);			
			header("Location:team_awaaz.php");
			mysqli_close($con);
		}		
		
	}
	?>