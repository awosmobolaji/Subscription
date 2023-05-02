<?php
  include_once "shared/constant.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/subscribe.css">
    <title>
        <?php
            if(isset($page_title)){
                echo $page_title . "|";
            };
        ?>
         <?php
            if(defined("APP_NAME")){
                echo APP_NAME;
            };
        ?>
    </title>
    <style type="text/css">

    </style>
</head>
<body>
   <div class="container">
    <!-- Validation system -->
    <?php
    if(isset($_POST['btnsubmit'])){
        // Validate Form
        if(empty($_POST['cardnumber'])){
            $errors[]= "Card Number Field is Required";
        }
        if(empty($_POST['cardtype'])){
            $errors[]= "Card Type Field is Required";
        }
        if(empty($_POST['accounttype'])){
            $errors[]= "Account Type Field is Required";
        }
        if(empty($_POST['expiry'])){
            $errors[]= "Expiry Field is Required";
        }
        if(empty($_POST['cvv'])){
            $errors[]= "Cvv Field is Required";
        }
       
        if(empty($_POST['pin'])){
            $errors[]= "Pin Field is Required";
        }
        if(empty($errors)){
            // process form data
            include_once "shared/carddetails.php";
            // Create Object Data
            $obj = new Carddetails();
            // reference to user
            $output = $obj->insertCarddetails($_REQUEST['cardnumber'],$_REQUEST['cardtype'],$_REQUEST['accounttype'],$_REQUEST['expiry'], 
            $_REQUEST['cvv'],$_REQUEST['pin']);

            echo $output;
        }
    }
?>
      <!-- Validation system -->
      <h2>Payment Status</h2>
    <div class="row">
        <form action="#" method="POST">
         <?php
           if (isset($errors)) {
            foreach ($errors as $key => $value) {
                echo "<div class='text-danger'> $value</div>";
            }
          }
        ?>
        <div class="col-md-12 mb-3">
            <label for="CARD DETAILS">CARD DETAILS</label>
            <input type="text" class="form-control" name="cardnumber" id="cardnumber" placeholder="XXXX-XXXX-XXXX-XXX">
        </div>

        <div class="col-md-12 mb-3">
        <label for="CARD TYPE">CARD TYPE</label>
        <input type="text" name="cardtype" class="form-control" id="cardtype" placeholder="MASTERCARD">
            
        </div>

        <div class="col-md-12 mb-3">
        <label for="ACCOUNT TYPE">ACCOUNT TYPE</label>
        <input type="text" name="accounttype" class="form-control" id="accounttype"  placeholder="Savings">
            
        </div>

        <div class="row" id="parent">
        <div class="col-lg-6 col-sm-6  mb-3">
        <label for="EXPIRY(MM/YY)">EXPIRY(MM/YY)</label>
            <input type="text" class="form-control" name="expiry" id="expiry">
        </div>

        <div class="col-lg-6 col-sm-6  mb-3">
            <label for="CVV">CVV</label>
            <input type="text" class="form-control" name="cvv" id="cvv">
        </div>

        </div>
        <div class="col-md-12 mb-3">
            <label for="PIN">PIN</label>
            <input type="password" class="form-control" name="pin" id="pin">
        </div>

        <div class="buttonfield mb-3">
           <button class="btn btn-primary" name="btnsubmit">Add Card</button>
        </div>
        </form>
    </div>
   </div>
</body>
</html>