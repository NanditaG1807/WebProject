
<?php
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");
?>


<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="css/payment.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>

<body>
<div class="panel panel-default">
     
       
     <div class="panel-body"> 
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST" action="pgRedirect.php">

        <h4>Booking Id & Customer Id</h4>
        <div class="input-group">
                <div class="input-box">
                
                        <input class="name" id="ORDER_ID" tabindex="1" 
                            name="ORDER_ID" autocomplete="off"
                            value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
                            <i class="fa fa-id-card icon"></i>
                            </div>
                            <div class="input-box">
                            
                            
                        <td><input class="name" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" 
                        autocomplete="off" value="<?php echo   rand(10000,99999999)?>" readonly>
                        <i class="fa fa-id-card icon"></i>
</div>
</div>

            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4> Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4> Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>
         
            
            <div class="input-group">
                <div class="input-box">
                
                    <input class="name" title="TXN_AMOUNT" tabindex="10"
                            type="text" name="TXN_AMOUNT"
                            placeholder="Amount To Pay"required>
                            <i class="fa fa-money icon" ></i>
                 
                </div>
            
           
                <div class="input-box">
                
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                <input value="PAY NOW" type="submit"   onclick="" class="button">
                    
                </div>
            </div>
        </form>
    </div>
    </div>
  </div>
</body>

</html>
    
                        
                       
                       
                       