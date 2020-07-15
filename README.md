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
	
	Large update: Significant changes noted below.

	**Short summary:** Added new content to reflect Covid-19 global pandemic and product Unison make that can sanitise this. Also addressed some UI annoyances and made some UX improvements. formatted code and implemented a minified css sheet for production build.
	
	- **When:** 5 - 13 May 2020
	- **File(s):**
	
	  - New:
	  	- [Covid Banner](./covid-banner.html) banner below nav on most pages throughout the site. Goal is to tell users what the company are doing re: coronavirus.
		- [Covid Banner (L2)](./tree/covid-banner-l2.html) see above
		- [Covid Banner (L3)](./tree/covid-banner-l3.html) see above
	  	- [ECA Disinfectant](./equipment/eca-disinfectant.php) Same format as equipment & products. Sselection page for information articles about ECA Water.
		- [About ECA (article)](./equipment/eca-disinfectant/about-eca.php) New article format.
		- [Avian Influenza (article)](./equipment/eca-disinfectant/avian-influenza.php) New article format.
		- [Coronavirus Covid-19 (article)](./equipment/eca-disinfectant/covid-19.php) New article format.
		- [Validation (article)](./equipment/eca-disinfectant/validation.php) New article format.

	  - Updated
	    - [Contact form mailer](./equipment/eca-disinfectant/validation.php) Formatting - Spacing for readability on lines 3, 23, 25.
		- [Equipment & Products](./equipment.php) 
			- Line #7 Updated title to reflect that this page now shows products (On the basis that ECA Water is not equipment)
			- Line #13 Added covid-banner component
			- Line #18 Code Formatting (space). h1 now reads "Equipment '& Products'"
			- Line #19 Added max-width property on p for UX (paragraph lines should be no longer than ~70 characters to prevent readibility confusion). Updated description to reflect new ECA product.
			- Line #29 Shortened description
			- Line #31 Improved copy on call to action
			- Line #41 Shortened description
			- Line #43 Improved copy on call to action
			- Line #44-53 New card for ECA fluid
			- Line #62-64 Formatting & Grammar improvement
			- Line #75 Shortened description
			- Line #77 Improved copy on call to action
			- Line #87 Shortened description
			- Line #89 Improved copy on call to action
			- Line #99 Shortened description
			- Line #101 Improved copy on call to action
        - [Equipment List (component)](./contact-form-mailer.php) Formatting, Line #10-12 added ECA Disinfectant
		- [Footer](./footer.html) #49 Line Formatting & comment.
		- [Footer L2](./tree/foot-l2.html) Formatting, comment & adding mailchimp signup.
		- [Footer L3](./tree/foot-l3.html) Formatting, comment & adding mailchimp signup.
		- [Head - meta info](./head.html) Formatting
		- [Heat Exchangers](./heat-exchangers.php) Formatting, added covid banner, #21-26 added button pointed to 'Equipment & Products' - improve UX. Fixed incorrect footer component link.
		- [Home](./index.php) 
			- Formatting
			- Line #15 covid banner component added
			- Line #20 compressed image to 20% for better loading times
		- [Homogenisers](./homogenisers.php) Formatting, added covid banner, #22-27 added button pointed to 'Equipment & Products' - improve UX. Fixed incorrect footer component link.
		- [Nav](./nav.html)
			- General formatting for readability
			- Line #2, #23 Added div wrapper ".nav-content" to give Nav a max-width. Better UX, more visual continuity.
		- [Nav L2](./tree/nav-l2.html) See 'Nav' above
		- [Nav L3](./tree/nav-l3.html) See 'Nav' above
		- [Not Found/404](./not_found.html) Formatting. Improved UX, fixed width issue on background image.
		- [Other Miscellaneous Equipment](./other.php) Formatting, added covid banner, #21-26 added button pointed to 'Equipment & Products' - improve UX. Line #29: Improved wording, unnecessary hyperbole in page description 'brand new' removed. Fixed incorrect footer component link.
		- [Pasteurisers (Product Result Page)](./pasteurisers.php) Formatting, added covid banner line #14, #20-24 added button pointed to 'Equipment & Products' - improve UX. Fixed incorrect footer component link.
		- [Pasteurizer (Marketing showcase page)](./pasteurizer.php) Formatting
		- [Pasteurizer Enquiry Form](./pasteurizer-enquiry-form.php) Formatting
		- [Pumps](./pumps.php) Formatting, removed uppercase h1, added line #14 covid banner. Added button pointed to 'Equipment & Products' - improve UX. Fixed incorrect footer component link.
		- [Send Mail (PHP form mailing script)](./pasteurizer/send-mail.php) Formatting
		- [Service](./service.php) Formatting, removed uppercase h1, added line #14 covid banner
		- [Spares](./spares.php) Formatting, removed uppercase h1, added line #16 covid banner
		- [Spares](./testing.php) 
			- General formatting
			- Line #14 Added covid banner 
			- Line #19 removed uppercase h1 
			- Line #30 fixed wording
		- [Valves](./valves.php) Formatting, added covid banner, #23-28 added button pointed to 'Equipment & Products' - improve UX. Fixed incorrect footer component link.
		- [CSS Stylesheet (Non-minified)](./css/main.css) 
			Along with formatting and comments to make things easier to understand:
			- Line #38-52 		New colour variables 
			- Line #87 			h1 increased in size - UI improvement
			- Line #93-97  		h1 on mobile back to appropriate size on mobile
			- Line #153-174 	.main-button moved here for better continuity
			- Line #183-207		.back-button new class for back buttons globally 
			- Line #216-333 	.article and related new classes
			- Line #345 		commented padding-top: covid banner temp taking space
			- Line #365 		commented padding-top: covid banner temp taking space
			- Line #377-379		.padding-main new home
			- Line #401-415		moving classes closer to their companions - continuity 
			- Line #657 		Added max-height to nav on landcape and up class for covid banner
			- Line #672-675		.nav-content new class to constrain nav to a max-width for better UX and UI. Nav doesn't remain hard left/hard right on widescreens anymore 
			- Line #688 		added !important to text-decoration to rid link underlines on hover
			- Line #759-762		Commented container top padding due to covid-banner now in its place 
			- Line #783 		reduced mobile #logo img in nav margin-bottom by 5px - UI adjustment 
			- Line #789 		added min-height to mobile nav 
			- Line #842-955		.covid-banner and related new styling
			- Line ~#1066 		.atf-blocks img class removed due to unnecessary.
			- Line #1393 		.testimonial-body img gave width/height a % for ff compatibility. changed margin-top value to %
			- Line #1403-1419	.testimonial-body & testimonial-body blockquote improved for better reading, narrower width (better UX), also changed text font size to em value.
			- Line #1556 		.category-selection duplicate margin (vw) removed and replaced with padding rem value that was in use already
			- Line #1780 		Added max-width to .equipment-nav li - UI improvement
			- Line #1802		Added margin to mobile .list-card

4. **Form tweaks**
	
	 Direct users enquiring about pasteurizers to use pasteuriser enquiry form instead of general contact form.
	
	- **When:** 10 June 2020
	- **File(s):**
		- [Pasteurizer Enquiry Form](./pasteurizer/pasteurizer-enquiry-form.php)
			- Line #71-72 		Copy change on textbox label from 'flow rate' to 'desired flow rate'. Added required attribute to field.
			- Line #78 			Added required attribute to field.
			- Line #85 			Added required attribute to field.
			- Line #91 			Added required attribute to field.
			- Line #97 			Added required attribute to field.
		- [Contact Form](./contact.php)
			- Line #22-23 		Copy change. Got rid of 'here to help' h2 and replaced it with information and hyperlink to pasteurizer enquiry form.

5. **Removal of some Covid-19 banners**

	**Short summary:** Removed some covid banners as requested by Mark Hanrahan on 25 June 2020 @ 9:29. Covid banner was left on home page.
	
	- **When:** 15 July 2020
	- **File(s):**

	  - Updated
	  	- [ECA Disinfectant](./equipment/eca-disinfectant.php) 
		  	- Line #14 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #16
		- [Equipment & Products](./equipment.php) 
			- Line #13 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #15
		- [Heat Exchangers](./heat-exchangers.php) 
			- Line #16 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #17
		- [Homogenisers](./homogenisers.php) 
			- Line #17 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #18
		- [Other Miscellaneous Equipment](./other.php) 
			- Line #16 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #16
		- [Pasteurisers (Product Result Page)](./pasteurisers.php) 
			- Line #14 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #14
		- [Pumps](./pumps.php) 
			- Line #16 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #16
		- [Service](./service.php) 
			- Line #14 php inlude line removed. padding reintroduced through 'covid-patch' class on container class: line #16
		- [Spares](./spares.php) 
			- Line #16 php inlude line removed. padding reintroduced through 'covid-patch' class on container class: line #17
		- [Testing](./testing.php) 
			- Line #14 php inlude line removed. padding reintroduced through 'covid-patch' class on container class: line #15
		- [Valves](./valves.php) 
			- Line #18 php inlude line removed. padding reintroduced through 'covid-patch' class in container on line #18
		- [CSS Stylesheet (Non-minified)](./css/main.css) 
			Along with formatting and comments to make things easier to understand:
			- Line #353 		New class: covid patch with top padding to compensate for lack of covid banner on some pages 
			- Line #366-367 	'PUT BACK WHEN COVID IS REMOVED' comment uncommented. 'padding-top:65px' was the content on container class.
			- Line #760-763  		'PUT BACK WHEN COVID IS REMOVED' comment uncommented. 'padding-top:130px' was the content on container class.

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


4. **Broken link in footer**
	- **Description**
		
		*Patch by Daniel Jackson 2020-05-05 @ 12:00 IST (UTC +1)*

		*Issue:* Raised by Daniel Jackson 2020-05-05 @ 12:00 IST (UTC +1). Link in footer to equipment has a slash at the end causing broken links.

		*Analysis:* Remove of forward slash at the end of hyperlink. 
		
		*Resolution:* Removed forward slash at the end of hyperlink, added .php extension. 
	
	- **When:** 5 May 2020
	- **File(s):**
	
	  - Line #7 #8 in [footer](./footer.php)
	  - Line #7 #8 in [footer](./tree/foot-l2.html)
	  - Line #7 #8 in [footer](./tree/foot-l3.html)



## Credits <a name="credits"></a>
Built & designed by Daniel Jackson @ Unison Engineering Services Ltd. 