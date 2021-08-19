<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style type="text/css">
      @keyframes load {
    0%{
        opacity: 0.08;
/*         font-size: 10px; */
/*              font-weight: 400; */
                filter: blur(5px);
                letter-spacing: 3px;
        }
    100%{
/*         opacity: 1; */
/*         font-size: 12px; */
/*              font-weight:600; */
/*              filter: blur(0); */
        }
}

#counterline{
      background: #f60d54; 
      border: none;
     height: 1px;
        margin-left: 0;
}
#animate {
    display:flex;
    justify-content: center;
    align-items: center;
    height:100%;
    margin: auto;
    width: 172px;
    animation:load 1.2s ease-in-out;
    animation-direction: alternate;
    text-shadow: 0 0 1px white;
    font-family: ui-rounded;
    font-weight: bold;
    letter-spacing: 10px;
}

#page-top{

}
.counter{
        position: absolute;
}
  </style>
  <title>Harsh Sharma</title>

  <!-- Bootstrap core CSS -->
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="shortcut icon" type="img/png" href="image/logo.png">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <!-- <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> -->

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/custom.css" rel="stylesheet" />
  <link href="css/Css.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5NLJVP2S5T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5NLJVP2S5T');
</script>
</head>

<body id="page-top">

  <header class="masthead">
  	<?php
	include 'loader.php';
?>
            <div class="container-fluid h-100">
            	<div class="contact">
            		<h4 class="mr-5" class="text-light"><a href="tel:9665654326"  class="text-light"><span class="text-primary fa fa-phone"></span> <span class="text">9665654326</span></a></h4>
            		<h4 class="mr-5"><a href="https://www.linkedin.com/in/harsh-sharma-b3a465172/" target="_blank" class="text-light"><span class="text-primary fa fa-linkedin-square"></span><span class="text"> linkedin</span></a></h4>
            		<h4 class="mr-5"><a type="button" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=harshsharma3877@gmail.com','newwindow','width=800,height=450');return false;" class="text-light"><span class="text-primary fa fa-envelope"></span><span class="text"> Gmail</span></a></h4>
            	</div>
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold" data-aos="zoom-in">Harsh Sharma</h1>
                        <!--hr class="divider my-4" /-->
						<div class="container-fluid py-5">
					<!--Quotes started-->
						<div class="container py-5 ">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner  mx-auto w-75 ">
									<div class="carousel-item   h-25">
									   <h2 class="text-center text-light"><sup><span class="fa fa-quote-left" aria-hidden="true" style="font-size:15px;"></span></sup>&ensp;
									   Good programmers write code for humans first and computers next.&ensp;<sup><span style="font-size:15px;" class="fa fa-quote-right" aria-hidden="true">
									  </span></sup></h2><h5 class="float-right" style="color:#f4623a;">– Anonymous</h5>
									</div>
									<div class="carousel-item active h-25">
									  <h2 class="text-center text-light" ><sup><span class="fa fa-quote-left" aria-hidden="true" style="font-size:15px;"></span></sup> 
									  &ensp; Websites promote you 24/7: No employee will do that.  &ensp;<sup><span class="fa fa-quote-right" aria-hidden="true" style="font-size:15px;">
									  </span></sup> </h2><h5 class="float-right" style="color:#f4623a;">― Paul Cookson</h5>
									</div>
									<div class="carousel-item h-25" >
									   <h2 class="text-light"><sup><span class="fa fa-quote-left" aria-hidden="true" style="font-size:15px;"></span></sup>&ensp; 
									   websites should look good from the inside and out &ensp;
									   <sup><span style="font-size:15px;" class="fa fa-quote-right" aria-hidden="true">
									  </span></sup></h2><h5 class="float-right" style="color:#f4623a;">― Paul Cookson</h5>
									</div>
									<div class="carousel-item h-25">
									   <h2 class="text-center text-light"><sup><span class="fa fa-quote-left" aria-hidden="true" style="font-size:15px;"></span></sup>&ensp;
									   Software testers succeed where others fail.&ensp;<sup><span style="font-size:15px;" class="fa fa-quote-right" aria-hidden="true">
									  </span></sup></h2><h5 class="float-right" style="color:#f4623a;">– Anonymous</h5>
									</div>
								</div>
		  
							  <!-- Left and right controls -->
							  <a class="carousel-control-prev " href="#myCarousel" data-slide="prev">
								<span  class="fa fa-chevron-circle-left fa-lg " style="font-size:20px;color:#f4623a;" ></span>
							  </a>
							  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
								<span class="fa fa-chevron-circle-right fa-lg " style="font-size:20px;color:#f4623a;" ></span>
							  </a>
							</div>
						</div>
					</div>
							
			<!--Quotes ended-->
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <a data-aos="fade-up" type="button" href="resume/harshsharma's_resume.pdf" target="_blank" class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Get Resume</a>
                    </div>
					
                </div>
				
            </div>
			
        </header>

<div class="container-fluid p-0">
	<div class="row m-0">
		<div class="col-md-2 col-lg-2 p-0">
			<?php include 'menu.php'; ?>

		</div>

		<div class="col-12 col-md-12 col-lg-10 p-0">
			<div class="about">
			<section class="page-section bg-dark" id="about">
				<div class="container-fluid">
					<div class="row ">
						<div class="">
							<div data-tilt data-tilt-full-page-listening><h2 class=" text-light mt-0 text-center"data-aos="fade-up">I've got what you need!</h2></div>
							<hr class="divider dark my-4" />
							<div class="text-white-50 mb-4 text-left px-5">
								<ul type="none" class="text-white myintro">
									<li >I was the kid who didn’t break apart my Rubik’s cube so that I could get all the colors lined up—I was the 
									kid who solved it.</li><br>
									<li >Hi, I am Harsh Sharma, software developer at <b><a href='https://www.techment.com/'>Techment technology</a></b> 
									. Highly enthusiastic and passionate about coding and testing of Softwares and Websites, with several skills and projects 
									in my arsenal, provided down below.</li><br>
									<li >I am an analytical thinker, a keen problem solver, with a 
									proactive attitude helping in disaster management in an increasingly technical world, behind every advancement 
									is a team of multidisciplinary people.</li><br> 
									<li >As a developer, I love to bridge the gap between the technology and 
									people using analytical skills and drawing out valuable insights out of code.</li>
								</ul>
							</div>
							<div class="text-center">
							<a class="btn btn-light btn-xl js-scroll-trigger " href="#services">Get Started!</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
        <!-- Services-->
        <div class="services bg-dark">
        <section class="page-section" id="services">
            <div class="container">
                <div data-tilt data-tilt-full-page-listening><h2 class="text-center mt-0 " data-aos="fade-up">At Your Service</h2></div>
                <hr class="divider dark my-4" />
                <div class="row m-0">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center my-3">
                    	<span class="text-primary fa fa-bookmark bookmark fa-2x"></span>
                    	<div class="socialpresence">
	                        <div class="zoom py-5 h-100">
	                            <i class="fa fa-4x fa-link text-primary mb-4"></i>
								<h4 class="">Interships At</h4>
								<a class="linkcontnent ml-3" href="http://proup.in/" data-aos="fade-right" data-aso-delay="600">3 Months - Pro-Up</a><br>
								<a class="linkcontnent ml-3" href="https://buzo.in/" data-aos="fade-right" data-aso-delay="600">6 Months - Buzo Media Services</a><br>
	                        </div>
	                    </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center my-3">
                    	<span class="text-primary fa fa-bookmark bookmark fa-2x"></span>
                    	<div class="socialpresence">
                    	    <div class="zoom py-5 h-100">
	                            <i class="fa fa-4x fa-laptop text-primary mb-4"></i>
								<h4 class="">Worked at</h4>
								<a class="linkcontnent ml-3" href="https://urbanrun.in/" data-aos="fade-right" data-aso-delay="800">Urban Run</a><br>
								<a class="linkcontnent ml-3" href="https://www.arenaitech.com/" data-aos="fade-right" data-aso-delay="800">Arena Itech</a><br>
															
	                        </div>
	                    </div>
                    </div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 text-center  my-3">
						<span class="text-primary fa fa-bookmark bookmark fa-2x"></span>
						<div class="socialpresence">
                        <div class="zoom py-5 h-100">
							<i class="fa fa-4x fa-youtube-play text-primary mb-4"></i>
							<h4 id="PP">Project details</h4>
							
								<a class="linkcontnent" data-aos="fade-right" data-aso-delay="1000" href="https://youtu.be/tbxf5jxL-WA" target="_blank">Chatbot</a><br>
								<a class="linkcontent" href="https://youtu.be/JXMVUHjqYXA" data-aos="fade-right" data-aso-delay="1000" target="_blank">Notifier</a><br>
														
							</div>
							</div>
							
                        </div>
                    </div>
                </div>
            
        </section>
    	</div>
        <!-- client relations -->
        <div class="clientrelation">
        <section class="page-section bg-dark" id="clientrelation">
            <div class="container" style="overflow-x:hidden; ">
                <div data-tilt data-tilt-full-page-listening><h2 class="text-center text-light mt-0 " data-aos="fade-up">Client Relations</h2></div>
                <hr class="divider dark my-4" />
                <div class="row m-0 pb-4">
                  <div data-aos="fade-right" data-aos-delay="100" class="col-lg-6 col-sm-12 col-md-6 text-center  px-5 mt-4 parentclient">
                        <div class="clientcontainer p-4">
                    	<h5 class="text-left text-primary">Sangam Pathology</h5>
                        	<img src="image/projectimages/sangam.png">
                    	<h5 class="text-left text-primary mt-3">Description</h5>
                    	<ul class="text-left">
							<li class="text-light"><span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="200"></span> Made a standalone website to print reports for their patient</li>
							<li class="text-light"><span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="300"></span> No Database, No server, No hosting</li>
							<li class="text-light"><span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="400"></span> Exposure: Javascript, HTML, CSS</li>
							<li class="text-light"><span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="500"></span> <a href="https://sangampath.herokuapp.com">sangampath.herokuapp.com</a></li>
						</ul>
                        </div>
                    </div>
                    
                    <div data-aos="fade-left" data-aos-delay="100" class="col-lg-6 col-sm-12 col-md-6 text-center px-5 mt-4 parentclient">
                        <div class="clientcontainer p-4">
                        <!-- <div class="row m-0"> -->
                           <!--  <div class="col-lg-6 col-md-6 col-sm-12"> -->
                                <h5  class="text-left text-primary">Effort To Success</h5>
                                <img src="image/projectimages/ets.png" class="">
                         <!--    </div> -->
                           <!--  <div class="col-lg-6 col-md-6 col-sm-12"> -->
                                <h5  class="text-left text-primary description-heading mt-3">Description</h5>
                                <ul  class="text-left">
                                    <li class="text-light"> <span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="200"></span> Delhi, India</li>
                                    <li class="text-light"> <span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="300"></span> A learning Management System (LMS) was made, that conducts online classes, schedules lectures, and conducts online test and created non tech friendly admin panel for faculties</li>
                                    <li class="text-light"> <span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="400"></span> Integrated payment gateway using Razor Pay</li>
                                    <li class="text-light"> <span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="500"></span> Exposure: WebRTC, Nodejs, Core PHP, HTML, CSS, Bootstrap</li>
                                    <li class="text-light"> <span class="fa fa-angle-right text-primary bulletpoint" data-aos="fade-right" data-aos-delay="600"></span> <a href="https://efforttosuccess.in/ETS/">efforttosuccess.in/ETS</a></li>
                                </ul>
                            <!-- </div> -->
                     <!--    </div> -->
                    	
                    	
                        </div>
                    </div>
                </div>
                </div>
            
        </section>
    </div>
        <!-- peoject-->
        <div class="bg-dark" >
        <section id="internship" class="page-section">
            <div class="container-fluid p-0">
			<div data-tilt data-tilt-full-page-listening><h2 class="text-center mt-0 " data-aos="fade-up" >Projects</h2></div>
                <hr class="divider dark my-4" />
                <div class="row m-0 px-5 pb-4">
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a   class="internship-box" href="http://biozap.org/"
                            ><img class="img-fluid" src="image/projectimages/biozap.png" alt="" />
                            <div class="internship-box-caption">
                                <div class="project-category text-white-50">Bio Fertilizer</div>
                                <div class="project-name">BioZap</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a class="internship-box" href="https://capslearning.org/"
                            ><img class="img-fluid" src="image/projectimages/caps.png" alt="" />
                            <div class="internship-box-caption">
                                <div class="project-category text-white-50">CA Coaching</div>
                                <div class="project-name">CAPS</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a  class="internship-box" href="https://synapsemindcare.com/"
                            ><img class="img-fluid" src="image/projectimages/synapse.png" alt="" />
                            <div class="internship-box-caption">
                                <div class="project-category text-white-50">Mind Care Doctor</div>
                                <div class="project-name">Synapse</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 emptycontainer"></div>

                     <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a class="internship-box" href="https://www.youtube.com/watch?v=JXMVUHjqYXA"
                            ><img class="img-fluid" src="image/projectimages/notifier.png" alt="" />
                            <div class="internship-box-caption p-3">
                                <div class="project-category text-white-50">Web App</div>
                                <div class="project-name">Notifier</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a class="internship-box" href="https://seacamel.herokuapp.com/"
                            ><img class="img-fluid" src="image/projectimages/seacamel.png" alt="" />
                            <div class="internship-box-caption p-3">
                                <div class="project-category text-white-50">Website</div>
                                <div class="project-name">Seacamel</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-6 emptycontainer"></div>
                   
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a  class="internship-box" href="https://krishnamcomputers.com/"
                            ><img class="img-fluid" src="image/projectimages/krishnum.png" alt="" />
                            <div class="internship-box-caption">
                                <div class="project-category text-white-50">Rental Computers</div>
                                <div class="project-name">Krishnum Computers</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a class="internship-box" href="https://dgsharma.com/"
                            ><img class="img-fluid" src="image/projectimages/dgsharma.png" alt="" />
                            <div class="internship-box-caption p-3">
                                <div class="project-category text-white-50">CA Classes</div>
                                <div class="project-name">GD Sharma</div>
                            </div></a
                        >
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                        <a class="internship-box" href="https://harsh-sharma.herokuapp.com/Mychatbot.html"
                            ><img class="img-fluid" src="image/projectimages/chatbot.png" alt="" />
                            <div class="internship-box-caption p-3">
                                <div class="project-category text-white-50">Simple</div>
                                <div class="project-name">Chatbot</div>
                            </div></a
                        >
                    </div>
                    
                    <!-- <div class="col-lg-4 col-md-4 col-sm-6 mt-5 hiddencontainer">
                        <a  class="internship-box" href="https://dgsharma.com/"
                            ><img class="img-fluid" src="image/comingsoon.jpg" alt="" />
                            <div class="internship-box-caption p-3">
                                <div class="project-category text-white-50">Coming</div>
                                <div class="project-name">Soon</div>
                            </div></a
                        >
                    </div>  -->
                </div>
            </div>
        </section>
       </div>
        <!-- Contact-->
        <div class="footercontact">
        <section class="page-section bg-dark" id="contact">
            <div class="container-fluid pt-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                       <div data-tilt data-tilt-full-page-listening> <h2 class="mt-0 text-light" data-aos="fade-up">Get In Touch!</h2></div>
                        <hr class="divider dark my-4" />
                        <p class="text-light mb-5">Ready to start your next project with me? Give me a call or send me an email and I will get back to you in quick time!</p>
                    </div>
                </div>
                <div class="row">
                    <div data-aos="fade-right" data-aos-delay="100" class="col-4 col-md-2 col-lg-2 ml-auto text-center mb-5 mb-lg-0">

                        <a data-toggle="tooltip" data-placement="top" title="Phone" href="tel:9665654326"  class="rot fa fa-phone-square fa-3x mb-3 text-muted"></a>
                        
                    </div>
					
                    <div data-aos="fade-right" data-aos-delay="200" class="col-4 col-md-2 col-lg-2 mr-auto text-center">
                        <a data-toggle="tooltip" data-placement="top" title="Gmail" type="button" href="" onclick="window.open('https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=harshsharma3877@gmail.com','newwindow','width=800,height=450');return false;" class="rot fa fa-envelope fa-3x mb-3 text-muted" ></a>
                        
                    </div>
					<!--  <div  data-aos="fade-right" data-aos-delay="300"  class="col-4 col-md-2 col-lg-2 ml-auto text-center mb-5 mb-lg-0">

                        <a data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank" href="https://www.facebook.com/harsh.sharma.3877" class="rot fa fa-facebook-square fa-3x mb-3 text-muted"></a>
                       
                    </div> -->
					
					 <div data-aos="fade-right" data-aos-delay="400" class="col-4 col-md-2 col-lg-2 ml-auto text-center mb-5 mb-lg-0">

                        <a data-toggle="tooltip" data-placement="top" title="Whatsapp"  type="button" onclick="window.open('https://wa.me/+919665654326?text=Hi!, I am sending this message from your portfolio.','newwindow','width=800,height=450');return false;" class="rot fa fa-whatsapp fa-3x mb-3 text-muted"></a>
                       
                    </div>
					
					 <div data-aos="fade-right" data-aos-delay="500" class="col-4 col-md-2 col-lg-2 ml-auto text-center mb-5 mb-lg-0">

                        <a data-toggle="tooltip" data-placement="top" title="LinkedIn" href="https://www.linkedin.com/in/harsh-sharma-b3a465172/" target="_blank" class="rot fa fa-linkedin-square fa-3x mb-3 text-muted"></a>
                      
                    </div>
					<div data-aos="fade-right" data-aos-delay="600" class="col-4 col-md-2 col-lg-2 ml-auto text-center mb-5 mb-lg-0">

                        <a data-toggle="tooltip" data-placement="top" title="Instagram" href="https://www.instagram.com/mr.harsh_sharma_11/" target="_blank"  class="rot fa fa-instagram fa-3x mb-3 text-muted"></a>
                      
                    </div>
                    <div data-aos="fade-right" data-aos-delay="700" class="col-4 col-md-2 col-lg-2 ml-auto text-center mb-5 mb-lg-0">

                        <a data-toggle="tooltip" data-placement="top" title="Youtube" href="https://www.youtube.com/channel/UCSTjAN9R_E1FW8PFSC9mu5g" target="_blank"  class="rot fa fa-youtube-play fa-3x mb-3 text-muted"></a>
                      
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!-- Footer-->
        
        
		</div>
	</div>
<div>
 
  <div class="container-fluid p-0 bg-dark">
 
<footer class="py-5 footer bg-dark">
    <div class="container">
    	<div class="small text-center text-muted">Copyright © <?php echo date('Y'); ?> - Harsh Sharma</div>
    </div>
</footer>
     
        
  </div>

  <!-- Bootstrap core JavaScript -->
  <!-- <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Plugin JavaScript -->
  <!-- <script type="text/javascript" src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
  <!-- Custom scripts for this template -->
  <script type="text/javascript" src="resume.min.js"></script>
  <script type="text/javascript" src="js/vanilatilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".clientcontainer"), {
		max: 10,
		speed: 100,
		gyroscope: true

	});
</script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript">   
		AOS.init({
			offset:30,
			duration:1000,
		}); 
		
		</script>
		<script type="text/javascript">
        	(function(){
                document.getElementById('loadercontainer').style.display="block";   
                document.getElementById('page-top').style.overflowY="hidden";
                 var counter = 0;
              var c = 0;
              var i = setInterval(function(){
                  $(".counter h2 span").html(c);
                  $("#counterline").css("width", c + "%");
                 
                counter++;
                c++;
                  
                if(counter == 101) {
                    clearInterval(i);
                    document.getElementById('page-top').style.overflowY="auto";
                   
                    document.getElementById('loadercontainer').style.display="none";
                  
                }
                 document.getElementById('loadercontainer').style.backdropFilter="blur("+(100-c)+"px)";
                
              }, 25);
        	}());

        	$(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
</script>
<script>
console.log(window.innerHeight);
</script>
</body>

</html>
