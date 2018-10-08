<?php
session_start();

if(!isset($_SESSION['library'])) {
  header('location : header.php');
$db = mysqli_connect('localhost','root','','food');
if(mysqli_connect_errno())
{
    echo "Failed to connect to mysql: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT * FROM users ");

}

?>

<!DOCTYPE html>
<html>
 <head>
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Satisfy" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
 	 <link rel="stylesheet" type="text/css" href="nav.css">
 </head>

  <body class="img">
    <div class="container">
      <table id="item">
      <?php
            while($row = mysqli_fetch_array($result))
          {
          ?>

 	     <div class="topnav">
         <a href="#">Foodie KIET  <i class="fa fa-cutlery"></i></a>
          <p style="float: right;  font-family: 'Oregano',cursive ,bold ; font-size: 20px; "><a href="logout.php">Logout</a></p>
          <tr>
          <td><p class="top" style="float:right; font-family: 'Oregano',cursive ; font-size: 20px;  "> Welcome  <?php echo $row['name']; ?></p></td>
        </tr>
          <?php
        }
        ?>
         </div>
       </table>
    </div>
   </body>
 </html>