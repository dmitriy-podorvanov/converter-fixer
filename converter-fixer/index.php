<?php include 'api.php';?>

<!DOCTYPE html>
<html>
<title>Converter</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

.diff{
  margin-left: 10px;
  font-size: 80%;
  color: grey;
}

</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-half">

      <div class="w3-white w3-text-grey w3-card-4">

        <div class="w3-container">

          <!-- Data in start -->
          <p><i class="fa fa-calendar fa-fw w3-margin-right w3-large w3-text-teal"></i><?php print $date?></p>
          <p><i class="fa fa-dollar fa-fw w3-margin-right w3-large w3-text-teal"></i><?php print printf($format, round($usd, 4)) ?> 
          <span class="diff"><?php print ($usd-$y_usd)?></span>
          <?php if(($usd-$y_usd) > 0) {?>
          <i class="fa fa-caret-up" style="color:lightgreen;" aria-hidden="true"></i>
          <?php } ?>
          <?php if(($usd-$y_usd) < 0) {?>
          <i class="fa fa-caret-down" style="color:red;" aria-hidden="true"></i>
          <?php } ?>

          
          </p>

          <p><i class="fa fa-eur fa-fw w3-margin-right w3-large w3-text-teal"></i><?php print printf($format, round($eur, 4))?>
          
          <span class="diff"><?php print ($eur-$y_eur)?></span>
          <?php if(($eur-$y_eur) > 0) {?>
          <i class="fa fa-caret-up" style="color:lightgreen;" aria-hidden="true"></i>
          <?php } ?>
          <?php if(($eur-$y_eur) < 0) {?>
          <i class="fa fa-caret-down" style="color:red;" aria-hidden="true"></i>
          <?php } ?>
  

          </p>
          <p><i class="fa fa-money fa-fw w3-margin-right w3-large w3-text-teal"></i><?php print printf($format, round($mdl, 4)) ?>
          
          <span class="diff"><?php print ($mdl-$y_mdl)?></span>
          <?php if(($mdl-$y_mdl) > 0) {?>
          <i class="fa fa-caret-up" style="color:lightgreen;" aria-hidden="true"></i>
          <?php } ?>
          <?php if(($mdl-$y_mdl) < 0) {?>
          <i class="fa fa-caret-down" style="color:red;" aria-hidden="true"></i>
          <?php } ?>
  
          
          </p>
          <!-- Data in end -->

          <hr>
          <select name="" id="">
          
          <?php foreach ($currencies['rates'] as $key => $value) {
               ?>
          
          <option value="<?php print $key ?>"><?php print $key." -> ".$value ?></option>
          
          <?php }; ?>

          </select>
          
          
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>


  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>

</body>
</html>
