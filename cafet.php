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
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
	<title>CAFET Menu</title>
	<style>
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
</head>
<body>
	<form method="GET" action="fetch.php" id="my_Form"></form>
	<p id="head">CAFETERIA MENU</p>
  <p id="head">BEVERAGE</p>
<table id="item">
	<tr>
		<th>Item</th>
		<th>Price</th>
		<th>Qty</th>
		<th></th>
	</tr>
	
     <?php
      while($row = mysqli_fetch_array($result1))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
      <p id="head">BURGER</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result2))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>

 <p id="head">CHINESE</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result11))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>

<p id="head">PARATHA</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result3))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
<p id="head">ROLLS</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result4))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
          <tr>
<td><h4 class="text-info"><?php echo $row["roll_name"]; ?></h4></td>            
         <td><h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4></td>  
          <td><input type ="text" name ="quantity" class ="form-control"/></td>  
           <td><button type="submit" form="my_Form">Add to Thali</button></td>
      
    
        <?php echo "</tr>";?>
    <?php }
     ?>
         <?php echo"</table>";
         ?>
      </form>
<p id="head">SANDWICH</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result5))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
<p id="head">SNACKS</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result6))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
      <p id="head">COMBO</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result7))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
<p id="head">SOUTH INDIAN</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result8))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
      <p id="head">THALI</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result9))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>
       <p id="head">RICE</p>
<table id="item">
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th></th>
  </tr>
  
     <?php
      while($row = mysqli_fetch_array($result10))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
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
      </form>




</body>


</html>