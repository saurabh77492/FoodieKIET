<?php 
session_start();
$library="";
$name="";
$mobile="";
$hostel="";
$wrong="";

$db = mysqli_connect('localhost','root','','food');

 
   if(isset($_POST['reg_user'])) {
  $library = mysqli_real_escape_string($db,$_POST['library']);
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $mobile = mysqli_real_escape_string($db,$_POST['mobile']);
  $hostel = $_REQUEST['hostel'];
  $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

   $q = "SELECT * from users where library = '$library' ";

          $result = mysqli_query($db, $q);
  $num = mysqli_num_rows($result); 
   
   if($password_1 != $password_2) {
        $_SESSION['error_msg']="Wrong password";
        header('location:food.php#popup1');
        exit();
   }
   else if ($num == 1) {
      $_SESSION['exist'] ="Library ID already exists";
      header('location:food.php#popup1');
      exit();
   }

  else{
   $password = md5($password_1);
   $qy = "INSERT into users (library,name,mobile,hostel,password)
   values('$library','$name','$mobile','$hostel','$password')";
   mysqli_query($db,$qy);
   $_SESSION['library'] = $library;
   header('location:foodie.php');
  exit();
}
}
?>