<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php 
    // 
    $credit = 1000;
    // 
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You have $".$credit." in your wallet.</h1>";

    //
    $products['Computer']=750;
    $products['Car']=15000;
    $products['iPhone']=1000;
    $products['Toaster']=75;

    // 
    foreach($products as $key => $value){
      echo "<p>The ".$key." costs ".$value."</p.>";
    }

    // 
    echo "<h2>Items you can afford</h2>";    
    foreach($products as $key => $value){
      if($value <= $credit){
        echo "<p>".$key."</p>";
      }
    }

    // functions

    // define function
    function tax_calc($amount,$tax){
      $calculate_tax = $amount*$tax;
      $amount = round($amount + $calculate_tax,2);
      return $amount;
    }
    // call function
    echo tax_calc(750,0.223);

    ?> 
  </body>
</html>
