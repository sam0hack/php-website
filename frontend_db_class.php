<?php require("fend_config.php");
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

		public function selectAfterJoin($collist,$tablelist,$order=NULL,$limit=NULL,$condition1=NULL,$condition2=NULL)
		{
			$query="select $collist from $tablelist ";
			if($condition1!=NULL)
			 	$query.="where $condition1";
			if($condition2!=NULL)
			 	$query.="AND $condition2";				
			if($order!=NULL)
			 $query.=" order by $order DESC";
			 if($limit!=NULL) 
			 $query.=" limit $limit";
			 
			 $con=$this->openConnection();
			//echo $query; 
			 $result=mysqli_query($con,$query);
			 mysqli_close($con);
			 return $result;		
			
		}
		
		public function insertFeedback()
		{
			$con=$this->openConnection();
			$query="insert into tbl_feedback (name,email,feedback) values('".mysqli_real_escape_string($con,$_REQUEST['fback_name'])."','".mysqli_real_escape_string($con,$_REQUEST['fback_email'])."','".mysqli_real_escape_string($con,$_REQUEST['fback_feedback'])."')";
			if(mysqli_query($con,$query))
				$_SESSION['msg']="Thanks for providing us feedback.";
			else
					$_SESSION['msg']="Your feedback could not be registered.";

			Header("Location:index.php");
			mysqli_close($con);			
		}
	}
?>		