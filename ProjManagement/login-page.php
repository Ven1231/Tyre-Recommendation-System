<?php 
session_start(); 
require_once "conn.php";


if (isset($_POST['login_btn']) && isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);
	
	if (empty($uname)) {
		header("Location: index-login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index-login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM db WHERE User_name='$uname' AND Password='$pass' ";

		$result = mysqli_query($conn, $sql);
	

		if (mysqli_num_rows($result) > 0) 
		{
			
			while ($row = mysqli_fetch_assoc($result))
			{
            
            if ($row['Usertype'] === 'Admin') 
            {
            	$_SESSION['AdminUser'] = $row['User_name'];
            	$_SESSION['usertypes'] = $row['Usertype'];
            	
            	header("Location: http://localhost/El%20Casa%20Bhell_Admin/Admin.php");
		        exit();
            }
            else if ($row['Usertype'] === 'User')
            {
            	$_SESSION['User'] = $row['User_name'];
            	$_SESSION['usertypes'] = $row['Usertype'];
            	
            	header("Location: index.php");
		        exit();

            }
		}

	  }
	  else{
				header("Location: index-login.php?error=Incorect User name or password");
		        exit();
			}
	}
	
}else{
	header("Location: index-login.php");
	exit();
}

?>