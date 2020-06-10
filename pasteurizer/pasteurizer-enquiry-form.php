<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../head.html'; ?>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <title>Unison Pasteurizer Enquiry</title>
    <meta name="description" content="Unison Engineering Services Ltd. are providers of Pasteurisers, Homogenisers, Heat Exchangers, Pumps and Valves as well as trusted Servicing and Testing partners for Process Equipment">
    <meta property="og:description" content="Unison Engineering Services Ltd. are providers of Pasteurisers, Homogenisers, Heat Exchangers, Pumps and Valves as well as trusted Servicing and Testing partners for Process Equipment" />
    <meta name="keywords" content="Homogeniser, Homogenisers, Homogenizer, Homogenizers, Milk Pasteuriser, Milk Pasteurizer, Milk Pasteuriser Ireland, Milk Pasteurizer Ireland, Pasteuriser, Pasteurizer, Pasteurisers, Pasteurizers, Flash Pasteurisers, HTST Pasteuriser, HTST Pasteursation, Heat-Exchanger, heat exchanger, Heat-Exchangers, Heat Exchangers, Valve, Valves, Pump, Pumps, Liquid Process Equipment, Krones, HST, GEA, APV, Arsopi, SPX, Evouguard, Alfa Laval, Niro Soavi, Fristam, Fristam Pumps, Hilge, Inoxpa, Mono, Packo Pumps, Sudmo, Tetra Pak, Waukesha Cherry-Burrell, Hysysco, Bertoli, FBF Italia, Block repair, Welding, Machining, Fabrication, Centrifugal Pump, Pump Repair, Pump Refurbishment, Johnson, ITT, Pureflo, Omac, JEC, Artisan, Agri, Service, Testing, Spares, Unison Engineering, Unison Limerick, Unison Ireland, Unison Europe, Tank Testing, Cream Tank, Yoghurt Tank, Tanks, Vessels, Brewery Tank, Fermenters, Steam Jacketed, Milk Tank, Juice Tank, Milk Tank, Micro-Brewery, Brew House, Kegging, Bottling, Canning, Silos, Heat Exchanger Testing, SPX Flow, Valve Service, Tank Inspection, Vessel Testing, Food Testing, Helium Testing, CIP Inspection, Heat Exchanger repair, Heat Exchanger service, Heat Exchanger re-gasketing, Re-gasket, New Plate Packs, Valve Repair, Valve Sealing, Valve Maintenance, Tank Crack Testing, Exova, PasTest2000, Unison Pastest, Homogeniser service, Homogeniser spare parts, Homogeniser repairs, Homogeniser refurbishment, Homogeniser cylinder block, Cylinder blocks, Crank shafts, Manton Gaulin, APV, SPX, Pistons">
</head>

<body>
    <?php include '../tree/nav-l2.html'; ?>
    <main>
        <form class="boilerform" action="./send-mail.php" method="post">
            <!-- Fieldset: styling only, draws box around form -->
            <fieldset class="c-form">
                <!-- Legend: defines caption for Fieldset -->
                <h1>Unison HTST Pasteurizer Enquiry</h1>
                <p>Because everyone's process is custom tailored to their needs, we will need a few details to begin your enquiry.</p>
                <p>Once we receive these details, a member of our sales team will provide you with an email quotation within 2 working days.</p>
                <p style="padding-bottom:10px;"></p>
                <h2>Tell us about you</h2>
                <p>
                    <small>
                        To quote you accurately, we need a few details first.
                    </small>
                </p>

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

                <h2>So, how do you process?</h2>
                <p><small>We can provide a pasteurizer for any liquid application. Please let us know how you require your pasteruizer to be configured. If you do not know all of these details, our engineering team can get in touch to figure out a suitable arrangement.</small></p>
                <!-- Company Name -->
                <div class="c-form__row">
                    <label for="company" class="c-label">Company Name</label><br />
                    <input type="text" name="company" id="company" tabindex="4" class="c-input-field" style="width:80%;">
                </div>

                <!-- Country -->
                <div class="c-form__row">
                    <label for="country" class="c-label">Country</label><br />
                    <input type="text" name="country" id="country" tabindex="5" class="c-input-field" style="width:80%;" required>
                    </select>
                </div>

                <!-- Product -->
                <div class="c-form__row" style="width:100%;">
                    <label for="product" class="c-label">Product<br /><small style="padding-bottom:0;">e.g. Cheese Milk</small></label><br />
                    <input type="text" name="product" id="product" tabindex="6" class="c-input-field" style="width:70%;" required>
                </div>

                <!-- Flow rate -->
                <div class="c-form__row" style="display:inline-block;width:45%;">
                    <label for="flowRate" class="c-label">Desired Flow Rate <br /><small style="padding-bottom:0;">e.g. 250 L/hr</small></label><br />
                    <input type="number" name="flowRate" id="flowRate" class="c-input-field" class="c-input-field-number" tabindex="7" min="10" max="100000" style="width:50%" required>
                </div>

                <!-- Pasteurizing Temp -->
                <div class="c-form__row" style="display:inline-block;width:45%;">
                    <label for="temp" class="c-label">Pasteurizing Temperature <br /><small style="padding-bottom:0;">e.g. 70&#8451;</small></label><br />
                    <input type="number" name="temp" id="temp" class="c-input-field" class="c-input-field-number" tabindex="8" min="1" max="300" style="width:35%;" required>
                </div>
                <br />

                <!-- Inlet Temp -->
                <div class="c-form__row" style="display:inline-block;width:45%;">
                    <label for="inlet" class="c-label">Inlet Temperature <br /><small style="padding-bottom:0;">e.g. 4&#8451;</small></label><br />
                    <input type="number" name="inlet" id="inlet" class="c-input-field" class="c-input-field-number" tabindex="9" min="1" max="100" style="width:35%" required>
                </div>

                <!-- Outlet Temp -->
                <div class="c-form__row" style="display:inline-block;width:45%;">
                    <label for="inlet" class="c-label">Outlet Temperature <br /><small style="padding-bottom:0;">e.g. 32&#8451;</small></label><br />
                    <input type="number" name="outlet" id="outlet" class="c-input-field" class="c-input-field-number" tabindex="10" min="1" max="100" style="width:40%" required>
                </div>

                <!-- Holding time -->
                <div class="c-form__row" style="display:inline-block;width:45%;">
                    <label for="holdingTime" class="c-label">Holding Time <br /><small style="padding-bottom:0;">e.g. 16 Seconds</small></label><br />
                    <input type="number" name="holdingTime" id="holdingTime" class="c-input-field" class="c-input-field-number" tabindex="11" min="0" style="width:35%" required>
                </div>

                <!-- Electricity -->
                <div class="c-form__row" id="threePhase">
                    <label style="display:inline-block;width:100%;">Do you have three phase electricty available on-site?</label><br />

                    <input type="radio" class="radio" value="Yes" name="threePhase" id="threePhaseYes" style="display:inline;margin-top:10px;" tabindex="12">
                    <label for="threePhase" style="display:inline;width:85%;"><strong>Yes</strong>,<small> <span style="text-decoration:underline; color:var(--tertiary)">I have</span> three phase electricity available on-site</small></label><br />

                    <input type="radio" class="radio" value="No" name="threePhase" id="threePhaseNo" style="display:inline;margin-top:10px;" tabindex="13">
                    <label for="threePhase" style="display:inline;width:85%;"><strong>No</strong>,<small> <span style="text-decoration:underline;color:var(--secondary)">I do not</span> have three phase electricity available on-site</small></label>
                </div>

                <!-- Additional Comments -->
                <div class="c-form__row">
                    <label for="message" class="c-label">Any Additional Information?</label><br />
                    <textarea name="message" id="message" tabindex="14" class="c-input-field--multiline" rows="5"></textarea>
                </div>

                <!-- Honeypot Security -->
                <input name="firstname" type="text" id="firstname" style="display:none;">

                <!-- Submit -->
                <div class="c-form__row">
                    <button id="form-submit-button" tabindex="15" class="c-button" type="submit" name="submit">Get my Quote</button>
                </div>
            </fieldset>
        </form>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php include '../tree/foot-l2.html'; ?>

</html>