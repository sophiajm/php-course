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

      // 3 Types of Loops
        // For: set a value and repeat until value is less than another
        // While: continue looping until something changes
        // Foreach: keep looping for every item in an array
      foreach($products as $key => $value){
        echo "<p>The ".$key." costs ".$value."</p.>";
      }
      

    ?> 
  </body>
</html>
