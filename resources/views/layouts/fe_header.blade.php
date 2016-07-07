<header id="section_header" class="navbar-fixed-top main-nav" role="banner">
        <div class="container">
            <!-- <div class="row"> -->
                 <div class="navbar-header ">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="/images/logo2.png" alt="">
                        </a>
                 </div><!--Navbar header End-->
                    <nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="nav navbar-nav navbar-right ">
                            <li class="active"><a href="{{ url('/') }}" >Home </a></li>
                            <li><a href="{{ url('/') . '#service' }}"  >Services</a> </li>
                            <li><a href="{{ url('/') . '#portfolio' }}"  >Portfolio</a> </li>
                            <li><a href="{{ url('/') . '#about' }}" >About Us </a> </li>
                            <li><a href="{{ url('/') . '#team' }}" >Our Team </a> </li>
                            <li><a href="{{ url('/') . '#blog' }}" >Blog</a> </li>
                            <li><a href="{{ url('/') . '#contact' }}" >Contact Us</a> </li>
                        </ul>
                    </nav>
        </div><!-- /.container-fluid -->
</header>
