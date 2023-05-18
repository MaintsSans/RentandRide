<?php 
require ('dbconfig.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
  // Process the form data and insert it into the database
  $fullname = stripslashes($_POST['fullname']);
  //escapes special characters in a string
  $full_name = mysqli_real_escape_string($conn, $fullname);
  $email    = stripslashes($_POST['email']);
  $email    = mysqli_real_escape_string($conn, $email);
  $address1 = stripslashes($_POST['address']);
  $address1 = mysqli_real_escape_string($conn, $address1);
  $city   = stripslashes($_POST['city']);
  $city    = mysqli_real_escape_string($conn, $city);
  $state1 = stripslashes($_POST['state']);
  $state1 = mysqli_real_escape_string($conn, $state1);
  $zipcode  = stripslashes($_POST['zipcode']);
  $zipcode   = mysqli_real_escape_string($conn, $zipcode);
  $cvv = stripslashes($_POST['cvv']);
  $cvv= mysqli_real_escape_string($conn, $cvv);
  $nameoncard  = stripslashes($_POST['nameoncard']);
  $nameoncard   = mysqli_real_escape_string($conn, $nameoncard);
  $creditcardnumber = stripslashes($_POST['creditcardnumber']);
  $creditcardnumber= mysqli_real_escape_string($conn, $creditcardnumber);
  $expdate  = stripslashes($_POST['expdate']);
  $expdate   = mysqli_real_escape_string($conn, $expdate);
  $create_datetime = date("Y-m-d H:i:s");

  $query2 = "INSERT INTO `customers` (full_name, email, address1, city, state1, nameoncard, creditcardnumber, expdate, zipcode, cvv) 
  VALUES ('$full_name', '$email', '$address1', '$city', '$state1', '$nameoncard', '$creditcardnumber', '$expdate', '$zipcode', '$cvv')";
  $result   = mysqli_query($conn, $query2);

  if (!$result) {
    die("Error: " . mysqli_error($conn));
  } else {
    echo "Purchase was done successfully .";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    
<!-- custom css file link  -->
<link rel="stylesheet" href="payment.css">

</head>
<body>
<div class="container">

    <form method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Test name" id="fullname" name="fullname" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="TestEmail@gmail.com" name="email" id="email" required >
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Lakouva Naousas 30" name="address" id="address" required>
                    <div class="inputBox">
                <span>city :</span>
                <input type="text" placeholder="Naousa City" name="city" id="city" required>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>state :</span>
                    <input type="text" placeholder="Greece" name="state" id="state" required>
                </div>
                <div class="inputBox">
                    <span>zip code :</span>
                    <input type="text" placeholder="59200" maxlength="5" name="zipcode" id="zipcode" required >
                </div>
            </div>

        </div>

        <div class="col">

            <h3 class="title">payment</h3>

            <div class="inputBox">
                <span>cards accepted :</span>
                <img src="img/card_img.png" alt="">
            </div>
            <div class="inputBox">
                <span>name on card :</span>
                <input type="text" placeholder="Card Name" name="nameoncard" id="nameoncard"required>
            </div>
            <div class="inputBox">
                <span>credit card number :</span>
                <input type="text" placeholder="1111 2222 3333 4444" maxlength="19" name="creditcardnumber" id="creditcardnumber"required>
            </div>
            <div class="inputBox">
                <span>Exp Date :</span>
                <input type="text" placeholder="12/28 " name="expdate" id="expdate"required>
            </div>

            <div class="flex">
                
                <div class="inputBox">
                    <span>CVV :</span>
                    <input type="text" placeholder="352" maxlength="3" name="cvv" id="cvv"required>
                </div>
            </div>

        </div>

    </div>
    <input type="submit" value="proceed to checkout" class="submit-btn">
    <p class="link"><a href="website.html">Go home</a></p>
    

</form>
</div>  
</body>
</html>