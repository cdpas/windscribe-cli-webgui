<?php

//Server choice value
if (!empty($_POST['server'])) {
  $server = $_POST['server']; 
}
//Connect to windscribe and if no server has been choosen it will use "best"
if (!empty($_POST['connect'])) {
   shell_exec('windscribe connect ' . $server); 
}
if (!empty($_POST['disconnect'])) {
   shell_exec('windscribe disconnect');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Windscribe-cli WebGui</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Windscribe-cli WebGui</h3>
          <!--<nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav> -->
        </div>
      </header>

      <main role="main" class="inner cover">
		<?php
			$status = shell_exec('windscribe status');
      		$statussplit = (explode(",",$status));
      		echo '<h1 class="cover-heading">';
      		echo $statussplit[1];
      		echo '</h1>';
      		echo '<p class="lead">';

      		echo "<br>";
      		echo $statussplit[2];
      		echo "<br>";
      		echo $statussplit[3];
      		echo "<br>";
      		echo $statussplit[4];

      ?>
  </p>
        <p class="lead">
          <form action="index.php" method="post">
      <select name="server" id="exampleFormControlSelect1">
        <option value="BEST">Choose server</option>
          <option value="US-C">US Central</option>
          <option value="US">US East</option>
          <option value="US-W">US West</option>
          <option value="US-N">WINDFLIX US</option>
          <option value="CA">Canada East</option>
          <option value="CA-W">Canada West</option>
          <option value="AT">Austria</option>
          <option value="BE">Belgium</option>
          <option value="BG">Bulgaria</option>
          <option value="HR">Croatia</option>
          <option value="CZ">Czech Republic</option>
          <option value="DK">Denmark</option>
          <option value="EE">Estonia</option>
          <option value="FI">Finland</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
          <option value="GR">Greece</option>
          <option value="HU">Hungary</option>
          <option value="IS">Iceland</option>
          <option value="IE">Ireland</option>
          <option value="IL">Israel</option>
          <option value="IT">Italy</option>
          <option value="LV">Latvia</option>
          <option value="LT">Lithuania</option>
          <option value="LU">Luxembourg</option>
          <option value="MD">Moldova</option>
          <option value="NL">Netherland</option>
          <option value="NO">Norway</option>
          <option value="PL">Poland</option>
          <option value="PT">Portugal</option>
          <option value="RO">Romania</option>
          <option value="SK">Slovakia</option>
          <option value="ES">Spain</option>
          <option value="SE">Sweden</option>
          <option value="CH">Switzerland</option>
          <option value="TN">Tunisia</option>
          <option value="GB">United Kingdom</option>
          <option value="GB-N">Windflix UK</option>
          <option value="AZ">Azerbaijan</option>
          <option value="IN">India</option>
          <option value="RU">Russia</option>
          <option value="ZA">South Africa</option>
          <option value="TR">Turkey</option>
          <option value="UA">Ukraine</option>  
          <option value="AU">Australia</option>
          <option value="NZ">New Zealand</option>
          <option value="HK">Hong Kong</option>
          <option value="ID">Indonesia</option>
          <option value="JP">Japan</option>
          <option value="MY">Malaysia</option>
          <option value="PH">Philippines</option>
          <option value="SG">Singapore</option>
          <option value="KR">South Korea</option>
          <option value="TW">Taiwan</option>
          <option value="TH">Thailand</option>
          <option value="VN">Vietnam</option>
          <option value="AR">Argentina</option>
          <option value="BR">Brazil</option>
          <option value="CO">Colombia</option>
          <option value="MX">Mexico</option> 
        </select> <br><br>
        <button type="submit" class="btn btn-sm btn-secondary" name="connect" value="Connect" />Connect</button>
        <button type="submit" class="btn btn-sm btn-secondary" name="disconnect" value="Disconnect" />Disconnect</button>
    </form>


         </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
