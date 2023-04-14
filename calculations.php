<?php
  //Get the user input in Canadian Dollars
  $amountCanadianDollars = floatval($_POST["amount-canadian-dollars"]);

  //Perform mathematical equations to convert to pounds and euros and display results.
  $amountBritishPounds = $amountCanadianDollars * 0.5967;
  $britishPoundsRounded = round($amountBritishPounds, 2);

  $amountEuros = $amountCanadianDollars * 0.6791;
  $amountEurosRounded = round($amountEuros, 2);
?>

<h3>Results:</h3>
The value of your money in British pounds sterling is £<?php echo "$britishPoundsRounded" ?>, and the the value in Euros is €<?php echo "$amountEurosRounded" ?>.