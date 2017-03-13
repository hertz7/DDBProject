<?php
session_start();
include("config.php");

if(isset($_POST["rollno"])&&isset($_POST["Password"]))
{
	$rollno=$_POST["rollno"];
	$pass=$_POST["Password"];
	//echo "$rollno,$pass";
	$query="select * from student where UID='$rollno'";
	
	$result=mysqli_query($db_var,$query) or die(mysql_error());
	$no_rows=mysqli_num_rows($result);
	
	
	if($no_rows==1)
	{
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$passd=$row["Password"];
		
		//echo"$passd";
		
		if($pass==$passd)
		{
			$_SESSION["rollno"]=$row["UID"];
			header("Location:student_home.php");
		}
		/*else
		{
			$_SESSION["Error"]="Incorrect Details";
          		$_SESSION["Revert"]="index.php";
			header("Location:UnSuccessful.php");
		}*/
	}
	/*else
	{
		$_SESSION["Error"]="Incorrect Details";
          	$_SESSION["Revert"]="index.php";
		header("Location:UnSuccessful.php");		
	}*/
}

?>
