<?php
include('security.php');

$conn = mysqli_connect("localhost","root","","elcasabhell_db");



  if (isset($_POST['signbtn']) && isset( $_POST['name']) && isset($_POST['uname']) && 
    isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['re_password']) 
  && isset($_POST['cellno']) && isset($_POST['add']) && isset($_POST['usertype'])){

  function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  $fullname = validate($_POST['name']);
  $username = validate($_POST['uname']);
  $email = validate($_POST['mail']);

  $password = validate($_POST['password']);
  $confirm_password = validate($_POST['re_password']);

  $cellno = validate($_POST['cellno']);
  $address = validate($_POST['add']);
  $usertype = validate($_POST['usertype']);

  $user_data = 'name='. $fullname. '&uname='. $username. '&mail='. $email. '&cellno='. $cellno. 
  '&add='. $address;
  

   if (empty($fullname)){
        header("Location: sign-up-admin.php?error=Name is required&$user_data");
      exit();
   }
  else if (empty($username)) {
    header("Location: sign-up-admin.php?error=User Name is required&$user_data");
      exit();
  
  }
  else if(empty($email)){
        header("Location: sign-up-admin.php?error=Email is required&$user_data");
      exit();
      
  }
  else if(empty($password)){
        header("Location: sign-up-admin.php?error=Password is required&$user_data");
      exit();
  }
  else if(empty($confirm_password)){
        header("Location: sign-up-admin.php?error=Re Password is required&$user_data");
      exit();
  }
  else if(empty($address)){
        header("Location: sign-up-admin.php?error=Address is required&$user_data");
      exit();

  }
  else if($password !== $confirm_password){
        header("Location: sign-up-admin.php?error=The confirmation of password  does not match&$user_data");
      exit();
  

 }else{
    // hashing the password
        $password = md5($password);
    
    

    $email_query = "SELECT * FROM db WHERE Email='$email' ";
    $email_query_run = mysqli_query($conn, $email_query);


    if(mysqli_num_rows($email_query_run) > 0)
      {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: sign-up.php');  
    
      }
  
    else
      {
    
        $query = "INSERT INTO db (Full_name, User_name, Email, Password, Cell_no, Address, Usertype) VALUES ($fullname, $username, $email, $password, $cellno, $address, $usertype)";
        $query_run = mysqli_query($conn, $query);
    
       if($query_run)
      {
            
            header("Location: sign-up.php?success=Sign up successfully");
            exit();
      }
        else 
          {
            
            header("Location: sign-up.php?error=Can't sign up your data");
            exit();
          }
 
     
        }

      }

                                                                                                                           
}
else{
  header("Location: sign-up.php");
  exit();
}



?>