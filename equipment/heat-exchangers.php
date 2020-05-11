<!DOCTYPE html>
<html>

<head>
  <?php include '../head.html'; ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="description" content="Unison Engineering supply all makes of Plate Heat Exchangers and gaskets including GEA Ecoflex, Arsopi, Alfa Laval, APV, Fischer, Tranter, Schmidt, Swed and others.">
  <title>Heat Exchanger Sales and Service | Unison Engineering Services Ltd.</title>
</head>

<body>
  <!-- Navigation -->
  <?php include '.././tree/nav-l2.html'; ?>
  <?php include '.././tree/covid-banner-l2.html'; ?>
  <div class="container padding-main">
    <!-- Equipment type details -->
    <div class="row">
      <div class="col-md-8">
        <h1>Heat Exchangers</h1>
        <a href="../equipment.php">
          <button class="back-button">
            &#8592; Equipment & Products
          </button>
        </a>
        <p>
          <strong>
            Unison Engineering supply all makes of Plate Heat Exchangers and gaskets including GEA Ecoflex, Arsopi, Alfa Laval, APV, Fischer, Tranter, Schmidt, Swed and others.
          </strong>
        </p>
        <p>
          Our expert team can work with you to select the right equipment to meet your specific liquid processing requirements and to ensure full compliance to relevant regulations and internal audit standards. Get in contact for more information.
        </p>
        Interested? Send our sales team an email on <strong>info<code style="color:inherit;">@</code>unisonengineering.ie</strong> now.
        </p>
        <p>
          Our staff are here to help with every step of the process.
        </p>
      </div>
      <!-- Equipment type image -->
      <div class="col-md-4 col-10.img-fluid">
        <img class="padding-main" style="max-width:100%;max-height:100%;" src="../img/600NewHeatExch.png" />
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
            <img src="../img/600NewHeatExch.png" alt="Arsopi brand Heat Exchanger">
          </div>
          <div class="list-card-description col-md-8">
            <h3>New and Used Heat Exchangers</h3>
            <h4>Various Brands</h4>
            <p class="list-card-price">POA<small> (Price on Application)</small></p>
            <ul>
              <li>Interested? Send our sales team an email on <strong>info<code style="color:inherit;">@</code>unisonengineering.ie</strong> now.</li>
            </ul>
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