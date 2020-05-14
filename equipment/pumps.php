<!DOCTYPE html>
<html>

<head>
  <?php include '../head.html'; ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/main.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="description" content="We are sole distributors of Evoguard pumps in Ireland. Evoguard offers innovative centrifugal pumps for the food and beverage industries and also for aseptic applications. Evoguard pumps meet the highest standards for product quality, hygiene, reliability and energy efficiency. We also supply quality pumps from Alfa Laval, APV, GEA, Waukesha, Fristam, SPX, Packo and others.">
  <title>Fluid Process Pumps, Centrifugal Hygeinic and Aseptic Pumps, Recirculation Pumps | Unison Engineering Services Ltd.</title>
</head>

<body>
  <!-- Navigation -->
  <?php include '.././tree/nav-l2.html'; ?>
  <?php include '.././tree/covid-banner-l2.html'; ?>
  <div class="container padding-main">
    <!-- Equipment type details -->
    <div class="row">
      <div class="col-md-8">
        <h1>Pumps</h1>
        <a href="../equipment.php">
          <button class="back-button">
            &#8592; Equipment & Products
          </button>
        </a>
        <p>
          <strong>
            We are sole distributors of Evoguard pumps in Ireland. Evoguard offer innovative centrifugal pumps for the food and beverage industries and also for aseptic applications. Evoguard pumps meet the highest standards for product quality, hygiene, reliability and energy efficiency.
          </strong>
        </p>
        <p>
          As the only Evoguard specialists in Ireland, we can provide expert advice on selecting a pump for your specified operational application.
        </p>
        <p>
          We also supply quality reconditioned pumps from Alfa Laval, APV, GEA, Waukesha, Fristam, SPX, Packo and others.
        </p>
        Interested? Send our sales team an email on <strong>info<code style="color:inherit;">@</code>unisonengineering.ie</strong> now.
        </p>
        <p>
          Our staff are here to help with every step of the process.
        </p>
      </div>
      <!-- Equipment type image -->
      <div class="col-md-4 col-10.img-fluid">
        <img class="padding-main" style="max-width:100%;max-height:100%;" src="../img/600NewPump.png" />
      </div>
    </div>
    <!-- Container for sub nav and cards-->
    <div class="row">
      <?php include 'equipment-list.html'; ?>
      <!-- Cards Container -->
      <div class="col-md-9">
        <!-- Card^n START -->
        <div class="list-card row py-3">
          <div class="list-card-image col-md-4">
            <img src="../img/400CentriPump.png" alt="Evoguard brand process pump">
          </div>
          <div class="list-card-description col-md-8">
            <h3>Hygienic Centrifugal Pump - Single Stage, Suction</h3>
            <h4>Evoguard GmbH</h4>
            <p class="list-card-price">POA<small> (Price on Application)</small></p>
            <ul>
              <li>Hygienic separation of incompatible media with leakage-free switching</li>
            </ul>
            <button style="display:block;margin-bottom:10px;margin-left:.25rem;font-size:0.85em;" id="elem-1" class="btn-default btn-secondary btn-sm py-2">More Details</button>
            <div id="toggle-1" style="display:none">
              <p>All Evoguard recirculation pumps for hygienic product feed are designed according to the EHEDG guidelines.</p>
              <div class="bullets">
                <ul>
                  <li>Tangential connection – no resistance</li>
                  <li>Optimised hydraulic efficiency thanks to a guiding contour in the housing</li>
                  <li>Impeller made of solid material</li>
                  <li>No return in the housing, and therefore optimised cleaning</li>
                  <li>Motor shaft connected with the impeller by means of hydraulic clamping element
                    <ul>
                      <li style="margin:5px 0 0 50px">Self-centering</li>
                      <li style="margin:0 0 0 50px">Easily adjustable gap dimension</li>
                      <li style="margin:0 0 5px 50px">Easy assembly</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <p style="margin-left:.25rem;">
              Interested? Send us an email on <strong>info<code style="color:inherit;">@</code>unisonengineering.ie</strong> now.
            </p>
            <a href="tel:+35361422224"><button class="btn btn-outline-secondary ml-1 mt-2">Enquire by Phone now</button></a>
          </div>
        </div>
        <!-- Card^n END -->
      </div> <!-- .col-md-9 -->
    </div> <!-- .row -->
  </div> <!-- .container .padding-main -->
</body>
<?php include '.././tree/foot-l2.html'; ?>
<script>
  $(document).ready(function() {
    $("#elem-1").click(function() {
      $("#toggle-1").toggle();
    });
    $("#elem-2").click(function() {
      $("#toggle-2").toggle();
    });
    $("#elem-3").click(function() {
      $("#toggle-3").toggle();
    });
    $("#elem-4").click(function() {
      $("#toggle-4").toggle();
    });
    $("#elem-5").click(function() {
      $("#toggle-5").toggle();
    });
    $("#elem-6").click(function() {
      $("#toggle-6").toggle();
    });
    $("#elem-7").click(function() {
      $("#toggle-7").toggle();
    });
    $("#elem-8").click(function() {
      $("#toggle-8").toggle();
    });
    $("#elem-9").click(function() {
      $("#toggle-9").toggle();
    });
    $("#elem-10").click(function() {
      $("#toggle-10").toggle();
    });
  });
</script>

</html>