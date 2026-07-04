<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $first =  $_POST['userfirst'];
   $last =   $_POST['userlast'];
   $email =  $_POST['usermail'];
   $gender =  $_POST['usergender'];
   $phone_no =  $_POST['userphone'];
   $address =  $_POST['useraddress'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
  
   $select = " SELECT * FROM log_form WHERE first_name = '$first' && last_name = '$last' && email = '$email' && gender = '$gender' && phone_no = '$phone_no' && address = ' $address' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO log_form(first_name, last_name, email, gender , phone_no, address, password) VALUES('$first','$last','$email', '$gender','$phone_no','$address','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/regi.css">
</head>
<body >
    
<div class="form-container">


   <form action="" method="post">
      <h3 class="title">register now</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>


<input type="text" name="userfirst" placeholder="Enter your First Name" class="box" required>
<input type="text" name="userlast" placeholder="Enter your Last Name" class="box" required>
      <input type="email" name="usermail" placeholder="Enter your email" class="box" required>
      <div class="radio">
      <input type="radio" name="usergender" value="Male" ><label>Male</label>
      <input type="radio" name="usergender" value="Female" ><label>Female</label>
      <input type="radio" name="usergender" value="Other" ><label>Other</label>
      </div>
      <input type="tel"  name="userphone" placeholder="Enter your phone no."  class="box"required>
      <input type="textarea" name="useraddress" placeholder="Enter your address" class="box" required>
      <input type="password" name="password" placeholder="Enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm your password" class="box" required>
      <input type="submit" value="Register now" class="form-btn" name="submit">
      <p>already have an account? <a href="login_form.php">login now!</a></p>
   </form>

</div>

</body>
</html>