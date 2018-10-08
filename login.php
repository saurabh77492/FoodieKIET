 <?php 
session_start();

$db = mysqli_connect('localhost','root','','food');

 $library = mysqli_real_escape_string($db, $_POST['library']);
 $password = mysqli_real_escape_string($db, $_POST['password_1']);


 

$password=md5($password);
    

$q = "SELECT * from users where library = '$library' AND password = '$password'  ";

$result = mysqli_query($db, $q);

$num = mysqli_num_rows($result);


    if ( $num == 1) {
   
 
    $_SESSION["library"] = $library;
    
    header('location:header.php');
      
    }	
    else{
     $_SESSION['error_msg1']="Wrong password";
        header('location:food.php#popup2');
       exit();
}
?>