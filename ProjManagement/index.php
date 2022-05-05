<?php 
session_start();

?>


<!DOCTYPE html>
<html>
<head>

	<style>


		img{

			height:195px ;
			width: 316px;
			padding: 20px;
			padding-bottom: 0px;
			

		}

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
     width: 128px;
     height: 36px;
}
li a:hover{
	background-color: black;
	opacity: 0.7;
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

	footer{
			position: absolute;
			bottom: -75%;
			width: 100%;
			background: #4C5A65;
			color: white;
		}
	.main-content{
			display: flex;
		}

		.main-content .box{
			flex-basis: 50%;
			padding: 10px 20px;
		}

		.main-content .box img{
			width: 160px;
			height: auto;
			position: absolute;
			top: 50%;
			left: 10%;
			transform: translate(-50%, -50%);
			border: 0px solid black;
			border-radius: 5px;
		}

		.box h2{
			font-size: 1.800rem;
			font-weight: 600;
			text-transform: uppercase;
		}

		.box .content{
			margin: 20px 0 0 0;
		}


		.right .content p{
			text-align: justify;
			font-size: 16px;
		}

		.right .content .social{
			margin: 20px 0 0 0;
		}

		.right .content .social a{
			padding: 0 2px;
		}

		.right .content .social a span{
			height: 30px;
			width: 30px;
			background: #ccc;
			line-height: 30px;
			text-align: center;
			font-size: 20px;
			border-radius: 5px;
			transition: 0.3s;
		}

		.right .content .social a span:hover{
			background: #f12020
		}
		header{
			background-color: #B1B1B1;
		}
		html{
			background-color: #B1B1B1;
		}

		.sub-menu-1{
			background-color:#B1B1B1 ;
		}




</style>

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

 
	<header class="header">
	<nav class="navbar navbar-style">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#juju">
				</button>

			<a href="index.php"><img class="logo" src="Pictures/RecoTyre2.png" style="width: 250px; height: 80px; "></a>

	


			</div>
			<div class="collapse navbar-collapse" id="juju" style="background-color:#4C5A65;">
			<ul class="nav navbar-nav navbar-right">
				<li style="background-color:white;"><a href="index.php" style="color:#CA0000;">Home</a></li>
				
				<li style="background-color:#CA0000;"><a href="flavour.php" style="color: white;">Brands</a>
					<div class="sub-menu-1" style="background-color: #B1B1B1;">	
						<ul>
							<li style="background-color:#B1B1B1;"><a href="flavour.php#choco">APOLLO</a></li>
							<li style="background-color:#B1B1B1;"><a href="flavour.php#rv">CEAT</a></li>
							<li style="background-color:#B1B1B1;"><a href="flavour.php#ube">BRIDGESTONE</a></li>
							<li style="background-color:#B1B1B1;"><a href="flavour.php#mg">GOOD YEAR</a></li>
							<li style="background-color:#B1B1B1;"><a href="flavour.php#bb">JK-TYRE</a></li>
						</ul>
				</li>
					
				<li style="background-color:white;"><a href="about.html" style="color:#CA0000;">Search</a></li>
				<li style="background-color:#CA0000;"><a href="landing.html" style="color:white;">Log Out</a></li>
			
			</ul>
			

		</div>

	</nav>

			



	<footer>
		<div class="main-content">
			<div class="left box">
				<img src="Pictures/RecoTyre.png"  style=" position: absolute; width:400px; height:300px;"> 
			</div>

			<div class="center box">
				<h2>Mission</h2>
				<div class="content">
				<p>
					Our mission is to be a well known recommender site in the Philippines being one of the most reliable and efficient.
				</p>
				</div>
			</div>
			<div class="center1 box">
				<h2>Vission</h2>
				<div class="content">
				<p>
					We envision that our website will make a significant impact to everyone's preference and that our recommended products will satisfy the customer.
				</p>
				</div>
			</div>

			<div class="right box">
				<h2>Contact Us</h2>
				<div class="content">
					<p><span class="fas fa-phone-alt"> Number: 994784652</span></p>
					<p><span class="fa fa-envelope"> Email: abcd@gmail.com</span></p>
					<div class="social">
						<a href="#"> <span class="fab fa-facebook-f" style="color: white"></span></a>
						<a href="#"> <span class="fab fa-instagram" style="color: white"></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>



  
    

<h2 style="color: black; text-align: center; margin-top: 70px;"><b>PRODUCTS</b></h2>

		<div class="container" style="  display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; ">
			<div class="gallery" style=" background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/ceat.jpg" > <a href="" style="font-size:30px; color: white;">CEAT</a>
				</center>
			</div>

			<div class="gallery" style=" background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/BridgeStone.jpg"><a href=""style="font-size:30px; color: white;">BRIDGESTONE</a>
				</center>
			</div>

			<div class="gallery" style="background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/GoodYear.jpg"><a href=""style="font-size:30px; color: white;">GOOD YEAR</a>
				</center>
			</div>
			</div>

				<div class="container" style="  display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; ">
			<div class="gallery" style=" background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/Jk-Tyre.jpg" > <a href="" style="font-size:30px; color: white;"><br>JK-TYRE</a>
				</center>
			</div>

			<div class="gallery" style=" background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/Apollo2.png"><a href=""style="font-size:30px; color: white;"><br>APOLLO</a>
				</center>
			</div>

			
			</div>





<h2 style="color: black; text-align: center; margin-top: 70px;">Top Rating</h2>

		<div class="container" style="  display: flex;flex-direction: row; flex-wrap: nowrap; justify-content: space-between; ">
			<div class="gallery" style="  background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/BridgeStone.jpg"><a href="" style="font-size:30px; color: white;">BridgeStone</a>
				</center>
			</div>

			<div class="gallery" style=" background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/GoodYear.jpg"><a href=""style="font-size:30px; color: white;">GoodYear</a>
				</center>
			</div>

			<div class="gallery" style="background-color:#4C5A65 ; width:373px ; height: 269px; margin:50px;border:1px solid #333;  border-radius: 8px; box-shadow: 0 5px 5px rgba(0,0,0,0.15); border-color:#000000 ;">
				<center><div class="desc" ></div>
				<a href="flavour.php#choco" ><img src="Pictures/Apollo.jpg"><a href=""style="font-size:30px; color: white;">Apollo</a>
				</center>
			</div>

			</div>
	</header>



</body>
</html>