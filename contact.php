<!DOCTYPE html>
<html>

<head>
  <?php include './head.html'; ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/main.min.css">
  <meta name="description" content="Contact Unison Engineering Services Ltd. Limerick. Unit 5 Kilmallock Road Enterprise Centre.">
  <meta property="og:description" content="Contact Unison Engineering Services Ltd. Limerick. Unit 5 Kilmallock Road Enterprise Centre." />
  <title>Contact | Unison Engineering Services Ltd.</title>
</head>

<body>
  <header>
    <?php include 'nav.html'; ?>
  </header>
  <main>
    <form class="boilerform" action="./contact-form-mailer.php" method="post">
      <fieldset class="c-form">
        <!-- Legend: defines caption for Fieldset -->
        <h1>Get in Touch With Us</h1>
        <h2>We are here to help</h2>
        <p>Expect an enquiry response within 2 working days.</p>

        <!-- Name -->
        <div class="c-form__row">
          <label for="name" class="c-label">Full Name</label><br />
          <input type="text" name="name" id="name" tabindex="1" class="c-input-field" value="" style="width:80%;" required />
        </div>
        <!-- Email -->
        <div class="c-form__row">
          <label for="email" class="c-label">Email</label><br />
          <input type="email" name="email" id="email" tabindex="2" autocapitalize="none" class="c-input-field" style="width:90%;" required />
        </div>

        <!-- Phone -->
        <div class="c-form__row">
          <label for="phone" class="c-label">Phone Number</label><br />
          <input type="tel" name="phone" id="phone" tabindex="3" class="c-input-field" style="width:70%;">
        </div>
        <!-- Additional Comments -->
        <div class="c-form__row">
          <label for="message" class="c-label">What is your enquiry?</label><br />
          <textarea name="message" id="message" tabindex="14" class="c-input-field--multiline" rows="5"></textarea>
        </div>

        <!-- Honeypot Security -->
        <input name="firstname" type="text" id="firstname" style="display:none;">
        <!-- Submit -->
        <div class="c-form__row">
          <button id="form-submit-button" tabindex="15" class="c-button" type="submit" name="submit">Send</button>
        </div>
      </fieldset>
    </form>
  </main>
  <?php include './footer.html' ?>
</body>

</html>