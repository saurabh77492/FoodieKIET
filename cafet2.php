<?php
$db = mysqli_connect("localhost","root","","food");

if(mysqli_connect_errno())
{
    echo "Failed to connect to mysql: " . mysqli_connect_error();
}

$result1 = mysqli_query($db,"SELECT *FROM beverage");
$result2 = mysqli_query($db,"SELECT *FROM burger");
$result3 = mysqli_query($db,"SELECT *FROM paratha");
$result4 = mysqli_query($db,"SELECT *FROM rolls");
$result5 = mysqli_query($db,"SELECT *FROM sandwich");
$result6 = mysqli_query($db,"SELECT *FROM snacks");
$result7 = mysqli_query($db,"SELECT *FROM combo");
$result8 = mysqli_query($db,"SELECT *FROM south_indian");
$result9 = mysqli_query($db,"SELECT *FROM thali");
$result10 = mysqli_query($db,"SELECT *FROM rice");
$result11 = mysqli_query($db,"SELECT *FROM chinese");



mysqli_close($db);

?>
<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" type="text/css" href="F:\project\foodiekiet\css\nav.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
    #item{
      font-family:'Oregano', cursive;
      border-collapse: collapse;
      width: 100%;
    }
    #item td,#item th{l
      border:1px solid #ddd;
      padding:8px;
      text-align: center;
    }
    #item tr:nth-child(even){background-color: #f2f2f2;}
    #item tr:hover{background-color: #ddd;}
    #item th{
      padding-top: 10px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #4caf50;
      color: white;
        font-size: 20px;
    }
    #head
    { font-family: 'Oregano',cursive;
     font-size: 80px;
      text-align: center;
    }
</style>
<body>
  <div class="container">
       <div class="topnav">
         <a href="#">Foodie KIET  <i class="fa fa-cutlery"></i></a>
         <a href="#" style="float:right; color: black;">Home</a>
       </div>
    </div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Foodie<br>KIET</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#toppick" class="w3-bar-item w3-button w3-hover-white">Top Picks</a> 
    <a href="#rice" class="w3-bar-item w3-button w3-hover-white">Rice</a> 
    <a href="#rolls" class="w3-bar-item w3-button w3-hover-white">Rolls</a> 
    <a href="#burger" class="w3-bar-item w3-button w3-hover-white">Burger</a> 
    <a href="#chinese" class="w3-bar-item w3-button w3-hover-white">Chinese</a> 
    <a href="#southindian" class="w3-bar-item w3-button w3-hover-white">South Indian</a>
    <a href="#thali" class="w3-bar-item w3-button w3-hover-white">Thali</a>
    <a href="#snacks" class="w3-bar-item w3-button w3-hover-white">Snacks</a>
    <a href="#beverages" class="w3-bar-item w3-button w3-hover-white">Beverages</a>
    <a href="#sandwhich" class="w3-bar-item w3-button w3-hover-white">Sandwich</a>
    <a href="#paratha" class="w3-bar-item w3-button w3-hover-white">Paratha</a>
    <a href="#combo" class="w3-bar-item w3-button w3-hover-white">Combo</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="toppick">
    <h1 class="w3-jumbo"><b>Cafeteria </b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Top Picks</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <div>
    <div class="w3-col m4 w3-margin-bottom">
      <div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIUefkUPnVaECil6YwSkFlosWaDpzrLrbDfVZ28TcPlEL63wGfzQ" alt="John" style="width:100%">
        <div class="w3-container">
          <a href="#paratha"><h3>Parathas</h3></a>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div>
        <img src="dosa1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <a href="#southindian"><h3>Dosa</h3></a>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div>
        <img src="cp.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <a href="#chinese"><h3>Chilli Potato</h3></a>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- North Indian -->
  <div>
  <table id="item">
  <div class="w3-container" id="rice" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Rice</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

     <?php
      while($row = mysqli_fetch_array($result10))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["r_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
       </tr>
     </div>

     

  
  <!-- South Indian -->
  <table id="item">

  <div class="w3-container" id="rolls" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Rolls</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
   <?php
      while($row = mysqli_fetch_array($result4))
      {
        ?>
     <tr>
<td><h4 class="text-info" ><?php echo $row["roll_name"]; ?></h4></td>            
         <td><h4 class="text-danger" >Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
       </tr>

  <!-- Packages / Pricing Tables -->
  <table id="item">
  <div class="w3-container" id="burger" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Burger</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
 <?php
      while($row = mysqli_fetch_array($result2))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["br_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?> 
       </tr>
  
  <!-- Contact -->
  <table id="item">
  <div class="w3-container" id="chinese" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Chinese</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <?php
      while($row = mysqli_fetch_array($result11))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["ch_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
       </tr>
    <table id="item">
    <div class="w3-container" id="southindian" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>South Indian</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <?php
      while($row = mysqli_fetch_array($result8))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["si_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
        </tr>
      
      <table id="item">
    <div class="w3-container" id="thali" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Thali</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
      <?php
      while($row = mysqli_fetch_array($result9))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["thali_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
       </tr>
  
      <table id="item">
    <div class="w3-container" id="snacks" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Snacks</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <?php
      while($row = mysqli_fetch_array($result6))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["s_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
      </tr>
      
      
     <table id="item"> 

    <div class="w3-container" id="beverages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Beverages</b></h1>
  
     <?php
      while($row = mysqli_fetch_array($result1))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["b_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>

      
      <table id="item">
    <div class="w3-container" id="sandwhich" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Sandwich</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <?php
      while($row = mysqli_fetch_array($result5))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["sc_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
      </tr>
  

      <table id="item">
    <div class="w3-container" id="paratha" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Paratha</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

      <?php
      while($row = mysqli_fetch_array($result3))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["p_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
       </tr>
      
      <table id="item">
    <div class="w3-container" id="combo" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Combo</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
     <?php
      while($row = mysqli_fetch_array($result7))
      {
        ?>
     <tr>
<td><h4 class="text-info"><?php echo $row["c_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
        
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
      </tr>
  </div>

<!-- W3.CSS Container -->

</div>
</body>
</html>