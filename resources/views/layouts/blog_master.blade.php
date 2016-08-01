 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <!-- Basic Page Needs
    ================================================== -->
        <meta charset="utf-8">
        <title>Edo Blog</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas
    ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
         <!-- CSS
         ================================================== -->
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
        <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
	
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
    </head>

 <body data-spy="scroll" data-target=".navbar-fixed-top">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @extends('layouts.fe_header')

    <!-- Portfolio works Start -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="blog-header text-center">
                    <h2>Edo Blog</h2>
                    <p>Welcome to my page</p>
                     <!-- <ul class="breadcrumb">
                        <li>home</li>
                        <li>blog</li>
                        <li>single post details</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section>
    <section id="blog-single">
        <div class="container">
            <!-- Portfolio item slider start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-post">
<!--                 <div class="portfolio-slider-wrapper">
                    <ul id="portfolio-slider">
                        <li><img src="images/slider/s2.jpg" alt="" class="img-responsive"/></li>
                        <li><img src="images/slider/s1.jpg" alt="" class="img-responsive"/></li>
                        <li><img src="images/slider/s3.jpg" alt="" class="img-responsive"/></li>
                    </ul>
                </div> -->
                @yield('single-post')
                @yield('list-post')
            </div>  <!-- blog footer end -->
           
    <!-- left blog part end -->

    <!-- Right Blog part row start -->
            <div class="row">
                <!-- sidebar start -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-sidebar">
                        <form action="form">
                            <div class="blog-search">
                                <div class="serach">
                                    <input placeholder="Search" type="search">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                         </form>
                        <!-- <hr> -->
                        
                        <!-- <div class="recent-post">
                            <h4>Latest posts</h4>
                            <hr>
                            <ul>
                            @foreach ($latestpost as $lpost)
                                <li class="col-md-12 col-sm-4"> 
                                    <div class="single-post">
                                        <a href="{{ url('/posts') . '/' . $lpost->slug }}"><img src="/images/blog/{{ ($lpost->image && strlen($lpost->image) > 14 ) ? substr($lpost->image,0,8) . '/' . $lpost->image : 'pic4.jpg' }}" alt="" class="img-responsive">
                                            <h4>{{ $lpost->title }}</h4>
                                        </a>
                                        <span>3 days ago</span>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                                                    
                            </ul>
                        </div> -->

                        <!-- Recent posts end --> 
                        
         <!--                <div class="clearfix"></div> -->
                         <div class="blog-catagory">
                            <h4>Blog catagories</h4>
                            <ul>
                            @foreach ($cats as $cat)
                                <li>
                                    <a href="{{ url('category/') . '/' . $cat->slug }}"> 
                                        <i class="fa fa-angle-right"></i> {{ $cat->category }} <span class="badge">{{$cat->postItems}}</span>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        </div>  <!-- blog catagory end -->
                        <!--
                        <div class="blog-tab">
                            <div role="tabpanel">
                             #Nav tabs
                              <ul class="nav nav-tabs tab-default" role="tablist">
                                    <li class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tweets</a>
                                    </li>
                                    <li>
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Comments</a>
                                    </li>
                              </ul>

                              #Tab panes
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="single-tweet">
                                        <h4><i class="fa fa-twitter"></i> John Doe <span>2 days ago</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                        
                                    </div>
                                    <div class="single-tweet">
                                        <h4><i class="fa fa-twitter"></i> Hitler Doe <span>6 days ago</span></h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                            <a href="http://t.co/hd3sk">http://t.co/hd3sk</a></p>
                                        
                                    </div>
                                    <div class="single-tweet">
                                        <h4><i class="fa fa-twitter"></i> Adlof Hitler  <span>4 days ago</span></h4>
                                        <p> 
                                            Voluptatem illo fugit libero, odio officiis, dolore. Cumque, perferendis. Alias fuga natus dicta quae.
                                            <a href="http://t.co/hd3sk">http://t.co/hd3sk</a>
                                        </p>
                                       
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="com">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit molestiae asperiores cumque deleniti delectus laboriosam amet tempore odit tenetur fugit magnam vel voluptatum repellendus dolorum ut earum dolore, soluta quaerat.</p>
                                     </div>
                                 </div>
                              </div>
                            </div>
                        </div>-->
                        <!-- blog tab end -->

                        <div class="clearfix"></div>
                        <div class="right-tags">
                             <h4 >Tags</h4>
                             <hr>
                            <div class="footer_menu tags">
                                @foreach ($stag as $tgs)
                                    <a href="{{ url('/tag') . '/' . $tgs->slug }}"> {{$tgs->tag}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- blog sidebar end -->
                </div>
            </div>
            <!-- sidebar end -->

            </div><!-- Portfolio item row end -->
</section>  <!-- Portfolio Section End -->

<!-- Footer Start -->
    @extends('layouts.fe_footer')
<!-- Footer Area End -->

<!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->

		<!-- initialize jQuery Library -->
		<!-- <script type="text/javascript" src="js/jquery2.js"></script> -->
        <!-- Main jquery -->
        <script type="text/javascript" src="{{route('homepage')}}/js/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{route('homepage')}}/js/bootstrap.min.js"></script>
	    <!-- <script>
              $('#portfolio-slider').bxSlider({
                mode: 'fade',
                autoControls: false
              });
        </script> -->
      
    </body>
</html>
