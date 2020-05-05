# Unison Engineering Website

*This document gives <!-- an overview of how this website was set up and  -->a detailed overview of any patches and updates over time.*

### Table of Contents

<!-- - [Requirements]
- [Project Notes]
- [Design Notes] -->
- [Dev Notes]
- [Credits]

<!-- ## Requirements <a name="requirements"></a>

*(List the requirements for the project here, such as CMS, frameworks, plugins, etc.)*


## Project Notes <a name="project-notes"></a>

*(Any project-specific, relevant notes go here. E.g. why you went with a certain plugin.)*


## Design Notes <a name="design-notes"></a>
*(This may not be necessary, but if there's something about the design that needs to be noted, put it here.)*
 -->

## Dev Notes <a name="dev-notes"></a>
*(This is where dev-specific notes about how things are set up go. Some ideas/examples are listed below.)*

### Updates

1. **Wording/Grammar**
	Spelling/grammar error 'with in' changed to 'within'.
	
	- **When:** 16 January 2020
	- **File(s):**
	
	  - Line #23 in [Contact](./contact.php)

2. **Pasteurizer Pricing and Images Update**
	Details of pasteurisers and images of two products updated.
	
	- **When:** 16 January 2020
	- **File(s):**
	
	  - Line #83 in [Pasteurisers](./equipment/pasteurisers.php) Price change
	  - Line #86 in [Pasteurisers](./equipment/pasteurisers.php) Dimensions change
	  - Line #112 in [Pasteurisers](./equipment/pasteurisers.php) Dimensions change
	  - Line #134 in [Pasteurisers](./equipment/pasteurisers.php) Image change
	  - Line #143 in [Pasteurisers](./equipment/pasteurisers.php) Dimensions change
	  - Line #159 in [Pasteurisers](./equipment/pasteurisers.php) Image change
	  - Line #182 in [Pasteurisers](./equipment/pasteurisers.php) Image change
	  - Line #185 in [Pasteurisers](./equipment/pasteurisers.php)
	  	- Description change ("50,000 Litre Pasteurizer" to "50,000 L/H Pasteurizer")
	  - New image asset [mini-pasteuriser](./img/mini-pasteuriser.png)
	  - New image asset [skid-mounted-pasteurizer](./img/skid-mounted-pasteuriser.png)

3. **New ECA Disinfectant Product and Covid-19 update**
	
	In progress
	
	- **When:** 5 May 2020
	- **File(s):**
	
	  - Line #X in [X](./)
	

### Hacks/Kludges/Patches

1. **MS Edge & Firefox Incompatibility with CSS Grid Markup**
	- **Description**
		
		*Patch by Daniel Jackson 2020-01-23 @ 15:07 EST*

		*Issue:* Raised by Mark Hanrahan on 2020-01-17 @ 07:13 EST. Possible CSS issue specifically in firefox in relation to navigation options in navbar.

		*Analysis:* Firefox appears unable able to read certain CSS properties in the same way as chrome. Tested on windows with microsoft edge and firefox. Issue common to both. 
		
		*Resolution:* Added a max height attribute to navbar style.
	
	- **When:** 24 January 2020
	- **File(s):**
	
	  - Line #439 - #444 in [Main CSS](./main.css)
	  		
			/* PATCH MS EDGE & FF GRID ISSUE 24 JAN 2020 */
  			@media screen and (min-width: 900px) {
    			nav {
      				max-height: 17vh;
    			}
			}
		
2. **Firefox Incompatibility with SVG Markup**
	- **Description**
		
		*Patch by Daniel Jackson 2020-02-05 @ 20:00 EST.

		*Issue:* raised by Mark Hanrahan on 2020-01-30 @ 05:58 EST. Forwarded screen grab of no navigation options in navbar.

		*Analysis:* Cannot see site content due to SVG icon for mobile nav collapsible button not resizing correctly in firefox. This makes navbar options invisible when site is in desktop aspect ratio.
		
		*Resolution:* Added max-width to button.collapsible class.
	
	- **When:** 5 February 2020
	- **File(s):**
	
	  - Line #492 in [Main CSS](./main.css)
	  		
			button.collapsible {
  				visibility: hidden;
  				font-size:10pt;
  				/* PATCH - FF CSS issue 2020-02-05 */
  				max-width: 40px;
  				/* PATCH end */
			}

3. **Mailing script not sending correct information to sales team**
	- **Description**
		
		*Patch by Daniel Jackson 2020-02-23 @ 21:00 EST*

		*Issue:* raised by Mark Hanrahan on 2020-02-20 @ 05:17 EST. On pasteurizer form: 'do you have three phase' question returns '1' as an answer - this is confusing.

		*Analysis:* Not quite sure what the issue was. I had a look at the mailing script and removed 'isset' in front of '($_POST["threePhase"]'. Issue appears to be solved - isset must not have been necessary?
		
		*Resolution:* Removed 'isset' in front of:
		
			'($_POST["threePhase"]'
		
		 Issue appears to be solved.
	
	- **When:** 23 February 2020
	- **File(s):**
	
	  - Line #16 in [send-mail.php](./pasteurizer/send-mail.php)
	  		
			$flowRate = ($_POST["flowRate"]);
		 	$temp = $_POST['temp'];
		 	$inlet = $_POST['inlet']; // not required
		 	$outlet = $_POST['outlet']; // not required
		 	$holdingTime = ($_POST["holdingTime"]);
		 	/* PATCH  23 FEB 2020- Three Phase question returns 1, not 'yes' or 'no' */
		 	$threePhase = ($_POST["threePhase"]);
		 	/* END PATCH 23 FEB 2020 */
		 	$comments = ($_POST["message"]);
		 	$honeypot = $_POST['firstname'];
		 	/* Declaring email contents */
		 	$recipient = 'info@unisonengineering.ie'; // This is who receives the mail, i.e. change to sales team for production build





## Credits <a name="credits"></a>
Built & designed by Daniel Jackson @ Unison Engineering Services Ltd.