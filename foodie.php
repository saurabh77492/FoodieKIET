<?php
session_start();

if(!isset($_SESSION['library'])) {
  header('location : foodie.php');

  
}

$db = mysqli_connect('localhost','root','','food');

$a= "SELECT * from users ";
echo '$a';

?>

<!DOCTYPE html>
<html>
 <head>
	 <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Satisfy" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="nav.css">
   <link rel="stylesheet" type="text/css" href="login1.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" type="text/css" href="signup1.css">
   <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	 <title>HOME</title>
 </head>
 <body class="img">
    <div class="container">
 	     <div class="topnav">
         <a href="#" >Foodie KIET<i class="fa fa-cutlery"></i></a>
         <p style="float: right;  font-family: 'Oregano',cursive ,bold ; font-size: 20px; "><a href="logout.php">Logout</a></p>
          <p class="top" style="float:right; font-family: 'Oregano',cursive ; font-size: 20px;  "> Welcome  <?php echo $_SESSION['library']; ?>
   </p>
       </div>
    </div>
	  <div >
		  <p id="wel"> Welcome To</p>
      <p id="food"> Foodie KIET</p>
      <p id="text">Order food online from Amul,Big Treat and Cafeteria to your Hostel.</p>
    </div>
    <div>   
     <a href="#popup3"><button class="odd">Order Now!</button></a>
     <a href="explore.php"><button id="explore" type="button" >Explore Now!</button></a>
    </div>

   <div id="popup3" class="overlay">
     <div class="popup">
       <div class="main">
         <div id="lb">
           <center><p style="font-family: 'Cookie';font-size:44px;">Order Now <i style="font-size:30px;" class="fa fa-truck"></i></p>
           <p style="font-size: 25px; font-family:'Boogaloo';">Select Your Hunger Zone!</p>
           <a class="close" href="#">&times;</a>
           <div id="orderpopup">
             <a id="a3" href="amul.php"><b>Amul</b></a>
             <br>
             <br>
             <a id="a3" href="bigtrt.php"><b>Big Treat</b></a>
             <br>
             <br>
             <a id="a3" href="cafet.php"><b>Cafeteria</b></a>
             <br>
             <br> 
           </div>
         </div>
       </div>      
     </div>
   </div>
 </body>
</html>