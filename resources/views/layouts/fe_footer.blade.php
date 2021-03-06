<!-- Footer Area Start -->

<section id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h3 class="menu_head">Main Menu</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{ route('homepage') . '#myslider' }}" >Home </a></li>
                            <li><a href="{{ route('homepage') . '#about' }}" >About me</a> </li>
                            <li><a href="{{ route('homepage') . '#portfolio' }}" >My work</a> </li>
                            <li><a href="{{ route('blog')}}" >Blog</a> </li>
                            <li><a href="{{ route('homepage') . '#contact' }}" >Contact me</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h3 class="menu_head">Useful Links</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">inventore natus ullam eum</a></li>
                            <li><a href="#">consectetur adipisicing elit.</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h3 class="menu_head">Contact us</h3>
                    <div class="footer_menu_contact">
                        <ul>
                            <li> <i class="fa fa-home"></i>
                                <span>  </span></li>
                            <li><i class="fa fa-globe"></i>
                                <span> </span></li>
                            <li><i class="fa fa-phone"></i>
                                <span> </span></li>
                            <li><i class="fa fa-map-marker"></i>
                            <span> </span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h3 class="menu_head">Tags</h3>
                    <div class="footer_menu tags">
                        @foreach ($stag as $tgs)
                            <a href="{{ url('/tag') . '/' . $tgs->slug }}"> {{$tgs->tag}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom">
                        <p class="text-block"> &copy; Edo Blog <span></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Footer Area End -->

<!-- Back To Top Button -->
    <div id="back-top">
        <a href="{{(Route::current()->getName() == 'homepage') ? '#slider' : '#banner' }}" class="scroll" data-scroll>
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
        </a>
    </div>
<!-- End Back To Top Button --> 

