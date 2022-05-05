<?php
include('security.php');

$conn = mysqli_connect("localhost","root","","elcasabhell_db");



  if (isset($_POST['signbtn'])){


    $fullname =  ($_POST['name']);
  $username = ($_POST['uname']);
  $email = ($_POST['mail']);

  $password = ($_POST['password']);
  $confirm_password = ($_POST['re_password']);

  $cellno = ($_POST['cellno']);
  $address = ($_POST['add']);
 

   if (empty($fullname)|| empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($address) ) {
        header("Location: sign-up.php?error=Fill in the required information");
      exit();
   }
  else if($password !== $confirm_password){
        header("Location: sign-up.php?error=The confirmation of password  does not match");
      exit();
  
  }
     else
      {
    
        $query = "INSERT INTO db (Full_name,User_name,Email,Password,Cell_no,Address) values ('$fullname', '$username', '$email', '$password', '$cellno', '$address')";
        $query_run = mysqli_query($conn, $query);
    
       if($query_run)
      {
            
            header("Location: index-login.php");
            exit();
      }
        else 
          {
            
            header("Location: sign-up.php?error=Can't sign up your data");
            exit();
          }
        }




  }

  





?>