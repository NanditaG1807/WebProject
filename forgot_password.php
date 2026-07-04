

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/change_password.css">
</head>
<body>
<?php

include("config.php");
$email="akash85531@gmail.com";//////get it from sesssion $_SESSION["username"];
if(isset($_POST["curpass"]))
{
 $cur=$_POST["curpass"];
 $new=$_POST["newpass"];
 $conf=$_POST["conpass"];
 
 if($new <> $conf)
 {
  echo "<h4 style='color:red'>New password and Confirm Password is not Matched</h4>";
 }
 else{
  
  $sql="select * from log_form where email='$email' and password='$cur'";
 
      $result=$conn->query($sql);
      
        if(mysqli_num_rows($result)>0)
       {
          $sql="update log_form set password='$new' where email='$email' and password='$cur'";
         
         if($conn->query($sql))
    {
     echo "<h4 style='color:green'>Password has been changed</h4>";
    }
    else
    {
           echo "<h4 style='color:red'>Invalid Current password</h4>";
    }
   
        }
       else
   {
    echo "<h4 style='color:red'>Invalid Current password</h4>";
   }
  
  
  
  
 }
 
}

?>
<form action="" method="post">
Current Password<input type="password"  name="curpass"><br>
New Password<input type="password" id="newpass" name="newpass"><br>
Confirm Password<input type="password" id="conpass" name="conpass"><br>

<input type="submit" value="Change">

</form>
</body>
</html>