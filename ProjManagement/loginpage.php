<?php 
session_start(); 

require_once "conn.php";



if (isset($_POST['login_btn'])){

	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];


	$auname = $_SESSION['username'];
	$apass = $_SESSION['password'];
	

	if (empty($auname)) {
		header("Location: index-login.php?error=User Name is required");
	    exit();
	}else if(empty($apass)){
        header("Location: index-login.php?error=Password is required");
	    exit();
	}
	else{

		
$sql = "SELECT * FROM db WHERE User_name='$auname' AND Password='$apass' ";
$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result)) {
			
			header("Location: index.php?");
	    exit();

	   

		}


		else
		{
	header("Location: index-login.php?error=Username or Password does not exist");
	    exit();
		}

	}


}


?>


