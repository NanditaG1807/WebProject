

//booking mysql code
<?php

   $connection = mysqli_connect('localhost','root','','travel_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $type = $_POST['type'];
      $arrivals = $_POST['arrivals'];
      

      $request = " insert into book_form(name, email, phone, address, type, arrivals) values('$name','$email','$phone','$address','$type','$arrivals') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>