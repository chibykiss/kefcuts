<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content ="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <title> KEFCUTS </title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="UNIQUE - Barber Shop HTML Template">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    
    <!-- Necessary CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">            											<!-- Bootstrap CSS Only GRID -->
    <link rel="stylesheet" href="{{ asset('css/smoothslides.theme.css') }}" type="text/css" />	                            	<!--Main slider css-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" />												<!--Service slider css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}" type="text/css" />									<!--fancybox css-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />												<!--custom css-->
    <link rel="stylesheet" href="{{ asset('css/icofont.html') }}" type="text/css" />										<!--Icofont css-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">					<!--google font oswald-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">							<!--google font Open Sans-->
     
    <!--[if IE]>
    	<script type="text/javascript" src="js/html5shiv.js"></script>
    <![endif]-->
    
    
</head>
 
<body>
<div class="se-pre-con"></div>

<!--banner slider section -->
<section id="home" class="banner-slider-initial">
		<!--slider-->
        <div class="banner-slide-show-wrapper">
            <div class="banner-slider" id="banner-slide-show">
                 <div class="banner-slider-item">
                      <div class="banner-slider-item-img" style="background-image: url(images/banner-01.png);">
                           <div class="banner-text">
                           	 <!-- <span class="much-img"><img src="images/slider-icon.png" alt=""></span> -->
                             <span>we make your hair</span>
                             <h1>KEFCUTS</h1>
                             <p>The Premier Destination for Expert Barbering and Hair Artistry.</p>
                             <a href="/appointment" title="Make an appointment" class="slider-more-btn">Make an appointment</a>
                          </div>
                      </div>
                      
                 </div>
                 <div class="banner-slider-item">
                      <div class="banner-slider-item-img" style="background-image: url(images/banner-02.jpg); ">
                           <div class="banner-text">
                           	 <!-- <span class="much-img"><img src="images/slider-icon.png" alt=""></span> -->
                             <span>we are Unique</span>
                             <h1>Barber Shop</h1>
                             <p>The Premier Destination for Expert Barbering and Hair Artistry.</p>
                             <a href="/appointment" title="Make an appointment" class="slider-more-btn">Make an appointment</a>
                          </div>
                      </div>
                      
                 </div>
                 <div class="banner-slider-item">
                      <div class="banner-slider-item-img" style="background-image: url(images/banner-03.jpg); ">
                           <div class="banner-text">
                           	 <!-- <span class="much-img"><img src="images/slider-icon.png" alt=""></span> -->
                             <span>we are professional</span>
                             <h1>Man's Salon </h1>
                             <p>The Premier Destination for Expert Barbering and Hair Artistry.</p>
                             <a href="/appointment" title="Make an appointment" class="slider-more-btn">Make an appointment</a>
                           </div>
                      </div>
                      
                 </div>
             </div>
             
         </div>
         
         <!-- Navigation -->
         <div class="slider-header" style="">
         <div class="container">
            <div class="row">
            <!-- Left Logo header-->
            <!-- <div class="header header-align-left">
                   <div class="mobile-ic">
                        <span></span>
                        <span></span>
                        <span></span>
                   </div>
                   <div class="logo table-cell">
                        <a href="index.html" title="Barber Shop"><img src="images/logo.png" alt="logo"></a>
                   </div>
                   <div class="menu table-cell">
                        <ul>
                          <li class="active"><a href="#home" title="Home">Home</a></li>
                          <li><a href="#about" title="Aboutus">Aboutus</a></li>
                          <li><a href="#services" title="Services">Services</a></li>
                          <li><a href="#testimonial" title="Testimonials">Testimonials</a></li>
                          <li><a href="#our-team" title="Our Team">Our Team</a></li>
                          <li><a href="#pricing" title="Pricing">Pricing</a></li>
                          <li><a href="#appointment" title="Appointment">Appointment</a></li>
                          <li><a href="#gallery" title="Gallery">Gallery</a></li>
                          <li><a href="#blog" title="Latest Blog">Latest Blog</a></li>
                          <li><a href="#location" title="Location">Location</a></li>
                        </ul>
                   </div> -->
               </div>
               
             <!--Navigation - Center Logo header-->
             <div class="header">
                   <div class="mobile-ic">
                        <span></span>
                        <span></span>
                        <span></span>
                   </div>
                   <div class="responsive-menu">
                        <ul>
                            <li class="active"><a href="#home" title="Home">Home</a></li>
                            <li><a href="#about" title="Aboutus">Aboutus</a></li>
                            <li><a href="#services" title="Services">Services</a></li>
                            <!-- <li><a href="#testimonial" title="Testimonials">Testimonials</a></li> -->
                            <!-- <li><a href="#our-team" title="Our Team">Our Team</a></li> -->
                            <li><a href="#pricing" title="Pricing">Pricing</a></li>
                            <li><a href="{{ route('appointment') }}" title="Appointment">Appointment</a></li>
                            <!-- <li><a href="#gallery" title="Gallery">Gallery</a></li> -->
                            <!-- <li><a href="#blog" title="Latest Blog">Latest Blog</a></li> -->
                            <li><a href="#location" title="Location">Location</a></li>
                        </ul>
                   </div>
                   <div class="table-cell">
                        <ul>
                          <li class="active"><a href="#home" title="Home">Home</a></li>
                          <li><a href="#about" title="Aboutus">Aboutus</a></li>
                          <li><a href="#services" title="Services">Services</a></li>
                          <!-- <li><a href="#testimonial" title="Testimonials">Testimonials</a></li> -->
                          <!-- <li><a href="#our-team" title="Our Team">Our Team</a></li> -->
                        </ul>
                   </div>
                   <div class="logo">
                        <a href="index.html" title="Barber Shop"><img src="images/logo.png" alt="logo"></a>
                   </div>
                   <div class="table-cell">
                        <ul>
                          <li><a href="#pricing" title="Pricing">Pricing</a></li>
                          <li><a href="{{ route('appointment') }}" title="Appointment">Appointment</a></li>
                          <!-- <li><a href="#gallery" title="Gallery">Gallery</a></li> -->
                          <!-- <li><a href="#blog" title="Latest Blog">Latest Blog</a></li> -->
                          <li><a href="#location" title="Location">Location</a></li>
                        </ul>
                   </div>
               </div>
           </div>
        </div>
       	</div>
</section>

<div class="container">
	<div class="row">
        <div class="timing-section" >
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            	<div class="timing-section-box">
                	<div class="timing-section-icon" >
                    	<i class="icofont icofont-location-pin"></i>
	                </div>
                    <div class="timing-section-text" >
                         Legend mall 
                         2,edet bassey way, Thomas estate ajah
                         Shop 29
	                </div>
                </div>
			</div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            	<div class="timing-section-box border-left-right">
                	<div class="timing-section-icon" >
                    	<i class="icofont icofont-telephone"></i>
	                </div>
                    <div class="timing-section-text" >
                    +1 987-654-3210
	                </div>
                </div>
			</div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            	<div class="timing-section-box">
                	<div class="timing-section-icon" >
                    	<i class="icofont icofont-wall-clock"></i>
	                </div>
                    <div class="timing-section-text" >
                    Monday - thursday:  09.00 AM - 08.00 PM
	                </div>
                     <div class="timing-section-text" >
                    Friday - Sunday:  08.30 AM - 10.00 PM
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<!--About us -->
<section id="about" class="experience-section">
	<div class="container">
         <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	              <div class="about-left-section">
                   <h6>The Unique Vison</h6>
                   <h2>KEFCUTS</h2>
                   <span class="line"></span>
                   <div class="story-text">
                        <div class="story-text-left">
                             <p class="big-text">Welcome to KEFCUTS, where passion meets style! We take pride in being more than just your average barbershop – we're a haven for self-expression and confidence.</p>
                              <p>What sets us apart is our commitment to creating a comfortable and welcoming environment. Step into our salon, and you'll instantly feel at ease. Our space is designed to be a retreat from the hustle and bustle, a place where you can relax, unwind, and leave feeling refreshed and confident.</p>
                             
                        </div>
                   </div>
              </div>
              </div>
              
              
              <!--Right Section -->
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	              <div class="about-right-section">
              	<img src="images/about-image.png" alt="aboutimage">
              </div>
              </div>
              
              
              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	              <a href="#" title="read more" class="read-more-btn">read more</a>
              </div> -->
         </div>
	</div>
</section> 

<!--Service section -->
<section id="services" class="our-service">
	<div class="container">
         <div class="row"> 
              <h2 class="heading-title">Special services</h2>
              <div class="service-wrapper clearfix">
                   <div class="service-block service-middle">
                        <div class="service-block-inner">
                            <div class="service-block-image">
                                 <div class="service-wrap-img">
                                     <img src="images/service-img.jpg" alt="">
                                 </div>
                                 <div class="service-block-image-wrap">
                                     <div class="service-ic">
                                          <img src="images/galley-images/black-haair-2.jpg" alt="">
                                     </div>
                                     <h6>Classic Hair Cut</h6>
                                     <!-- <p>Lorem Ipsum is simplydummy text of the printinorem Ipsum is simply mmy text of the printing typeseing  -->
                                      </p>
                                      <!-- <a href="#" title="read more" class="read-more-btn">read more</a> -->
                                   </div>
                              </div>
                        </div>
                    </div>
                    <div class="service-block service-middle">
                        <div class="service-block-inner">
                             <div class="service-block-image">
                                 <div class="service-wrap-img">
                                     <img src="images/service-img.jpg" alt="">
                                 </div>
                                 <div class="service-block-image-wrap">
                                   <div class="service-ic">
                                        <img src="images/galley-images/black-img-6.jpg">
                                   </div>
                                     <h6>Clipper Cut</h6>
                                     <!-- <p>Lorem Ipsum is simplydummy text of the printinorem Ipsum is simply mmy text of the printing typeseing  -->
                                      </p>
                                      <!-- <a href="#" title="read more" class="read-more-btn">read more</a> -->
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="service-block service-middle">
                        <div class="service-block-inner">
                             <div class="service-block-image">
                               <div class="service-wrap-img">
                                     <img src="images/service-img.jpg" alt="">
                               </div>
                                <div class="service-block-image-wrap">
                                     <div class="service-ic">
                                          <img src="images/galley-images/black-hair-3.jpg">
                                     </div>
                                     <h6>Dread Log</h6>
                                     <!-- <p>Lorem Ipsum is simplydummy text of the printinorem Ipsum is simply mmy text of the printing typeseing  -->
                                      </p>
                                      <!-- <a href="#" title="read more" class="read-more-btn">read more</a> -->
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    <div class="service-block service-middle">
                        <div class="service-block-inner">
                            <div class="service-block-image">
                                 <div class="service-wrap-img">
                                     <img src="images/service-img.jpg" alt="">
                                 </div>
                                 <div class="service-block-image-wrap">
                                     <div class="service-ic">
                                          <img src="images/galley-images/treatment-1.jpg" alt="">
                                     </div>
                                     <h6>Hair treatment</h6>
                                     <!-- <p>Lorem Ipsum is simplydummy text of the printinorem Ipsum is simply mmy text of the printing typeseing  -->
                                      </p>
                                      <!-- <a href="#" title="read more" class="read-more-btn">read more</a> -->
                                   </div>
                              </div>
                        </div>
                    </div>
                    <div class="service-block service-middle">
                        <div class="service-block-inner">
                             <div class="service-block-image">
                                 <div class="service-wrap-img">
                                     <img src="images/service-img.jpg" alt="">
                                 </div>
                                 <div class="service-block-image-wrap">
                                     <div class="service-ic">
                                          <img src="images/galley-images/black-img-5.jpg" >
                                     </div>
                                     <h6>Hair twisting</h6>
                                     <!-- <p>Lorem Ipsum is simplydummy text of the printinorem Ipsum is simply mmy text of the printing typeseing  -->
                                      </p>
                                      <!-- <a href="#" title="read more" class="read-more-btn">read more</a> -->
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="service-block service-middle">
                        <div class="service-block-inner">
                             <div class="service-block-image">
                               <div class="service-wrap-img">
                                     <img src="images/service-img.jpg" alt="">
                               </div>
                                <div class="service-block-image-wrap">
                                     <div class="service-ic">
                                          <img src="images/galley-images/black-haair-7.jpg" alt="">
                                     </div>
                                     <h6>Hair dyeing</h6>
                                     <!-- <p>Lorem Ipsum is simplydummy text of the printinorem Ipsum is simply mmy text of the printing typeseing  -->
                                      </p>
                                      <!-- <a href="#" title="read more" class="read-more-btn">read more</a> -->
                                 </div>
                             </div>
                        </div>
                    </div>
                    
                    
              </div>
         </div>
	</div>
</section>

<!--Testimonial section -->
<!-- <section id="testimonial" class="client-testimonial">
	<div class="container">
         <div class="row">
              <h2 class="heading-title">1000+ Happy Clients</h2>
              <div class="testimonial-wrapper">
                   <div class="testimonial-main">
                       <div class="testimonial-box">
                       	<div class="test-img">
                            <img src="images/testi-img.png" alt="">
                        </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typing indus try<br>

Lorem Ipsum has een the indus try's standard dummy text Loremsimply dummy text of the printing <br>

orem Ipsum is simply dummy text of the printing and typing indus tryLorem Ipsum has een the indus try's standard dummy text Loremsimply dummy text of the printing and typeseing industry.</p>
                            <span>Devil Shohemark, CEO Microsoft</span>
                       </div>
                       
                   </div>
                   <div class="testimonial-main">
                       <div class="testimonial-box">
                       	<div class="test-img">
                            <img src="images/testi-img2.png" alt="">
                        </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typing indus try Lorem Ipsum has een the rd dummy<br>
 text Loremsimply dummy text of the printing and typeseipsum has een the indus try's standard g industry.
orem Ipsum is simply dummy text of the printing and typing indus tryLorem Idummy text<br>
Loremsimply dummy text of the printing and typeseing industry.</p>
                            <span>Jhon Due, CEO Infosys</span>
                       </div>
                       
                   </div>
                   
                   
              </div>
              
         </div>
	</div>
</section> -->

<!--Statistics section -->
<!-- <section class="counter-banner">
	<div class="container">
         <div class="row">
              <div class="table">
                   <div class="table-cell">
                       <div class="counter-wrapper">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="counter-box">
                                     <div class="counter-img">
                                          <img src="images/ic1.png" alt="">
                                     </div>
                                     <div class="counter-text">
                                          <h5 class="count">1250</h5>  
                                          <p>Years experience</p>
                                     </div>
                                </div>
							</div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="counter-box">
                                     <div class="counter-img">
                                          <img src="images/ic2.png" alt="">
                                     </div>
                                     <div class="counter-text">
                                          <h5 class="count">1900</h5>  
                                          <p>Best Lookg</p>
                                     </div>
                                </div>
							</div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="counter-box">
                                     <div class="counter-img">
                                          <img src="images/ic3.png" alt="">
                                     </div>
                                     <div class="counter-text">
                                          <h5 class="count">1125</h5>  
                                          <p>Happy Clients</p>
                                     </div>
                                </div>
							</div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="counter-box">
                                     <div class="counter-img">
                                          <img src="images/ic4.png" alt="">
                                     </div>
                                     <div class="counter-text">
                                          <h5 class="count">5000</h5>  
                                          <p>Branches</p>
                                     </div>
                                </div>
							</div>
                        </div>
                   </div>
              </div>
         </div>
	</div>
</section> -->

<!-- Our Team section -->
<!-- <section id="our-team" class="our-team">
	<div class="container">
         <div class="row">
              <h2 class="heading-title">Our Team</h2>
              <div class="our-team-wrapper clearfix">  
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img1.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Laura Griffinia March</h5>
                                  <span>Barber</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img2.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Stevn Josephin</h5>
                                  <span>Hair Cuter</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img3.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Dr. Alexnder David</h5>
                                  <span>Shaver</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img1.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Laura Griffinia March</h5>
                                  <span>Barber</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img2.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Stevn Josephin</h5>
                                  <span>Hair Cuter</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img3.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Dr. Alexnder David</h5>
                                  <span>Shaver</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img1.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Laura Griffinia March</h5>
                                  <span>Barber</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img2.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Stevn Josephin</h5>
                                  <span>Hair Cuter</span>
                             </div>
                        </div>
                   </div>
                   <div class="our-team-box">
                        <div class="our-team-inner">
                             <div class="our-team-img">
                                  <img src="images/team-img3.jpg" alt="">
                             </div>
                             <div class="our-team-text">
                                  <h5>Dr. Alexnder David</h5>
                                  <span>Shaver</span>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
	</div>
</section> -->

<!-- Tab Style - Our Pricing section -->
<section id="pricing" class="our-pricing">
	<div class="container">
         <div class="row">
				<h2 class="heading-title">Our Pricing</h2>
				<div class="our-pricing-wrapper clearfix">
                   <article class="tabbed-content">
                      <nav class="tabs">
                        <ul>
                          <li><a href="#tab1" class="active">Hair</a></li>
                          <!-- <li><a href="#tab2">Mackup</a></li> -->
                          <!-- <li><a href="#tab3">Shaving</a></li> -->
                          <!-- <li><a href="#tab4">Manicure</a></li> -->
                          <li><a href="#tab5">Dread</a></li>
                        </ul>
                      </nav>
                      <section id="tab1" class="item active" data-title="Hair">
                        <div class="item-content">
							<div class="price-list-main">
                            	<div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair cut without shaving 
                                                </div>
                                                <div class="price-list-service-price">5,000
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair cut with shaving
                                                </div>
                                                <div class="price-list-service-price">7,500
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Kids haircut 
                                                </div>
                                                <div class="price-list-service-price">4,500
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair coloring black + treatment
                                                </div>
                                                <div class="price-list-service-price">8,500
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Hair Color Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Any other color dye + hair treatment 
                                                </div>
                                                <div class="price-list-service-price">12,350
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                  <div class="price-list-service-name">Plus package Pedicure treatment
                                                  </div>
                                                  <div class="price-list-service-price">9,500
                                                  </div>
                                                         </div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simplysimply dummy text is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <!-- <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Color
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Wash
                                                </div>
                                                <div class="price-list-service-price">$10
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simply Lorem Ipsum is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div> -->
                                
                        </div>

                        </div>
                      </section>
                      <!-- <section id="tab2" class="item" data-title="Mackup">
                        <div class="item-content">
                          <div class="price-list-main">
                            	<div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Classic Mackup
                                                </div>
                                                <div class="price-list-service-price">$250
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is ofthe printorm. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Special Mackup
                                                </div>
                                                <div class="price-list-service-price">$199
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Professional Mackup
                                                </div>
                                                <div class="price-list-service-price">$44
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Color Mackup
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Hair Color Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Lookbook Mackup
                                                </div>
                                                <div class="price-list-service-price">$34
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">TradationalHair Mackup
                                                </div>
                                                <div class="price-list-service-price">$44
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simplysimply dummy text is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Paris Mackup
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Chikago Mackup
                                                </div>
                                                <div class="price-list-service-price">$10
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simply Lorem Ipsum is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                        </div>
                        </div>
                      </section>
                      <section id="tab3" class="item" data-title="Shaving">
                        <div class="item-content">
                          <div class="price-list-main">
                            	<div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Vintag Hair Cut
                                                </div>
                                                <div class="price-list-service-price">$12
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Wash
                                                </div>
                                                <div class="price-list-service-price">$12
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Classic Hair Cut
                                                </div>
                                                <div class="price-list-service-price">$25
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Color
                                                </div>
                                                <div class="price-list-service-price">$49
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Hair Color Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Stylish Hair Cut
                                                </div>
                                                <div class="price-list-service-price">$34
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">TradationalHair Cut
                                                </div>
                                                <div class="price-list-service-price">$44
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simplysimply dummy text is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Color
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Wash
                                                </div>
                                                <div class="price-list-service-price">$10
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simply Lorem Ipsum is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                        </div>
                        </div>
                      </section> -->
                      <!-- <section id="tab4" class="item" data-title="Manicure">
                        <div class="item-content">
                          <div class="price-list-main">
                            	<div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Classic Mackup
                                                </div>
                                                <div class="price-list-service-price">$250
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is ofthe printorm. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Special Mackup
                                                </div>
                                                <div class="price-list-service-price">$199
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Professional Mackup
                                                </div>
                                                <div class="price-list-service-price">$44
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Color Mackup
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Hair Color Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Lookbook Mackup
                                                </div>
                                                <div class="price-list-service-price">$34
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">TradationalHair Mackup
                                                </div>
                                                <div class="price-list-service-price">$44
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simplysimply dummy text is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Paris Mackup
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Chikago Mackup
                                                </div>
                                                <div class="price-list-service-price">$10
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simply Lorem Ipsum is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                        </div>
                        </div>
                      </section> -->
                      <section id="tab5" class="item" data-title="Waxing">
                        <div class="item-content">
                         <div class="price-list-main">
                            	<div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Brand new dread locking
                                                </div>
                                                <div class="price-list-service-price">50k
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Restyling/ Relockiing 
                                                </div>
                                                <div class="price-list-service-price">30k
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Dread lock treating hair
                                                </div>
                                                <div class="price-list-service-price">10k
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Dred lock change color
                                                </div>
                                                <div class="price-list-service-price">20k
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Hair Color Lorem Ipsum is simply dummy text ofthe Printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div>
                                
                                <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Dred lock repair
                                                </div>
                                                <div class="price-list-service-price">15k
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <!-- <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Plus package Pedicure treatment
                                                </div>
                                                <div class="price-list-service-price">9,500
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simplysimply dummy text is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div> -->
                                </div>
                                
                                <!-- <div class="price-list-full-row">
                                	<div class="price-list-row right-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Color
                                                </div>
                                                <div class="price-list-service-price">$75
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p> Lorem Ipsum is simply dummy text ofthe printorm Ipsum is simply. </p>
                                            </div>
                                        </div>
	                                </div>
                                    <div class="price-list-row left-space">
                                    	<div class="price-list-box">
                                        	<div class="price-list-inner-box">
                                                <div class="price-list-service-name">Hair Wash
                                                </div>
                                                <div class="price-list-service-price">$10
                                                </div>
											</div>
                                            <div class="price-list-discription"> <p>Printorm Ipsum is simply Lorem Ipsum is simply dummy text ofthe. </p>
                                            </div>
                                        </div>
	                                </div>
                                </div> -->
                                
                        </div>
                        </div>
                      </section>
					</article>
				</div>
				<div class="cta-box ">
                	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="cta-box-hours"> <i class="icofont ctaclock icofont-wall-clock"></i> Opening hours: Monday - Thursday:  09.00 AM - 8.00 PM
                        </div>
                        <div class="cta-box-hours"> <i class="icofont ctaclock icofont-wall-clock"></i> Opening hours: Friday - Saturday:  08.30 AM - 10.00 PM
                        </div>
					</div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="cta-box-btn"> <a href="{{ route('appointment') }}" title="Make an appointment" class="cta-appoint-btn">Make an appointment now <i class="icofont icofont-long-arrow-right"></i></a>
                        </div>
					</div>
				</div>

         </div>
	</div>
</section>

<!-- BOX STYLE Our Pricing section -->
<section id="pricing" class="our-pricing" style="display:none;">
	<div class="container">
         <div class="row">
              <h2 class="heading-title">Our Pricing</h2>
              <div class="our-pricing-wrapper clearfix">
                   <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                       <h4>Classic Hair Cut</h4>
                                       <p>Lorem Ipsum is simply dummy text of the printorem Ipsum is simply mmy text of the printing and typing.</p>
                                       <a href="#" title="more" class="more">more</a>
                                  </div>
                             </div>
                             <div class="our-price-box-right">
                                  <div class="price-discount">
                                       <span>25% off</span>
                                  </div> 
                                  <div class="start-price">
                                       <span>start from</span>
                                       <b>$ 12</b>
                                  </div>
                             </div>
                        </div>
                    </div>
                    <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic2.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                       <h4>Razoe Shaver</h4>
                                       <p>Lorem Ipsum is simply dummy text of the printorem Ipsum is simply mmy text of the printing and typing.</p>
                                       <a href="#" title="more" class="more">more</a>
                                  </div>
                             </div>
                             <div class="our-price-box-right">
                                  <div class="table">
                                      <div class="table-cell">
                                          <div class="start-price">
                                               <span>start from</span>
                                               <b>$ 12</b>
                                          </div>
                                      </div>
                                  </div>
                             </div>
                        </div>
                    </div>
                    <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic3.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                       <h4>Combing</h4>
                                       <p>Lorem Ipsum is simply dummy text of the printorem Ipsum is simply mmy text of the printing and typing.</p>
                                       <a href="#" title="more" class="more">more</a>
                                  </div>
                             </div>
                             <div class="our-price-box-right">
                                  <div class="table">
                                      <div class="table-cell">
                                          <div class="start-price">
                                               <span>start from</span>
                                               <b>$ 12</b>
                                          </div>
                                      </div>
                                  </div>
                             </div>
                        </div>
                    </div>
                    <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic4.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                       <h4>Mackup</h4>
                                       <p>Lorem Ipsum is simply dummy text of the printorem Ipsum is simply mmy text of the printing and typing.</p>
                                       <a href="#" title="more" class="more">more</a>
                                  </div>
                             </div>
                             <div class="our-price-box-right">
                                  <div class="price-discount">
                                       <span>25% off</span>
                                  </div> 
                                  <div class="start-price">
                                       <span>start from</span>
                                       <b>$ 12</b>
                                  </div>
                             </div>
                        </div>
                    </div>
                    <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic5.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                       <h4>Clipper Cut</h4>
                                       <p>Lorem Ipsum is simply dummy text of the printorem Ipsum is simply mmy text of the printing and typing.</p>
                                       <a href="#" title="more" class="more">more</a>
                                  </div>
                             </div>
                             <div class="our-price-box-right">
                                  <div class="table">
                                      <div class="table-cell">
                                          <div class="start-price">
                                               <span>start from</span>
                                               <b>$ 12</b>
                                          </div>
                                      </div>
                                  </div>
                             </div>
                        </div>
                    </div>
                    <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic6.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                       <h4>Mustache</h4>
                                       <p>Lorem Ipsum is simply dummy text of the printorem Ipsum is simply mmy text of the printing and typing.</p>
                                       <a href="#" title="more" class="more">more</a>
                                  </div>
                             </div>
                             <div class="our-price-box-right">
                                  <div class="table">
                                      <div class="table-cell">
                                          <div class="start-price">
                                               <span>start from</span>
                                               <b>$ 12</b>
                                          </div>
                                      </div>
                                  </div>
                             </div>
                        </div>
                    </div>
              </div>
         </div>
	</div>
</section>

<!-- Discount / Offer Banner section -->
<!-- <section class="get-discount">
	<div class="container">
         <div class="row">
              <div class="get-discount-img">
                   <img src="images/get-discount-ic.png" alt="">
              </div>
              <div class="get-discount-box">
              <h3> <b class="brown-text">Get Flat 25% Discount</b><br>
               On Every Sunday of December</h3>
               <div class="promocode"> use promo code: <span class="brown-text">barberdis </span>
               </div>
               </div>
               <p>Lorem Ipsum is simply dummy text of the printing and typing indus try<br> Lorem Ipsum has een the indus try's standard dummy text Loremsimply dummy text of the printing and<br> typeseing Lorem Ipsum has een the industry.</p>
               <a href="#" title="Make an appointment" class="read-more-btn">Make an appointment Now</a>
         </div>
	</div>
</section> -->

<!-- Appointment Form section -->
<!-- <section id="appointment" class="make-appointment">
	<div class="container">
		<div class="row">
        	<h2 class="heading-title">Make an Appointment</h2>
             Appointment Left section
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<div class="make-appointment-left-section">
                	<h2 class="heading">Opening Hours </h2>
                    <div class="make-appointment-hours-section">
						<div class="hours-list">
                            <ul>
                                <li>
                                    <span>Monday </span><span>9am-6pm</span>
                                </li>
                                <li>
                                    <span>Tuesday </span><span>9am-6pm</span>
                                </li>
                                <li>
                                    <span>Wednesday </span><span>9am-6pm</span>
                                </li>
                                <li>
                                    <span>Thursday </span><span>9am-6pm</span>
                                </li>
                                <li>
                                    <span>Friday  </span><span>9am-6pm</span>
                                </li>
                                <li>
                                    <span>Saturday  </span><span>10am-4pm</span>
                                </li>
                                <li>
                                    <span>Sunday  </span><span>CLOSED</span>
                                </li>
                            </ul>
						</div>
                    </div>
                </div>
			</div>
            
            Appointment Right section 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<div class="make-appointment-right-section">
                	<h2 class="heading-title">Book now</h2>
                    <div class="make-appointment-form">
                    	<div class="appointment-form-field">
                        	<input type="text" name="Name" placeholder="Name">
                        </div>
                        <div class="appointment-form-field">
                        	<input type="email" name="Email" placeholder="Email">
                        </div>
                        <div class="appointment-form-field">
                        	<input type="text" name="Phone" placeholder="Phone">
                        </div>
                        <div class="appointment-form-field">
                        	<select>
                            	<option>Choose Service </option>
                                <option>Hair Cut </option>
                                <option>Shave </option>
                                <option>Massage </option>
                                <option>Pedicure </option>
                            </select>
                        </div>
                        <div class="appointment-form-field">
                        	<input type="date" name="Date" placeholder="Date">
                            <div class="appointment-calender"><i class="icofont icofont-calendar"></i> </div>
                        </div>
                        <div class="appointment-form-field">
                        	<select>
                            	<option>Choose Time </option>
                                <option>9:00 to 9:30</option>
                                <option>9:30 to 10:00 </option>
                                <option>10:00 to 11:00 </option>
                                <option>11:00 to 11:30 </option>
                            </select>
                        </div>
                        
                        <div class="appointment-form-field appointment-submit-field">
                             <input type="submit" name="Make an appointment now" value="Make an appointment now">
                        </div>
                        
                    </div>
                </div>
			</div>
  
		</div>
	</div>
</section> -->

<!-- Photo Gallery section -->
<!-- <section id="gallery" class="our-gallery">
	<div class="row">
              <h2 class="heading-title">Our Gallery</h2>
              <ul class="tabs gallery-tabs">
                  <li class="tab-link current" data-tab="tab-1">Classic Hair Cut</li>
                  <li class="tab-link" data-tab="tab-2">Clipper Cut</li>
                  <li class="tab-link" data-tab="tab-3">Razoe Shaver</li>
                  <li class="tab-link" data-tab="tab-4">Hair Style</li>
              </ul>
              <div id="tab-1" class="tab-content current">
                   <div class="tab-col">
                        <div class="gallery-img">
                            <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img1-big.jpg" title=""><img src="images/galley-images/gallery-img1.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img4-big.jpg" title=""><img src="images/galley-images/gallery-img4.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img2-big.jpg" title=""><img src="images/galley-images/gallery-img2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img3-big.jpg" title=""><img src="images/galley-images/gallery-img3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox"  data-fancybox-group="gallery1" href="images/galley-images/gallery-img7-big.jpg" title=""><img src="images/galley-images/gallery-img7.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                            <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img5-big.jpg" title=""><img src="images/galley-images/gallery-img5.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img4-big.jpg" title=""><img src="images/galley-images/gallery-img4.jpg" alt=""></a>
                        </div>
                   </div>
              </div>
              <div id="tab-2" class="tab-content">
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img4-big.jpg" title=""><img src="images/galley-images/gallery-img4.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img5-big.jpg" title=""><img src="images/galley-images/gallery-img5.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img2-big.jpg" title=""><img src="images/galley-images/gallery-img2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img3-big.jpg" title=""><img src="images/galley-images/gallery-img3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img1-big.jpg" title=""><img src="images/galley-images/gallery-img1.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img4-big.jpg" title=""><img src="images/galley-images/gallery-img4.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img5-big.jpg" title=""><img src="images/galley-images/gallery-img5.jpg" alt=""></a>
                        </div>
                   </div>
              </div>
              <div id="tab-3" class="tab-content">
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img2-big.jpg" title=""><img src="images/galley-images/gallery-img2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img3-big.jpg" title=""><img src="images/galley-images/gallery-img3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img4-big.jpg" title=""><img src="images/galley-images/gallery-img4.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img5-big.jpg" title=""><img src="images/galley-images/gallery-img5.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img2-big.jpg" title=""><img src="images/galley-images/gallery-img2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
              </div>
              <div id="tab-4" class="tab-content">
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img1-big.jpg" title=""><img src="images/galley-images/gallery-img1.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img3-big.jpg" title=""><img src="images/galley-images/gallery-img3.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img4-big.jpg" title=""><img src="images/galley-images/gallery-img4.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img2-big.jpg" title=""><img src="images/galley-images/gallery-img2.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img5-big.jpg" title=""><img src="images/galley-images/gallery-img5.jpg" alt=""></a>
                        </div>
                   </div>
                   <div class="tab-col">
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img7-big.jpg" title=""><img src="images/galley-images/gallery-img7.jpg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                             <a class="fancybox" data-fancybox-group="gallery1" href="images/galley-images/gallery-img6-big.jpg" title=""><img src="images/galley-images/gallery-img6.jpg" alt=""></a>
                        </div>
                   </div>
              </div>
         </div>
         <div class="gallery_button">
              <a href="#" title="Make an appointment" class="gallery-read-more-btn">View All</a>
              </div>
</section> -->

<!-- Join / Member section -->
<!-- <section class="join-member">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            	<div class="join-member-left">
                   <h3>Want to be a menber ? Join with us</h3>
				</div>
			</div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<div class="join-member-right">
                   <a href="#" title="Make an appointment" class="read-more-btn">Join Us</a>
				</div>
			</div>
         </div>
	</div>
</section> -->

<!-- Latest-news section -->
<!-- <section id="blog" class="latest-news">
	<div class="container">
    	<div class="row">
			<h2 class="heading-title">Latest From News</h2>
	        <div class="latest-news-row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="latest-news-block">
                        <div class="latest-news-block-inner">
                              <div class="news-block-img">
                                   <img src="images/news-img1.jpg" alt="">
                              </div>
                              <div class="news-date">
                                   <div class="news-date-inner">
                                        <b>09</b>
                                        may
                                   </div>
                              </div>
                              <div class="news-text">
                                   <span>By Admin</span><span>Hair, Coloring</span>
                                   <p>Lorem Ipsum is simply ummy text of the printinorem Ipsum simply text of the priLorem Ipsum simply.</p>
                                   <a href="#" title="read-more"> read more</a>
                              </div>
                        </div>
                        
                        
                   </div>
				</div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="latest-news-block">
                        <div class="latest-news-block-inner">
                              <div class="news-block-img">
                                   <img src="images/news-img2.jpg" alt="">
                              </div>
                              <div class="news-date">
                                   <div class="news-date-inner">
                                        <b>03</b>
                                        may
                                   </div>
                              </div>
                              <div class="news-text">
                                   <span>By Admin</span><span>Hair, Coloring</span>
                                   <p>Lorem Ipsum is simply ummy text of the printinorem Ipsum simply text of the priLorem Ipsum simply.</p> 
                                   <a href="#" title="read-more"> read more</a>
                              </div>
                        </div>
                   </div>
				</div>
			</div>
         </div>
	</div>
</section> -->

<!-- Our Brand section -->
<!-- <section id="brands" class="brand-section">
    <div class="container">
    	<div class="row">
        	<h2 class="heading-title">Our Brands Partners</h2>
            <div class="testimonial-logo clearfix">
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo1.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo2.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo3.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo4.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo1.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo2.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo3.png" alt=""></a>
               </div>
               <div class="testi-logo-img">
                    <a href="#" title=""><img src="images/logo4.png" alt=""></a>
               </div>
            </div>
		</div>
    </div>
</section> -->

<!-- Contact Us section -->
<section id="location" class="map-banner">
	<div class="container">
         <div class="row">
         	<h2 class="heading-title">Contact us</h2>
			<div class="map-top-ic clearfix">
                   <div class="map-top-block">
                        <div class="map-inner-ic">
                             <i class="icofont icofont-location-pin"></i>
                        </div>
                        <div class="map-top-text">
                             <span>Location</span>
                             <p>Legend mall 
                              2,edet bassey way, Thomas estate ajah
                              Shop 29</p>
                        </div>
                   </div>
                   <div class="map-top-block">
                        <div class="map-inner-ic">
                             <i class="icofont icofont-smart-phone"></i>
                        </div>
                        <div class="map-top-text">
                             <span>Call us</span>
                             <p>+91 123 456 7890</p>
                        </div>
                   </div>
                   <div class="map-top-block">
                        <div class="map-inner-ic">
                             <i class="icofont icofont-envelope-open"></i>
                        </div>
                        <div class="map-top-text">
                             <span>Email Us</span>
                             <p><a href="mailto:youremailid@gmail.com" title="youremailid@gmail.com">youremailid@gmail.com</a></p>
                        </div>
                   </div>
                   <div class="map-top-block">
                        <div class="map-inner-ic">
                             <i class="icofont icofont-clock-time"></i>
                        </div>
                        <div class="map-top-text">
                             <span>Hours</span>
                             <p>Mon to Thur: 9AM to 8PM</p>
                             <p>Fri to Sat: 8:30AM to 10PM</p>
                        </div>
                   </div>
              </div>
         </div>
	</div>
</section>

<div class="map-img">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48331.30547831374!2d-74.05590848053964!3d40.79046415662649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25804d4293b57%3A0x5efe2629bb9f9381!2sNorth+Bergen%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1503222998458" frameborder="0" allowfullscreen></iframe>
</div>

<!-- Footer section -->
<section class="footer">
	<div class="container">
		<div class="footer-logo">
    		<img src="images/footer-logo.png" alt="footerlogo">
    	</div>
		<div class="row">
              <div class="footer-nav">
                   <ul>
                       <li><a href="#" title="Home">Home</a></li>
                       <!-- <li><a href="#" title="Aboutus">Abou tus</a></li> -->
                       <li><a href="#" title="Services">Services</a></li>
                       <!-- <li><a href="#" title="Testimonials">Testimonials</a></li> -->
                       <!-- <li><a href="#" title="Our Team">Our Team</a></li> -->
                       <li><a href="#" title="Pricing">Pricing</a></li>
                       <li><a href="#" title="Appointment">Appointment</a></li>
                       <!-- <li><a href="#" title="Our Gallery">Our Gallery</a></li> -->
                       <!-- <li><a href="#" title="Latest Blog">Latest Blog</a></li> -->
                       <li><a href="#" title="Location">Location</a></li>
                   </ul>
              </div>
              <div class="subscribe-us clearfix">
                   <h5>Subscribe us</h5>
                   <p>Subscribe to our Newsletter to get first Gift voucher by Unique Barber</p>
                   <div class="subscribe-email">
                        <input type="text" name="Enter your email" placeholder="Enter your email">
                        <input type="submit" name="submit">
                   </div>
                   <div class="social-ic">
                        <ul>
                            <li><a href="#" title="Facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#" title="Google plus"><i class="icofont icofont-social-google-plus"></i></a></li>
                            <li><a href="#" title="Pintrest"><i class="icofont icofont-social-pinterest"></i></a></li>
                            <li><a href="#" title="youtube"><i class="icofont icofont-social-youtube-play"></i></a></li>
                        </ul> 
                   </div>
                   <p class="copyright">&copy; 2023 Made by <span><a href="#" target="_blank"> @vibeTech</a></span></p>
              </div>
         </div>
		<a href="#top" class="scroll-top">go top</a>
    </div>
</section>


<script type="text/javascript" src="{{ asset('js/jquery1.12.4.min.js') }}"></script>			<!--jquery Reference-->
<script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script>			<!--fancybox jquery-->
<script type="text/javascript" src="{{ asset('js/smoothslides-2.2.1.min.js') }}"></script>     <!--smooth slider js-->
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>					<!--Service slider jquery-->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>						<!--custom jquery Reference-->
<script type="text/javascript" src="{{ asset('js/tab.js') }}"></script>						<!--Tab jquery-->

</body>
</html>
