<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Your Special Burger</title>
</head>
<body>

   <h1>Burger Truck</h1>

      <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">

         <fieldset>

            <label>NAME</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

            <label>Burger</label>
            <input type="number" name="burger" value="<?php if(isset($_POST['burger'])) echo htmlspecialchars($_POST['burger']) ;?>">

            <label>Salad</label>
            <input type="number" name="salad" value="<?php if(isset($_POST['salad'])) echo htmlspecialchars($_POST['salad']) ;?>">

            <label>French Fries</label>
            <input type="number" name="fries" value="<?php if(isset($_POST['fries'])) echo htmlspecialchars($_POST['fries']) ;?>">

            <label>Chicken Nugget</label>
            <input type="number" name="nugget" value="<?php if(isset($_POST['nugget'])) echo htmlspecialchars($_POST['nugget']) ;?>">

            <label>Coke</label>
            <input type="number" name="coke" value="<?php if(isset($_POST['coke'])) echo htmlspecialchars($_POST['coke']) ;?>">

            <label>Any other requirement</label>
            <input type="text" name="other" value="<?php if(isset($_POST['other'])) echo htmlspecialchars($_POST['other']) ;?>">

            <input type="submit" value="Place the order">

         </fieldset>
         
         <p><a href="">Reset</a></p>

      </form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name</p>';
     }
   
    if(empty($_POST['burger'])) {
       echo '<p class="error">Please fill out the number of burger</p>';
    }
   
    if(empty($_POST['salad'])) {
       echo '<p class="error">Please fill out number of salad</p>';
    }
   
    if(empty($_POST['fries'])) {
       echo '<p class="error">Please fill out the number of french fries!</p>';
    }
   
    if(empty($_POST['nugget'])) {
       echo '<p class="error">Please fill out the number of nugget</p>';
    }

    if(empty($_POST['coke'])) {
        echo '<p class="error">Please fill out the number of coke</p>';
     }
   
     if (isset($_POST['name'],
     $_POST['burger'],
     $_POST['salad'],
     $_POST['fries'],
     $_POST['nugget'],
     $_POST['coke'])) {
     $name = $_POST['name'];
     $burger = $_POST['burger'];
     $salad = $_POST['salad'];
     $fries = $_POST['fries'];
     $nugget = $_POST['nugget'];
     $coke = $_POST['coke'];
     
     $burgerprice = 12;
     $saladprice = 6;
     $friesprice = 5;
     $nuggetprice = 5;
     $cokeprice = 2.5;

     $totalprice = ($burgerprice * $burger) + ($saladprice * $salad) +($friesprice * $fries) + ($nuggetprice * $nugget) + ($cokeprice * $coke);

     if(!empty($burger && $salad && $fries && $nugget && $coke)) {


        echo '
        <div class="box">
        <h2>Hello <b>'.$name.'</b>,</h2>
        <p>Here is your order: Burger<b> +$'.$burgerprice*$burger.'</b>, Salad <b>+$'.$saladprice*$salad.'</b>, French fries <b>+$'.$friesprice*$fries.'</b>, Chicken nugget <b>+$'.$nuggetprice*$nugget.'</b>, Coke<b> +$'.$cokeprice*$coke.'</b></p>
        <p>Your total price is <b>$'.$totalprice.'</b></p>
        </div>
        ';
     }
    }
}

?>

    
</body>
</html>
