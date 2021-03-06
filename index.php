<?php
include ('account.php');
include ('functions.php');

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors' , 1);


//generate projects
populateProjects("arvr", $projectsOutput, $projectsOutput2);
$outputARVR = $projectsOutput;

populateProjects("class", $projectsOutput, $projectsOutput2);
$outputCLASS = $projectsOutput;

populateProjects("misc", $projectsOutput, $projectsOutput2);
$outputMISC = $projectsOutput;

populateProjects("all", $projectsOutput, $projectsOutput2);
$outputALL = $projectsOutput;
$outputALL2 = $projectsOutput2;
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Todd Murphy</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="/logos/websiteIcon.png">
    
    <!-- AJAX
	================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    
    <script src="js/projects.js"></script>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">TM</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Projects</a></li>
						<!--<li><a class="smoothscroll"  href="#services" title="">Services</a></li>-->					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						<li><a href="login.html" title="">Login</a></li>	
						<!--<li><a href="styles.html" title="">Style Demo</a></li>-->				
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm Todd Murphy.</h1>

	   			<p class="intro-position">
	   				<span>Web Developer</span>
	   				<span>Hacker</span>
	   				<span>Pinball Enthusiast</span>
                    <span>and so much more</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
          <li><a href="https://www.facebook.com/todd.murphy.376"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.linkedin.com/in/tmurphy605"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://github.com/tmurphy605"><i class="fa fa-github"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="logos/logoSmall.png" alt="Profile Picture">

   				<p class="lead">I am always looking for a way to discover new technology. Currently, I occupy my time developing Virtual Reality Applications in Unity for Oculus. I do a little bit of ARKit development on the side too. Nothing excites me more than learning new technology.</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p>Dedicated, driven and determined.</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Todd Murphy</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>June 5, 1998</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Developer</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.toddamurphy.me</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>todd@toddamurphy.me</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p><b>Certifications:</b>
                <br>
                CompTIA Security+
                <br>
                U.S. Government Security Clearance: Secret</p>

				<!--<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>HTML5</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>CSS3</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>JQuery</strong>
				   </li>
				   <li>
				   	<div class="progress percent95"><span>95%</span></div>
				   	<strong>PHP</strong>
				   </li>
				   <li>

				   	<div class="progress percent75"><span>75%</span></div>
				   	<strong>Wordpress</strong>
				   </li>
      
				</ul> --><!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Contact Me</a>
   			<a href="resume.html" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


	<!-- Projects Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Projects</h5>
   			<h1>Check Out Some of My Works.</h1>

   			<p class="lead">These are some of my favorite works from my github. They range from AR/VR projects to Class projects to crazy electronics that I designed and built myself.</p>

   		</div>
        <div class="col-twelve" id="repoList">
            <div id="repoListContainer">
                <ul id="repoListNavigator">
                    <li id="liARVR"><a href="#portfolio" onclick="showARVR();" value="ar">AR/VR</a></li>
                    <li id="liCLASS"><a href="#portfolio" onclick="showCLASS();" value="class">CLASS</a></li>
                    <li id="liMISC"><a href="#portfolio" onclick="showMISC();" value="misc">MISC</a></li>
                    <li class="currentCategory" id="liALL"><a href="#portfolio" onclick="showALL();" value="all">ALL</a></li>
                </ul>
            </div>
        </div>
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">
        <div class="col-twelve">
   	        <!-- portfolio-wrapper -->
            <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
                <div class="projectsARVR" id="projectsARVR">
                    <?php 
                        echo $outputARVR;
                    ?>
                </div>
                <div class="projectsCLASS" id="projectsCLASS">
                    <?php 
                        echo $outputCLASS;
                    ?>
                </div>
                <div class="projectsMISC" id="projectsMISC">
                    <?php 
                        echo $outputMISC;
                    ?>
                </div>
                <div class="projectsALL" id="projectsALL">
                    <?php 
                        echo $outputALL;
                    ?>
                </div>
                <div>
                    <?php 
                        echo $outputALL2;
                    ?>
                </div>


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat -->					

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							900
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							200
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->									

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							120
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							7200
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">Shoot me a message and I will get back to you as soon as possible.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="contact.php">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            New Jersey, USA
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p><a href="mailto:todd@toddamurphy.me">todd@toddamurphy.me</a>	     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="fa fa-github"></i>
   			</div>

   			<h5>Track Me At</h5>

   			<p><a href="https://github.com/tmurphy605">/tmurphy605</a></p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="https://www.facebook.com/todd.murphy.376"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="https://www.linkedin.com/in/tmurphy605"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://github.com/tmurphy605"><i class="fa fa-github"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Kards 2016.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <script src="js/navbar.js"></script>

</body>

</html>