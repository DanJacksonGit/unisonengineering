<!DOCTYPE html>
<html>

<head>
  <?php include '../head.html'; ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="description" content="We distribute and supply a variety of miscellaneous new and used equipment. Inclusive of this is our brand new innovative Water Saver Unit.">
  <title>Various Miscellaneous Equipment such as the innovative Unison Water Saver and more | Unison Engineering Services Ltd.</title>
</head>

<body>
  <!-- Navigation -->
  <?php include '.././tree/nav-l2.html'; ?>
  <div class="container covid-patch padding-main">
    <!-- Equipment type details -->
    <div class="row">
      <div class="col-md-8">
        <h1>Miscellaneous Process Equipment</h1>
        <a href="../equipment.php">
          <button class="back-button">
            &#8592; Equipment & Products
          </button>
        </a>
        <p>
          <strong>
            Unison Engineering Services Ltd. manufacture, distribute and supply a variety of miscellaneous new and used equipment. Inclusive of this is our innovative Water Saver Unit.
          </strong>
        </p>
        <p>
          Interested? Send our sales team an email on <strong>info<code style="color:inherit;">@</code>unisonengineering.ie</strong> now.
        </p>
        <p>
          Our staff are here to help with every step of the process.
        </p>
      </div>
      <!-- Equipment type image -->
      <div class="col-md-4 col-10.img-fluid">
        <img class="padding-main" style="max-width:100%;max-height:100%;" src="../img/600NewOther.png" />
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
            <img src="../img/water-saver.png" alt="Unison Water Saver">
          </div>
          <div class="list-card-description col-md-8">
            <h3>Unison Water Saver Unit</h3>
            <h4>Unison Engineering Services</h4>
            <p class="list-card-price">POA<small> (Price on Application)</small></p>
            <ul>
              <li><strong>Dimensions:</strong> 600mm x 650mm x 1200mm</li>
              <li>The Unison Water Saver Unit reduces your costs by recovering and recycling process water that would otherwise be dumped to drain.</li>
            </ul>
            <button style="display:block;margin-bottom:10px;margin-left:.25rem;font-size:0.85em;" id="elem-1" class="btn-default btn-secondary btn-sm py-2">More Details</button>
            <div id="toggle-1" style="display:none">
              <p><strong>Use Case:</strong> <em>An Homogeniser with typical water usage per machine of 20 l/min on a 12h/6d/50wk basis with water, with effluent disposal costing €2.50 per m<sup>3</sup><br /></em> <strong>Annual Savings equate to approximately €10,800.</strong></p>
              <div class="bullets">
                <ul>
                  <li>The system can show up contaminated water, giving early warning if there is a problem within your system.</li>
                  <li>Impeller made of solid material</li>
                  <li>Dual Turbidity Sensors</li>
                  <li>Conductivity Sensor</li>
                  <li>Automatic Flushing and Washing</li>
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