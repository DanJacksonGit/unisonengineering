<!doctype html>
<html lang="en">

<head>
  <?php include 'head.html'; ?>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <title>Pasteurizers, Homogenisers, Heat Exchangers, Pumps, Valves, Service and Testing of Process Equipment | Unison Engineering Services Ltd.</title>
  <script src="./js/javascript.js"></script>
  <script src="./js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>
  <?php include 'nav.html'; ?>
  <div class="container">
    <div class="landing-container">
      <div class="p1-land vertical-center">
        <h1 class="animated fadeInLeft slow">Take Control of your Pasteurization Costs</h1>
        <a href="#p2" style="font-weight:900;">Get Started</a><br />
        <a href="#p5" style="font-weight:900;">How do I enquire?</a>
      </div>
      <div id="p2" class="p2-land">
        <div>
          <img id="landing-img" src="./img/pasteuriser-open@2x.png">
        </div>
        <div class="p2-text">
          <h2 id="subheadline">Introducing One Touch Operation</h2>
          <h3 style="text-align:right;" id="introducing">Pasteurize from as little as 0.1c per litre</h3>
          <a href="#p3" style="font-weight:900;">Tell me more</a>
        </div>
      </div>
      <div id="p3" class="p3-land">
        <h3>Why a Unison Pasteurizer?</h3>
        <p><b>We spoke with our customers to find out exactly what they needed</b> to optimise their pasteurization process. Our engineering and design team took this information and created the <b>Unison Compact HTST Pasteurizer.</b></p>
        <p>This Pasteurizer is <b>100% Automatic.</b> It uses the <b>Continuous HTST</b> (High Temperature, Short Time) method of pasteurization. This method is <b>Faster</b> and considerably more <b>Economical</b> than traditional batch pasteurization.</p>
        <p>With design and cleanliness in mind, the Pasteurizer can be <b>Completely Enclosed.</b> Emphasis was placed on the pasteurizer being as <b>User-Friendly</b> as possible. Some flagship features that make our Pasteurizers so usable are <b>One-Touch Operation</b> and <b>Fully Automatic CIP</b> (Cleaning-In-Place). With no need to intervene with the process, you have the time to focus on other aspects of your production. A <b>Compact 1m<sup>2</sup> footprint</b> means that the <b>Unison Compact HTST Pasteurizer</b> is suitable for all processesing environments, large and small. Now is the time to invest in a Unison Compact HTST Pasteurizer.</p>
        <a style="display:block;font-weight:900;" href="#p4">Show specifications</a>
      </div>
      <div id="p4" class="p4-land">
        <div><img src="./img/pasteurizer-no-enclosure.png"></div>
        <h3>Specifications</h3>
        <table class="land-specs">
          <tbody>
            <tr>
              <th>Minimum Product Flow Rate</th>
              <td>200 L/Hr</td>
            </tr>
            <tr>
              <th>Maximum Product Flow Rate</th>
              <td>2000 L/Hr</td>
            </tr>
            <tr>
              <th>Dimensions </th>
              <td>950mm x 1100mm x 1300mm</td>
            </tr>
            <tr>
              <th>Product </th>
              <td>Milk<br />Cheese Milk<br />Coffee<br />Juice<br />Wine<br />Beer</td>
            </tr>
            <tr>
              <th>Heating Supply </th>
              <td>Electric or Boiler</td>
            </tr>
            <tr>
              <th>Electricity Supply</th>
              <td>Single-Phase or Three-Phase supply</td>
            </tr>
            <tr>
              <th>Certifications</th>
              <td>CE, UL Compliant</td>
            </tr>
          </tbody>
        </table>
        <p>Higher flow rate capacities available on request</p>
        <a href="#p5" style="font-weight:900;">How do I enquire?</a>
      </div>
      <div id="p5" class="p5-land">
        <h3>How does my enquiry work?</h3>
        <p>Follow the steps below, including as many details as you can provide. Quotes are then generated in 1-2 business days. If you are happy with your quote, Our sales team can assist you with finer details like delivery, installation and maintenance.</p>
        <p>The information we need you to provide for an accurate quote is your product <small><em>(e.g. cows milk)</em></small>, your desired flow rate <small><em>(e.g. 500 L/Hr)</em></small>, pasteurizing temperatures <small><em>(inlet, pasteurizing and outlet temperatures)</em></small>, heating supply <small><em>(boiler or electric)</em></small> and destination country.<br />
          <button class="main-button" onclick="window.location.href='./pasteurizer/pasteurizer-enquiry-form.php'">Request free quote</button></p>
      </div>
    </div>
  </div>
  <?php include 'footer.html'; ?>
</body>
</html>
<script>
  const headlineBreakpoint = 500;
  const introducingBreakpoint = 500;
  const landingBreakpoint = 600;
  $(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function() {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
</script>