 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
    <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8">
        <title>Edo Nguyen</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- CSS
        ================================================== -->
         <link rel="stylesheet" href="{{ asset('/css/full-slider.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css') }}">
        <!-- Animation -->
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.theme.css') }}">
        <!-- Pretty Photo -->
        <link rel="stylesheet" href="{{ asset('/css/prettyPhoto.css') }}">
        <!-- Main color style -->
        <link rel="stylesheet" href="{{ asset('/css/red.css') }}">
        <!-- Template styles-->
        <link rel="stylesheet" href="{{ asset('/css/fe_custom.css') }}">
        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
    
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
    </head>

 <body data-spy="scroll" data-target=".navbar-fixed-top">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @extends('layouts.fe_header')
    <!-- Full Page Image Background Carousel Header -->
    <header id="myslider" class="carousel slide">
        <!-- Indicators -->
<!--         <ol class="carousel-indicators">
            <li data-target="#mySlider" data-slide-to="0" class="active"></li>
            <li data-target="#mySlider" data-slide-to="1"></li>
            <li data-target="#mySlider" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="overlay-slide">
                    <div class="fill" style="background-image:url('{{ asset('/images/banner/p10.jpg') }}');"></div>
                </div>
                <div class="carousel-caption">
                    <h2 class="animated2"> <b> A </b> Experience  </h2>
                    <p class="animated3">i have learned more from my failures than from my success</p>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="overlay-slide">
                    <div class="fill" style="background-image:url('{{ asset('/images/banner/p3.jpg') }}');"></div>
                </div>
                <div class="carousel-caption">
                     <h2 class="animated2"> <b> A </b> Friend  </h2>
                    <p class="animated2"> friendship doubles your joys, and divides your sorrows</p>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="overlay-slide">
                    <div class="fill" style="background-image:url('{{ asset('/images/banner/p5.jpg') }}');"></div>
                </div>
                <div class="carousel-caption">
                    <h2 class="animated2"> <b> A </b> Life  </h2>
                    <p class="animated2"> live each day as if it’s your last</p>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <div class="slides-control ">
            <a class="left carousel-control" href="#myslider" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#myslider" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>

    </header>

    


    <!-- Testimonial Start -->
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_header text-center">
                        <h3 class="feature_title">About <b>Me</b></h3>
                        <h4 class="feature_sub">Welcome to my blog</h4>
                        <div class="divider"></div>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
            <div class="row">
                <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                    <div class="item">
                      <div class="testimonial-thumb">
                        <img class="img-circle" src="images/team/pic1.jpg" alt="testimonial" >
                      </div>
                      <div class="testimonial-content">
                        <h3 class="name">Katee Nureen <span>Exectuive Director</span></h3>
                        <p class="testimonial-text">
                          iLorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                        </p>
                      </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row End -->
    </section> <!-- Section Testimonial End -->

    <!-- Testimonial Area End -->

    <!-- About details start -->
    <section id="about-details">
        <div class="container">
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="feature_header text-center">
                                <h3 class="feature_title">My <b>Skills</b></h3>
                                <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Iusto provident non voluptatibus animi quidem incidunt eum, eligendi doloribus dicta.</h4>
                                <div class="divider"></div>
                            </div>
                        </div>  <!-- Col-md-12 End -->
                    </div>
                <div class="about-desc">
                    <div class="row">
                    <!-- Left about end -->
                        <div class="col-md-6">
                            <div class="single-progress">
                                <label > HTML/CSS/JavaScript</label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span class="sr-only">Exprienced</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-progress">
                                <label > PHP/MySQL </label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span class="sr-only">Exprienced</span>
                                  </div>
                                </div>
                            </div>
                           
                        </div>
                    </div> <!--row end -->

                    <div class="row">
                        <div class="col-md-6">
                             <div class="single-progress">
                                <label > Laravel/Zend Framwork/CodeIgniter/CakePHP</label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    <span class="sr-only">Intermediate</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-progress">
                                <label > C++/C#/Java</label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    <span class="sr-only">Intermediate</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- 2nd row end -->
                    <div class="row">
                        <div class="col-md-6">
                             <div class="single-progress">
                                <label > Git/SVN</label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span class="sr-only">Exprienced</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-progress">
                                <label > Joomla/Drupal/Wordpress</label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    <span class="sr-only">Intermediate</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- 2nd row end -->
                </div> <!-- about desc end -->
            </div>
    </section>
    <!-- About details end -->

    <!-- Portfolio works Start -->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_header text-center">
                        <h3 class="feature_title">My <b>Works</b></h3>
                        <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                        <div class="divider"></div>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>


    <div id="isotope-filter" class="skew3 text-center">
        <a data-filter="*"  href="#" class="active ">All</a>
        <a data-filter=".identity"  href="#" class="">Identity</a>
        <a data-filter=".web-design" href="#"  class="">Web Design</a>
        <a data-filter=".graphic"  href="#" class="">Graphic</a>
        <a data-filter=".logo"  href="#" class="">Photography</a>
    </div>
    <div class="clearfix"></div>
        <div class="container">
            <div class="text-center ">
              <ul class="portfolio-wrap" id="portfolio_items">
                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio identity web-design">
                        <figure>
                            <img src="images/portfolio/p1.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p1.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio logo graphic">
                        <figure>
                        <img src="images/portfolio/p2.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p2.jpg"  data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio graphic logo">
                        <figure>
                            <img src="images/portfolio/p3.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p3.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio web-design identity">
                        <figure>
                            <img src="images/portfolio/p7.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p7.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio logo web-design">
                        <figure>
                            <img src="images/portfolio/p5.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p5.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio logo graphic">
                        <figure>
                            <img src="images/portfolio/p6.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p6.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio graphic identity">
                        <figure>
                            <img src="images/portfolio/p3.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p3.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-3 single-portfolio web-design graphic">
                        <figure>
                            <img src="images/portfolio/p7.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p7.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                </ul>
            </div>
        </div> <!-- Container Full End -->
</section>
<!-- Portfolio Section End -->

<div class="clearfix"></div>

<section id="video-fact">
    <div class="container">
         <div class="row">
                 <div class="col-md-6 ">
                    <div class="landing-video">
                        <div class="video-embed wow fadeIn" data-wow-duration="1s">
                                <!-- Change the url -->
                            <iframe src="http://player.vimeo.com/video/95864492?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56" width="350" height="281" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="video-text">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Heading One
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body p1">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                              </div>
                            </div>
                          </div>
                      <div class="panel panel-default">
                        <div class="panel-heading " role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Heading Two
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body p1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading " role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Heading Three
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body p1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div> 
        </div><!-- row End -->
    </div>
</section>
<div class="clearfix"></div>

<!-- bLOG Start -->
    @yield('blog')
<!-- bLOG End -->

<!-- Conatct Area Start-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Contact <b>Me</b></h3>
                    <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="contact_full">
                <div class="col-md-6 left">
                    <div class="left_contact">
                        <form action="role">
                            <div class="form-level">
                                <input name="name" placeholder="Name" id="name"  value="" type="text" class="input-block">
                                <span class="form-icon fa fa-user"></span>
                            </div>
                            <div class="form-level">
                                <input name="email" placeholder="Email" id="mail" class="input-block" value="" type="email">
                                <span class="form-icon fa fa-envelope-o"></span>
                            </div>
                            <div class="form-level">
                                <input name="name" placeholder="Phone" id="phone" class="input-block" value="" type="text">
                                <span class="form-icon fa fa-phone"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 right">
                    <div class="form-level">
                        <textarea name="" id="messege"  rows="5" class="textarea-block" placeholder="message"></textarea>
                        <span class="form-icon fa fa-pencil"></span>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-main featured">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div id="g-map" class="no-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="map" id="map"></div>
        </div>
    </div>
</div> -->
<!-- Footer Area Start -->
    @extends('layouts.fe_footer')
<!-- Footer Area End -->





<!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->

        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap jQuery -->
         <script src="{{route('homepage')}}/js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script src="{{route('homepage')}}/js/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="{{route('homepage')}}/js/jquery.isotope.js"></script>
        <!-- Pretty Photo -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery.prettyPhoto.js"></script>
        <!-- SmoothScroll -->
        <script type="text/javascript" src="{{route('homepage')}}/js/smooth-scroll.js"></script>
        <!-- Image Fancybox -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Counter  -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery.counterup.min.js"></script>
        <!-- waypoints -->
        <script type="text/javascript" src="{{route('homepage')}}/js/waypoints.min.js"></script>
        <!-- Bx slider -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery.bxslider.min.js"></script>
        <!-- Scroll to top -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery.scrollTo.js"></script>
        <!-- Easing js -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery.easing.1.3.js"></script>
         <!-- PrettyPhoto -->
        <script src="{{route('homepage')}}/js/jquery.singlePageNav.js"></script>
        <!-- Wow Animation -->
        <script type="js/javascript" src="{{route('homepage')}}/js/wow.min.js"></script>
        <!-- Google Map  Source -->
        <!-- <script type="text/javascript" src="js/gmaps.js"></script>-->
        <!-- Custom js -->
        <script src="{{route('homepage')}}/js/custom.js"></script>
         <script>
        // Google Map - with support of gmaps.js
        // var map;
        // map = new GMaps({
        //   div: '#map',
        //   lat: 23.709921,
        //   lng: 90.407143,
        //   scrollwheel: false,
        //   panControl: false,
        //   zoomControl: false,
        // });

        // map.addMarker({
        //   lat: 23.709921,
        //   lng: 90.407143,
        //   title: 'Smilebuddy',
        //   infoWindow: { 
        //     content: '<p> Smilebuddy, Dhanmondhi 27</p>'
        //   },
        //   icon: "images/map1.png"
        // });
        </script>
 
    </body>
</html>
