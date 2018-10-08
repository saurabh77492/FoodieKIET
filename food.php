<?php
session_start();


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
         <a href="#">Foodie KIET  <i class="fa fa-cutlery"></i></a>
         <a href="food.php" style="float:right">Home</a>
         <a href="#popup1" style="float: right;">Sign up</a>
         <a href="#popup2" style="float:right">Login</a>
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
  <!--popup menu-->      
		<div id="popup1" class="overlay">
      <div class="popup">
         <div class="main">
           <div id="lb">
             <p style="font-family: 'Cookie'; text-align: center; font-weight: 10px; margin-top:0px;font-size: 40px;">Sign up <i class="fa fa-check-square-o"></i></p>
             <p style="font-family: 'Boogaloo'; font-size: 25px; text-align: center;">Already Registered?  <a id="a1" href="#popup2">Login</a></p>
             <hr style="line-height: 5px;">
		         <br>
             <a class="close" href="#">&times;</a>
             <form method="post" action="register.php">
             <div id="error_msg" style="font-family: 'Boogaloo'; font-size: 25px; text-align: center; margin-top:0px" font-color="red">
            <?php if(!empty($_SESSION['error_msg'])) { echo $_SESSION['error_msg']; } ?>
        </div>
        <?php unset($_SESSION['error_msg']); ?>

           <div id="exist" style="font-family: 'Boogaloo'; font-size: 25px; text-align: center; margin-top:0px" font-color="red">
         <?php if(!empty($_SESSION['exist'])) { echo $_SESSION['exist']; } ?>
        </div>
        <?php unset($_SESSION['exist']); ?>
               <fieldset style="border: 0px;">
                  <legend>
                    Library ID <i class="fa fa-drivers-license-o"></i>
                  </legend>
                  <label for="library" style="display: none;"> Library ID</label>
                  <input id="textid" type="text" name="library"  spellcheck="off" required>
                  <br>
                  <br>
                 <legend>
                    Name <i class="fa fa fa-male"></i>
                 </legend>
                 <input id="textid" type="text" name="name" placeholder="" required>
                 <br>
                 <br>
                 <legend>
                   Mobile Number <i class="fa fa fa-phone"></i>
                 </legend>
                 <input id="textid" type="tel" id="mob" name="mobile" placeholder=""  min="0" minlength="10" maxlength="10" required>
                 <br>
                 <br>
                 <legend>
                 <br>
                 Hostel <i class="fa fa-home"></i>
                 </legend>
                 <select name="hostel" required>
                    <option >Select your Hostel</option>
                    <option value="Chandragupta">Chandragupta</option>
                    <option value="Tagore">Tagore</option>
                    <option value="Aaryabhatta">Aaryabhatta</option>
                    <option value="Vivekanand">Vivekanand</option>
                    <option value="Gargi">Gargi</option>
                    <option value="Sarojini">Sarojini</option>
                    <option value="Saraswati">Saraswati</option>
                 </select>
                 <br>
                 <br>
                 <legend>
                   Password <i class="fa fa-question-circle-o"></i>
                 </legend>
                 <input id="textid" type="password" name="password_1" placeholder="" required minlength="8">
                 <br>
                 <br>
                 <legend>
                   Confirm Password <i class="fa fa-question-circle-o"></i>
                 </legend>
                 <input id="textid" type="password" name="password_2" placeholder="" required minlength="8" ></p>
                 <br>
               </fieldset>
               <center>
                 <button type="submit" formmethod="post" class="btn btn-primary btn-small btn-block" name = "reg_user">Sign up <i class="fa fa-send-o"></i></button>
               </center>
             </form>
           </div>
         </div> 
      </div>
    </div>
  <!--popuplogin-->
    <div id="popup2" class="overlay">
    <div class="popup">
            <div class="main">
     
    <div id="lb">
       <center> <p style="font-family:'Cookie';font-size:50px";>Login <i style="font-size: 30px"; class="fa fa-sign-in"></i></p>
       
        <p style="font-size: 24px; font-family:'Boogaloo';">Or <a href="#popup1" style="color:#FF6347"; >Create An Account</a></p>
        <a class="close" href="#">&times;</a>
		<br>

		
<form method="post" action="login.php">
  <div id="error_msg1" style="font-family: 'Boogaloo'; font-size: 25px; text-align: center; margin-top:0px" font-color="red">
            <?php if(!empty($_SESSION['error_msg1'])) { echo $_SESSION['error_msg1']; } ?>
        </div>
        <?php unset($_SESSION['error_msg1']); ?>
    <fieldset style="border: 0px;">
        <legend>
            Library ID <i class="fa fa-drivers-license-o"></i>
        </legend>
        <label for="library" style="display: none;">Library ID</label>
        <input id="textid" type="text" name="library" placeholder="" spellcheck="off"
         required>
    <br>
    <br>
   <legend>
            Password <i class="fa fa-question-circle-o"></i>

        </legend>
   
   <input id="textid" type="password" name="password_1" placeholder=""  minlength="8" required>
   <br>
   <br>
  </fieldset>
  <br>
  <center><button type="submit" formmethod="post" class="btn btn-primary btn-small btn-block" name="login_user">Login <i class="fa fa-location-arrow"></i></button>
</form>
         </div>
       </div>
     </div>
   </div>
  <!--popup order now-->
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