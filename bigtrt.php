<?php
$db = mysqli_connect("localhost","root","","food");

if(mysqli_connect_errno())
{
    echo "Failed to connect to mysql: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT *FROM bigtrt");
mysqli_close($db);

?>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
	<title>BIG TREAT Menu</title>
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
	<form method="GET" action="amul.php" id="my_Form"></form>
	<p id="head">BIG TREAT MENU</p>
<table id="item">
	<tr>
		<th>Item</th>
		<th>Price</th>
		<th>Qty</th>
		<th></th>
	</tr>
	
     <?php
      while($row = mysqli_fetch_array($result))
      {
        ?>
               <form method="GET" style="margin-top:5px;"  action="fetch.php" id="my_Form"></form>
          <tr>
<td><h4 class="text-info"><?php echo $row["bt_name"]; ?></h4></td>            
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