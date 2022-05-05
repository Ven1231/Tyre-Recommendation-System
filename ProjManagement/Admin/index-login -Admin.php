
<!DOCTYPE html>
<html>

<style>

     html body{
     background-color: #B1B1B1;
}
header{
     background-color: #B1B1B1;
}

nav.navbar{
     background-color: #4C5A65;
}
li{
     background-color:#6B808F;
     font-size:20px;
     margin: 10px;
}
p{
 font-size: 20px;
}

     footer{
               position: absolute;
               bottom: -75%;
               width: 100%;
               background: #4C5A65;
               color: white;
          }



*{
     font-family: sans-serif;
     box-sizing: border-box;
}

form {
     width: 500px;
     border: 2px solid #ccc;
     padding: 25px;
     background: #4C5A65;
     border-radius: 15px;
     color: white;
}

h2 {
     text-align: center;
     margin-bottom: 30px;
}

input {
     display: block;
     border: 2px solid #ccc;
     width: 90%;
     padding: 10px;
     margin: 10px auto;
     border-radius: 5px;
}
label {
     color: #888;
     font-size: 16px;
     padding: 10px;
}

button {
     float: right;
     background: #555;
     padding: 10px 15px;
     color: #323C43;
     border-radius: 5px;
     margin-right: 10px;
     border: none;
}
button:hover{
     opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
     text-align: center;
     color: #211f21;
}

.ca {
     font-size: 14px;
     display: inline-block;
     padding: 10px;
     text-decoration: none;
     color: #444;
}
.ca:hover {
     text-decoration: underline;
} 








</style>

<head>
	<title>LOGIN</title>
          <link rel="stylesheet" type="text/css" href="css/main.css">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   

     <link rel="icon" type="image/png" href="logo.png"/>
     
</head>




<body>


     <header class="header">
     <nav class="navbar navbar-style">
          <div class="container">
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#juju">
                    
                    </button>
                    <a href="http://localhost/ProjManagement/landing.html"><img class="logo" src="Pictures/RecoTyre2.png" style="width: 250px; height: 80px; "></a>
               </div>

               
               <div class="collapse navbar-collapse" id="juju" style="background-color:#4C5A65 ;">
               <ul class="nav navbar-nav navbar-right">
               
                

               </ul>
               </div>

          </div>

     </nav>





     <center>
     <form action="loginpage.php" action="index.php" method="POST">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label style="color:white;">User Name</label>
     	<input type="text" name="username" placeholder="User Name" style="color: black;"><br>

     	<label style="color:white;">Password</label>
     	<input type="password" name="password" placeholder="Password" style="color: black;"><br>

            
                         

     	<button type="submit" name="login_btn" style="background-color: #323C43;">Login</button>
         <br>
         <br>
     </form>
</center>




</body>
</html>