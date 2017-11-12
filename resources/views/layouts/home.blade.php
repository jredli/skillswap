<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DEXJOBS- Home</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Custom template CSS-->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     <!--Custom template CSS Responsive-->
     <link href="{{ asset('webcss/site-responsive.css') }}" rel="stylesheet">
       <!--Animated CSS -->
     <link href="{{ asset('webcss/animate.css') }}" rel="stylesheet">
     <!--Owsome Fonts -->
     <link rel="stylesheet" href="{{ asset('line-awesome/css/line-awesome-font-awesome.min.css') }}">
     <!-- Jquery UI-->
     <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
     <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('owlslider/owl-carousel/owl.carousel.css') }}">
     
    <!-- Default template -->
    <link rel="stylesheet" href="{{ asset('owlslider/owl-carousel/owl.template.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
      <div id="loadessr"><div id="loader"></div></div>
   	<!-- Header Image Or May be Slider-->
		<div id="header" class="container-fluid home">
              <div class="row">
                <div class="header_banner">
                       <div class="slides">
                       		<div class="slider_items parallax-window"  data-parallax="scroll" data-image-src="{{ asset('images/bg.jpeg') }}"></div>
                       </div>
                 </div>
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <nav class="navbar navbar-fixed-top">
               			 
                         <div class="container">
                             <div class="logo">
                                <a href="index.html"><img src="assets/images/logo2.png" alt="Photo" /> </a>
                             </div>                             
                             

                                @yield('login')
                                @yield('content')
                           
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home 
                              <span class="sr-only">(current)</span></a>     <li class="mobile-menu add-job"><a href="post-a-job.html">POST A JOB, IT’S FREE!</a></li>
							<ul class="dropdown-menu">
                           
                                <li><a href="home2.html">Home#2</a></li>

                             </ul> 
							 </li>
                            
                            <li class="dropdown">
                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs</a>
                            	 <ul class="dropdown-menu">
                                    <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                    <li><a href="browse-jobs-alternative.html">Browse jobs alternative</a></li>
                                    
                                  </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="job-style-one.html">Job Style One</a></li>
                                    <li><a href="job-style-two.html">Job Style Two</a></li>
                                   <li><a href="job-preview.html">Job Preview</a></li>
                                    <li><a href="resume.html">Resume Page</a></li>
                                    <li><a href="companies.html">Companies</a></li>

                                    
                                    <li><a href="pricing_table.html">Pricing Table</a></li>
                                  </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="how_its_work.html">How It Works</a></li>
							<li><a href="contact-us.html">Contact</a></li>
                            <li class="mobile-menu"><a href="post-a-job.html">POST A JOB, IT’S FREE!</a></li>
                            <li class="mobile-menu"><a href="login_register.html">Register User</a></li>
                          </ul>
                     
                    </div><!-- navbar-collapse -->
                    
                    
                    </div>
                    <!-- container-fluid -->
                    </nav>
                    
                    <div class="container slogan">
                        <div class="col-lg-12">
                        	<h1 class="animated fadeInDown">Looking For a Job?</h1>
                            <h3 class="text-center"><span>Join us </span>& Explore thousands of jobs</h3>
                       		<a href="">We have <span>59</span> jobs offers for you!</a>
                        </div>
                    
                    </div>
                    
                 </div>
                 
                <div class="jobs_filters">
                    <div class="container">

     <div class="container-fluid price-tags">
        	<div class="container">
            	<div class="col-lg-12">
                    <span class="btn btn-skill"><i class="fa fa-gavel"></i>Skills</span>
                    <span href="#" class="btn btn-project"><i class="fa fa-sitemap"></i>Projects</span>
                </div>
            </div>
          
        </div>
                       
                       @yield('filters')
                        	
                    </div>
         
         	</div>
            </div>
       	</div>
    <!-- Header Section -->

    <div class="container-fluid main-container price-tags">
        	<div class="container">
            	<div class="col-lg-12">
                	<h3>Popular Categories</h3>
                    <p>list of the most popular categories on skillswap</p>
                
                </div>
            </div>
          
        </div>

	<!--maine container Section -->
        <div class="container main-container-home">
     
        	<div class="section-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="service-box style-1" style="background-image:url({{ URL::asset('images/1.jpeg') }});">
                <div class="service-box-overlay"></div>
                <div class="service-box-content">
                  <h5><a href="#">Gastroenterology</a></h5>
                </div><!-- service-box-content -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box style-1" style="background-image:url({{ URL::asset('images/2.jpeg') }});">
                <div class="service-box-overlay"></div>
                <div class="service-box-content">
                  <h5><a href="#">cardiology </a></h5>
                </div><!-- service-box-content -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box style-1" style="background-image:url({{ URL::asset('images/3.jpg') }});">
                <div class="service-box-overlay"></div>
                <div class="service-box-content">
                  <h5><a href="single-service.html">pulamonalpry</a></h5>
                </div><!-- service-box-content -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box style-1" style="background-image:url({{ URL::asset('images/4.jpg') }});">
                <div class="service-box-overlay"></div>
                <div class="service-box-content">
                  <h5><a href="single-service.html"><img height="60px" src="{{ asset('images/icon1.png') }}" alt="Photo" /> ophthakmology </a></h5>
                </div><!-- service-box-content -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box style-1" style="background-image:url(images/3.jpg);">
                <div class="service-box-overlay"></div>
                <div class="service-box-content">
                 <i class="fa fa-cubes fa-2x ico"></i>
                  <h5>
                    <a class="category-link" href="single-service.html">                 
                        Urology 
                    </a>
                  </h5>
                </div><!-- service-box-content -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box style-1" style="background-image:url(images/service/7.jpg);">
                <div class="service-box-overlay"></div>
                <div class="service-box-content">
                  <h5><a href="single-service.html">Dental Care</a></h5>
                </div><!-- service-box-content -->
              </div>
            </div>     
          
          </div>
        </div>
        
        </div>
    <!--main container Section -->  
  
    <!--How it works-->
    	<div class="container-fluid recent-post" style="background:#f9f9f9;">
        <div class="row">
        	<div class="container main-container">
                    <h3 class="text-center">How it Works</h3>
                    <p>visual guide on how skillswap functions</p>
            </div>
            <div class="container main-container posts-list">
            	     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 post post-02">
                    	<div class="post-thumb">
                       		<img src="{{ asset('images/1.jpeg') }}" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">Step</span>
                                    <span class="date postmonth">1</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>Join</h4>
                            <p>Choose if you would like to create a team, work or hire someone to do the work for you. </p>
                        </div>
                    </div>
                    <!--Post 01-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 post post-02">
                    	<div class="post-thumb">
                       		<img src="{{ asset('images/2.jpeg') }}" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">Opt.</span>
                                    <span class="date postmonth">1</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>Team up</h4>
                            <p>Got an idea for the project? You can easily assamble a team and choose who will be part of it.</p>
                        </div>
                    </div>
                     <!--Post 02-->
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 post post-02">
                    	<div class="post-thumb">
                       		<img src="{{ asset('images/3.jpg') }}" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">Opt.</span>
                                    <span class="date postmonth">2</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>Work</h4>
                            <p>Fill in your profile with skills and show others what you are capable of doing. </p>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 post post-03">
                    	<div class="post-thumb">
                       		<img src="{{ asset('images/5.jpg') }}" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">Opt.</span>
                                    <span class="date postmonth">3</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>Hire</h4>
                            <p>Find someone who posseses the skills you need.</p>
                        </div>
                    </div>
                     <!--Post 03-->
            </div>
            </div>
        </div>

        
    <!-- How it works end -->
   
    <!-- Green Banner-->
    	<div class="container-fluid green-banner">
        	<div class="row">
            <div class="container main-container v-middle">
            	<div class="col-lg-10 col-md-8 col-sm-8 col-xs-12 ">
                	<h3 class="white-heading">Join SkillSwap<span> and start connecting with others!</span></h3>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-left">
                	<a href="{{ route('project.create') }}" class="btn btn-getstarted bg-red">Create a project</a>
                </div>
            </div>
            </div>
        </div>
    <!-- Green Banner-->
    <!-- Testimionals Slider-->
    	<div class="container-fluid testimionals">
			<div class="row">
            <div class="container main-container">
            	<div class="col-lg-12">
                    <div id="testio" class="owl-carousel owl-template">
                      <!--Slides-->
                      <div class="item">
                      		<img class="img-circle" height="77" src="{{ asset('images/deki.jpg') }}" alt="Photo" /> 
                            <div class="info">
                            	<h5>Dejan Obradović Obrada</h5>
                                <span>Web Developer</span>
                                <p>Fantastičan sajt, ocena deset. Dizajn privlačan i veoma interesantan. Ideja vrhunska.</p>
                            </div>
                       </div>
                      
                      <div class="item">
                      		<img src="assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                      
                      <div class="item">
                      		<img src="assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                       
                      <div class="item">
                      		<img src="assets/images/tes-profile.png" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                     
                    </div>
                </div>
            </div>     
        </div>
        </div>
    <!-- Testimionals Slider-->
     
<!--Footer Area-->
   		<div class="container-fluid footer">
        	<div class="row">
            <div class="container main-container-home">
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>Pages</h3>
                    <ul class="list-group">
                        <li><a href="job-style-one.html">Job page</a></li>
						<li><a href="job-style-two.html">Job page alternative</a></li>
						<li><a href="post-a-job.html">Post a job</a></li>
						<li><a href="browse-jobs.html">Browse jobs</a></li>
						<li><a href="how_its_work.html">How it works</a></li>
						<li><a href="pricing_table.html">Price table</a></li>
						<li><a href="companies.html">Companies</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-post.html">Blog post</a></li>
						<li><a href="contact-us.html">Contact us</a></li>
						

                    </ul>
                </div>
                <!---Footer Column 01-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>Other page</h3>
          <ul class="list-group">
						<li><a href="login_register.html">Login/Register</a></li>
						<li><a href="lost-password.html">Lost passoword</a></li>
                        <li><a href="payment.html">Payment</a></li>
						<li><a href="confirm-payment.html">Confirm payment</a></li>
						<li><a href="submit-resume.html">Sumbit resume</a></li>
						<li><a href="resume.html">Resume</a></li>
						<li><a href="terms-and-conditions.html">Terms and conditions</a></li>

                    </ul>
                </div>
                 <!---Footer Column 01-->
           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>Contact with us</h3>
                   	   	<p>Manchester Road 123-78B, <br/>Silictown</p> 
                        <p>+46 123 456 789</p>
                        <p>hello@sitename.com</p>
                        <p>http://www.sitename.com</p>
                </div>
                 <!---Footer Column 01-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>About us</h3>
                    <p>An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards</p>
                </div>
            	
            </div>
            </div>
        </div>
    <!--Footer Area--> 
    <!--Last Footer Area---->
    	<div class="container-fluid footer last-footer ">
        	<div class="row">
            <div class="container main-container">
            	<div class="col-lg-9 col-md-3 col-sm-9 col-xs-6" >
                	<p class="copyright">© template by DeximLabs.com All Rights Reserved.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                	<ul class="list-group">
                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                
            </div>
            </div>
        </div>
    <!--Last Footer Area----> 

<!-- Scripts
================================================== -->
  	<!--  jQuery 1.7+  -->
   
     <script type="text/javascript" src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script src="http://code.jquery.com/color/jquery.color-2.1.2.js" type="text/javascript"></script>
    <!--Select 2-->
    <script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
    <!-- Html Editor -->
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
	<!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="{{ asset('parallax.js-1.4.2/parallax.js') }}"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   	<!-- Include js plugin -->
    <script type="text/javascript" src="{{ asset('owlslider/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script> 
  	<script type="text/javascript" src="{{ asset('counter/jquery.counterup.min.js') }}"></script> 
    <!--Site JS-->
     <script src="{{ asset('js/webjs.js') }}"></script>


     <script>
$(window).load(function() {

   $("#loadessr").fadeOut();

})
</script>


  <!-- Scripts
================================================== -->
	</body>
</html>