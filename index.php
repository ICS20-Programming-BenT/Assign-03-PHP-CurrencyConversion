<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Assign-03: Currency Conversions with PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-pink.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Currency Conversions in PHP</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
    
      <!-- Web page heading and body text -->
      <?php
        echo "<h1>Currency Conversions in PHP</h1>";
        echo "<p>All travellers have experienced one major problem at least once, not knowing how to convert the currency of their home country to the currency of the country they are visiting. If you are planning to take a vacation to the United Kingdom, the European Union, or any of their associated overseas territories, I strongly encourage you to make use of this web page, which will convert Canadian Dollars (CAD) to British pounds sterling (GBP) and Euros (EUR).</p>";
        ?>
  
      <!-- Image -->
      <center>
        <img src="./images/pounds_and_euros.jpg" alt="British pounds sterling and Euros" width="476" height="290" >
        <br>
        <br>
      </center>

      <center>
        <table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric">Currency</th>
              <th> 3-letter acronym</th>
              <th>One Canadian Dollar equals</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="mdl-data-table__cell--non-numeric">British pounds sterling</td>
              <td>GBP</td>
              <td>£0.5967 (data from April 6, 2023)</td>
            </tr>
            <tr>
              <td class="mdl-data-table__cell--non-numeric">Euros</td>
              <td>EUR</td>
              <td>€0.6791 (data from April 6, 2023)</td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
      </center>

      <!-- Body text -->
      <?php echo "<p>Please fill in the form below to indicate the amount of money in Canadian Dollars (CAD) that you would like to convert.</p>" ?>
  
      <!-- User input form -->
      <form action="./calculations.php" method="post" target="result">
        <label for="amount-canadian-dollars">Amount of money in Canadian Dollars (CAD):</label>
        <input type="number" step="0.01" min="0" id="amount-canadian-dollars" placeholder="Canadian Dollars..." name="amount-canadian-dollars"><br><br>
        <!-- Colored raised button -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
          Convert!
        </button>
      </form>
      <br>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="result" name="result">
      </iframe>
      <br>
      <br>
    </main>
  </body>
</html>