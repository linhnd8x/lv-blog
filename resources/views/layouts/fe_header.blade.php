<header id ="section_header" class="navbar-fixed-top main-nav" role="banner">
        <div class="container">
            <!-- <div class="row"> -->
                 <div class="navbar-header ">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">EDO BLOG</a>
    
                 </div><!--Navbar header End-->
                    <nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="nav navbar-nav navbar-right ">
                            <li><a href="{{ route('homepage') . '#myslider' }}" >Home </a></li>
                            <li><a href="{{ route('homepage') . '#about' }}" > About Me</a> </li>
                            <li><a href="{{ route('homepage') . '#portfolio' }}" >My Work</a> </li>
                            <li><a href="{{ route('homepage') . '#blog' }}" >Blog</a> </li>
                            <li><a href="{{ route('homepage') . '#contact' }}" >Contact Me</a> </li>
                        </ul>
                    </nav>
        </div><!-- /.container-fluid -->
</header>
