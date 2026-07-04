<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/regi.css">
</head>
<body>
  

<div class="form-container">

    <form action="" method="post">
        <h3 class="title" >Admin Login Now</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
    
      <input type="email" name="" placeholder="Enter your email" class="box" required>
      
     <input type="password" name="" placeholder="Enter your password" class="box" required>
     
       <input type="submit" value="Login Now" class="form-btn" name="submit">
      
        <p>don't have an account? <a href="register_form.php">register now!</a></p>
    </form>

</div>

      


</body>
</html>