<style>
    .menu-item-has-children {
    position: relative;
}

.sub-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    list-style: none;
    padding: 0;
    margin: 0;
    min-width: 180px;
}

.sub-menu li {
    padding: 10px;
}

.sub-menu li a {
    display: block;
    text-decoration: none;
    color: #333;
}

.menu-item-has-children:hover .sub-menu {
    display: block;
}
</style>

<div id="top-bar" class="top-header">
    <div class="container">
        <div class="top-left">
            <span class="fax"><i class="fa fa-envelope-o" aria-hidden="true"></i>pj_pharmacology@yahoo.com -
                pjp@uok.edu.pk</span>
        </div>
        <div class="top-right">

        </div>

    </div>
</div>
<div class="sticky-wrapper" id="sticky-wrapper">
    <div id="masthead-sticky-wrapper" class="sticky-wrapper" style="height: 110px;">
        <header id="masthead" class="site-header main-navigation-holder" role="banner">
            <div class="container">
                <div class="head-wrap">
                    <div class="site-branding">

                        <h2 class="site-title"><a href="{{ url('/home') }}" rel="home">Pakistan
                                Journal of Pharmacology</a></h2>


                        <h3 class="site-description">ISSN: 0255-7088</h3>

                    </div><!-- .site-branding -->

                    <div id="main-nav" class="clear-fix">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <div class="wrap-menu-content">
                                <div class="menu-main-container">
                                    <ul id="primary-menu" class="menu">
                                        <li id="menu-item-220"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-home {{ request()->is('home') ? 'current-menu-item' : ''}} ">
                                            <a href="{{ url('/home') }}">Home</a></li>
                                        <li id="menu-item-219"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-219 {{ request()->is('board') ? 'current-menu-item' : ''}}">
                                            <a href="{{ url('/board') }}">Board</a></li>
                                            <li id="menu-item-216"
                                        class="menu-item menu-item-has-children
                                        {{ request()->is('instructions*') ? 'current-menu-item' : ''}}">
                                                                        
                                        <a href="#">Instructions</a>
                                                                        
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ url('/instructions') }}">Instructions</a>
                                            </li>
                                            <li class="{{ request()->is('instructions/editorial') ? 'current-menu-item' : ''}}">
                                                <a href="/peer-review">Peer Review Guidelines</a>
                                            </li>
                                        
                                            <li class="{{ request()->is('instructions/guidelines') ? 'current-menu-item' : ''}}">
                                                <a href="{{ url('conflict-of-interes')}}">conflict of interes</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-216"
                                        class="menu-item menu-item-has-children
                                        {{ request()->is('instructions*') ? 'current-menu-item' : ''}}">
                                                                        
                                        <a href="#">Editorial</a>
                                                                        
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ url('/appeals-url') }}">Appeals</a>
                                            </li>
                                            <li class="{{ request()->is('instructions/editorial') ? 'current-menu-item' : ''}}">
                                                <a href="/publication-misconduct">Publication Misconduct</a>
                                            </li>
                                        
                                            <li class="{{ request()->is('instructions/guidelines') ? 'current-menu-item' : ''}}">
                                                <a href="{{ url('conflict-of-interes')}}">complain policy</a>
                                            </li>
                                            
                                            <li class="{{ request()->is('instructions/guidelines') ? 'current-menu-item' : ''}}">
                                                <a href="{{ url('authorship-criteria')}}">Authorship Criteria</a>
                                            </li>

                                            <li class="{{ request()->is('instructions/guidelines') ? 'current-menu-item' : ''}}">
                                                <a href="{{ url('advertising-policy')}}">Advertising Policy</a>
                                            </li>
                                        </ul>
                                    </li>
                                        {{-- <li id="menu-item-216"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-216 {{ request()->is('instructions') ? 'current-menu-item' : ''}}" >
                                            <a href="{{ url('/instructions') }}">Instructions</a></li> --}}
                                        <li id="menu-item-218"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-218">
                                            <a href="{{ url('/current-issue') }}">Current</a></li>
                                        <li id="menu-item-217"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-217">
                                            <a href="{{ url('/previous-issues') }}">Previous</a></li>
                                        <li id="menu-item-5323"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-5323 {{ request()->is('submission') ? 'current-menu-item' : ''}}">
                                            <a href="{{ url('/submission') }}">Submission</a></li>
                                        <li id="menu-item-250"
                                            class="menu-item menu-item-type-post_type
                                            menu-item-object-page menu-item-250 {{ request()->is('contact-us') ? 'current-menu-item' : ''}}">
                                            <a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div><!-- .menu-content -->
                        </nav><!-- #site-navigation -->
                    </div> <!-- #main-nav -->
                </div>
            </div><!-- .container -->
        </header>
    </div><!-- #masthead -->
</div><!-- .sticky-wrapper -->
{{-- Slider Start Here --}}
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 16em;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
        </ol>

        <div class="carousel-inner">
            {{-- <div class="item active"> --}}
            {{-- <img src="https://fastly.picsum.photos/id/866/700/400.jpg?hmac=sC3DE648nVwQuF6Dl3-a_wcznLELp0_OYxnNZ23bmLk" alt="Los Angeles" style="width:100%;"> --}}
            {{-- <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div> --}}
            {{-- </div> --}}

            <div class="item active">
                <img src="{{ url('uploads/nivoslider4wp_files') }}/87_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/24_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/122_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/88_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/84_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/44_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/47_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/49_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/46_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>
            <div class="item">
                <img src="{{ url('/uploads/nivoslider4wp_files/') }}/48_s.jpeg"
                    alt="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    title="Faculty of Pharmacy &amp; Pharmaceutical Sciences, University of Karachi"
                    style="width:100%;">
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
{{-- Slider End Here --}}
