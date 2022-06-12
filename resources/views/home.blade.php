<!DOCTYPE html>
<html lang="en">
<head>

     <title>Eatery Cafe and Restaurant Template</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a  class="navbar-brand">Eatery Cafe
               <a class="menu-trigger">
                    
               </a>
               </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#team" class="smoothScroll">Chef</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         <li class="smoothScroll" style="background-color: red;">
                              
                         @auth

                         <a href="{{url('/showcart',Auth::user()->id)}}">
                         Cart{{$count}}

                         </a>


                         @endauth


                         @guest

                         Cart[0]

                         @endguest
                    </a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         
                         <a href="#footer" class="section-btn">Reserve a table</a>
                         <li>
                         @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       <li> <x-app-layout>
    
                            </x-app-layout>
                       </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                         </li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Eatery Cafe &amp; Restaurant</h3>
                                             <h1>Our mission is to provide an unforgettable experience</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Breakfast</h3>
                                             <h1>The best dinning quality can be here too!</h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>New Restaurant in Town</h3>
                                             <h1>Enjoy our special menus every Sunday and Friday</h1>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods </h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>India represents one of the oldest continuous civilization in human history, dating back 3300 BCE. It is ever-evolving and continues to do so today.  It is the largest democracy with over a billion people, numerous religions, languages and subcultures. Indian cuisine is anything but homogenous! Regions and religions make up a large portion of the cultural fabric of the food. The 21st century globalization has made all sorts of ingredients and techniques available to the Chefs in India. Today India produces more culinary graduates than any other country. They are full of creative energy and looking to the rest of the world to spice-up new ingredients to ‘Indianize’ them  that’s where we come…</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


    @include("foodchef")


    @include("food")


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>“Eatery Cafe Restaurant managed the catering for a conference dinner held at The Tanks Arts Centre last week. We originally had almost 300 guests booked to attend, however with the sudden border closures across the nation our numbers decreased significantly. Carley and Craig were so accommodating with all of our changes, and provided a fantastic solution for a fabulous, more intimate dinner. On the night their staff were extremely professional, and the food was amazing!. The Ochre team were a pleasure to work with – we look forward to working with them again in the near future.”</p>
                                       
                              </div>

                              <div class="item">
                                   <p>“Please thank your team for their professional, efficient and friendly service on Sat night.  The chefs smashed it and the drinks flowed freely!  Everyone was impressed and were quite taken with how cost effective it was to have Ochre do what you did.”</p>
                                       
                              </div>

                              <div class="item">
                                   <p>We would just like to thank you and your team for giving us such an amazing night Saturday. Both your chef and waiter were super friendly, respectful, skilled, accommodating and professional.</p>
                                     
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     @include("reservation")


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>